<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <from id="replay-form" method="post" action="">
        </form> 


    </div>
</div>
</body>
</html>