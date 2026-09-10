<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
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
                //display comments from database using php
                ?>
                <ul>
                    <li class="comment">
                        <div class="comment-info">
                            <span class="comment-name">Username</span>
                        </div>

                        <div class="comment-text">Comment text here</div>
                        <button class="reply-button">Reply</button>
                    </li>
                </ul>
        </div>

        <form id="reply-form" method="post" action="">

            <input type="text" name="parent-id" id="parent-id">
            <label for="name">Name:</label>
            <input type="text" name="name" id="replay-name">
            <input type="text" name="name" id="replay-to">
            <label for="replay-comment-text">Comment:</label>
            <textarea name="replay-comment-text" id="replay-comment-text" rows="5" required></textarea>
            <button type="submit" name="submit-replay">Submit</button>
            <button name="cancel" id="cancel-button">Cancel</button>
        </form> 


    </div>
</div>

<script src="script.js"></script>

</body>
</html>