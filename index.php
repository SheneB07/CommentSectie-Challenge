<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<?php
use YoHang88\LetterAvatar\LetterAvatar;

$avatar = new LetterAvatar('Steven Spielberg');

// Square Shape, Size 64px
$avatar = new LetterAvatar('Steven Spielberg', 'square', 64);

// Save Image As PNG/JPEG
$avatar->saveAs('path/to/filename');
$avatar->saveAs('path/to/filename', LetterAvatar::MIME_TYPE_JPEG);
?>
<img src="<?php echo $avatar ?>" />
        <iframe width="100%" height="400"
        src="https://www.youtube.com/embed/dpaijbLEo4Y">
        </iframe>
        <form action="operation.php" method="post">
            <label for="name"> Name: </label>
            <input type="text" name="name" id="name" required>

            <label for="comment"> Comment: </label>
            <textarea name="comment" id="comment" rows="5" required></textarea>

            <input type="submit" name="submit" value="Post Comment">

        </form>

        <div class="comments">
            <h2>Comments</h2>
            <div class="comment-container">
                <?php
                include 'operation.php';
                display_comments($comments);
                ?>
                <!-- <ul>
                    <li class="comment">
                        <div class="comment-info">
                            <span class="comment-name">Username</span>
                        </div>

                        <div class="comment-text">Comment text here</div>
                        <button class="reply-button">Reply</button>
                    </li>
                </ul> -->
        </div>

        <form id="reply-form" method="post" action="operation.php">

            <input type="hidden" name="parent_id" id="parent-id">
            <label for="name">Name:</label>
            <input type="text" name="name" id="reply-name">
            <input type="hidden" name="reply-to-name" id="reply-to">
            <label for="reply-comment-text">Comment:</label>
            <textarea name="comment_text" id="reply-comment-text" rows="5" required></textarea>
            <button type="submit" name="submit-reply">Submit</button>
            <button name="cancel" id="cancel-button">Cancel</button>
        </form> 


    </div>
</div>

<script src="script.js"></script>

</body>
</html>