<?php 

    include "logic.php";

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
    <div class="small_container">      
          
        <?php if(isset($_REQUEST['info'])) {?> 
            <?php if($_REQUEST['info'] == 'added') {?>
                <div class="message">
                    <h3 class="success">Post has been added successfully! ✅</h3>
                </div>
        <?php } else if ($_REQUEST['info'] == 'updated') { ?> 
                <div class="message">
                    <h3 class="success">Post has been updated successfully! 🤙</h3>
                </div>
        <?php } else if ($_REQUEST['info'] == 'deleted') { ?> 
                <div class="message">
                    <h3 class="no-connection">Post has been deleted successfully! 🤙</h3>
                </div>
            <?php }?>    
        <?php } ?>   

        <a href="create.php" class="btn">+ Create a new post</a>

        <div class="articles">
            <?php foreach($query as $q) { ?>
                    <div class="card">
                        <h4 class="title_card"><?php echo $q['title']; ?></h4> <!-- BLOG TITLE -->

                <?php  // Text-Overflow Multiline
                        $maxPos = 70;
                        if (strlen($q['content']) > $maxPos)
                        {
                            $lastPos = ($maxPos - 3) - strlen($q['content']);
                            $q['content'] = substr($q['content'], 0, strrpos($q['content'], ' ', $lastPos)) . '...';
                        }
                ?>

                        <p class="content_card"><?php echo $q['content']; ?></p> <!-- BLOG CONTENT -->

                        <a href="view.php?id=<?php echo $q['Id'];?>" class="btn_card">Read More <span>&rarr;</span></a>
                    </div>
            <?php }?>
        </div>
    
    </div>

</body>
</html>