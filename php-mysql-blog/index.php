<?php 
    session_start();
    
    include "logic.php";
    
    // if($_SESSION['connect']) {

    //     header('Location:main.php');
    //     exit();
    // }

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
            
            <div class="helper">
                <form method="POST" autocomplete="off" class="form-login">
                
                    <h2 class="login-heading">Login to your Blog: </h2>
                    <input type="text" name="username" placeholder="Username" class="input-username">
                    <input type="password" name="password" placeholder="Password" class="input-password">
                    <button type="submit" name="login" value="Login" class="btn-login">Login</button>
                
                </form>
            </div>
        
        </div>

        <!-- <div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form> -->

</body>
</html>

<?php 
    
    if($_SESSION['connect']) {

        header('Location:main.php');
        exit();
    }

?>