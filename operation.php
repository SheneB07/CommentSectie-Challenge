<?php 

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['comment']))
        {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $parent_id = null;

            $stmt = $conn->prepare('INSERT INTO `comments`(`name`, `comment_text`, `parent_id`) VALUES (:name, :comment, :parent_id)');

            $stmt-> execute(array(':name'=>$name,':comment'=>$comment,':parent_id'=>$parent_id));

            header('Location: index.php');
            exit;

        }
    }

    if(isset($_POST['submit-reply'])){
        $name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $comment_text= filter_input(INPUT_POST,'comment_text',FILTER_SANITIZE_STRING);
        $replyTo= filter_input(INPUT_POST,'reply-to-name',FILTER_SANITIZE_STRING);
        $comment_text= $replyTo . " " . $comment_text;
        $parent_id= $_POST['parent_id'];
        
        if(!empty($_POST['name']) && !empty($_POST['reply-comment-text'])){
            $stmt = $conn->prepare('INSERT INTO `comments`(`name`, `comment_text`, `parent_id`) VALUES (:name, :comment, :parent_id)');

            $stmt-> execute(array(':name'=>$name,':comment'=>$comment_text,':parent_id'=>$parent_id));

            header('Location: index.php');
            exit;
        }
    }

    $stmt = $conn->query('SELECT * FROM `comments`');
    $comments = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $comment=array(
            'id' => $row['id'],
            'name' => $row['name'],
            'comment' => $row['comment_text'],
            'parent_id' => $row['parent_id'],
            'replies' => array()
    );

    if($row['parent_id'] !== null)
    {
        foreach($comments as $parent){
            if($parent['id'] == $row['parent_id']){
                $parent['replies'][] = $comment;
            }
        }
        unset($parent);
    }else{
        $comments[] = $comment;
    }
}

function display_comments($comments, $parent_id = null) {
    echo '<ul>';
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $parent_id) {
            echo '<li class="comment">';
            echo '<div class="comment-info">';
            echo '<span class="comment-name" data-username="' . htmlspecialchars($comment['name']) . '">' . htmlspecialchars($comment['name']) . '</span>';
            echo '</div>';
            echo '<div class="comment-text">' . htmlspecialchars($comment['comment']) . '</div>';

            if ($parent_id == null) {
                echo '<button class="reply-button" data-username-text="' . htmlspecialchars($comment['name']) . '" data-parent-id="' . $comment['id'] . '">Reply</button>';
            } else {
                echo '<button class="reply-button" data-username-text="' . htmlspecialchars($comment['name']) . '" data-parent-id="' . $comment['parent_id'] . '">Reply</button>';
            }

            if (!empty($comment['replies'])) {
                display_comments($comment['replies'], $comment['id']);
            }
            echo '</li>';
        }
    }
    echo '</ul>';
}

?>
