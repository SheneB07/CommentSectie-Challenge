<?php 

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['comment']))
        {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $parent_id = null;

            $stmt = $conn->prepare('INSERT INTO `comments`(`id`, `name`, `comment_text`, `parent_id`) VALUES (:name, :comment, :parent_id)');

            $stmt-> execute(array(':name'=>$name,':comment'=>$comment,':parent_id'=>$parent_id));

            header('Location: '.$_SERVER['PHP_SELF']);
            exit;

        }
    }
?>