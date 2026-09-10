<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="name"> Name: </label>
            <input type="text" name="name" id="name" required>

            <label for="comment"> Name: </label>
            <textarea name="comment" id="comment" rows="5" required></textarea>

            <input type="submit" name="submit" value="Post Comment">

        </form>

        <div class="comments">
            <h2>Comments</h2>
            <div class="comment-container">
                <?php
                //display comments from database using php
                ?>
        </div>

        <form id="replay-form" method="post" action="">

            <input type="text" name="parent-id" id="parent-id">
            <label for="name">Name:</label>
            <input type="text" name="name" id="replay-name">
            <input type="text" name="name" id="replay-to">
            <label for="replay-comment-text">Comment:</label>
            <textarea name="replay-comment-text" id="replay-comment-text" rows="5" required></textarea>
            <button type="submit" name="submit-replay">Submit</button>
            <button name="cancel" id="Cancel-button">Cancel</button>
        </form> 


    </div>
</div>
</body>
</html>