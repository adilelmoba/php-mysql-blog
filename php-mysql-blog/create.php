<?php 

    include "logic.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Blog using PHP and MySQL</title>
</head>
<body>
    
    <div class="container">
        <form method="GET" class="form" autocomplete="off">
            <input name="title" placeholder="Blog Title.." type="text" class="input__title" id="title">
            <textarea name="content" id="" class="textarea__content" placeholder="Blog content.." rows="8" cols="15"></textarea>
            <button name="new_post" class="btn__submit">Add Post</button>
        </form>
    </div>

</body>
</html>