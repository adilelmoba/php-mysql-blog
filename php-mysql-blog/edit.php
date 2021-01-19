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

        <?php foreach($query as $q) { ?>

            <form method="GET" class="form" autocomplete="off">
                <input type="text" hidden name="id" value="<?php echo $q['Id']; ?>">
                <input name="title" placeholder="Blog Title.." type="text" class="input__title" id="title" value="<?php echo $q['title']; ?>">
                <textarea name="content" id="" class="textarea__content" placeholder="Blog content.." rows="8" cols="15"><?php echo $q['content']; ?></textarea>
                <button name="update" class="btn__submit">Update</button>
            </form>

        <?php } ?>


       
    </div>

</body>
</html>