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
          
        <?php foreach($query as $q) {?>
            <div class="view">
                <h1 class="title_edit"><?php echo $q['title']; ?></h1>
            </div>

            <p class="content_edit"><?php echo $q['content']; ?></p>

            <div class="edit">
                <a class="edit_edit" href="edit.php?id=<?php echo $q['Id']; ?>">Edit</a>

                <form method="POST">
                    <input type="text" hidden name="id" value="<?php echo $q['Id']; ?>">
                    <button class="delete_edit" name="delete">Delete</button>
                </form>
            </div>
        <?php }?>
    
    </div>

</body>
</html>