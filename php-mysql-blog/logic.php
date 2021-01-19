<?php 

    // DATABASE CONNECTION
    $connection = mysqli_connect("localhost","root","","advancedBlog");

    if(!$connection) {
        echo "<div class='message'><h3 class='no-connection'> Not able establish Database Connection! ⛔</h3></div>";
    }

    // SELECT FROM DATABASE
    $sql = "SELECT * FROM data";
    $query = mysqli_query($connection, $sql);

    // INSERT = ADD, TO DATABASE
    if( isset($_REQUEST["new_post"]) ) {
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($connection, $sql);

        header("Location: main.php?info=added");
        exit();
    } 

    // SELECT BY POST
    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($connection, $sql);
    }

    // UPDATE DATA
    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "UPDATE data SET title='$title', content='$content' WHERE id = $id";
        mysqli_query($connection, $sql);

        header("Location: main.php?info=updated");
        exit();
    }

    // DELETE DATA
    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($connection, $sql);

        header("Location: main.php?info=deleted");
        exit();
    }

    /////////////////////////////////////////////////
    /////////// LOGIN 

    /******** RETRIEVE ********/
    if(isset($_REQUEST['login'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
    }

    /******** FUNCTIONS ********/
    function login($connection, $username, $password) {
        $sql_login = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $query_login = mysqli_query($connection, $sql_login);
        return $query_login;
    }

    /******** LOGIC ********/
    $_SESSION["connect"] = false;
    if(isset($_REQUEST['login'])) {
        $results = login($connection, $username, $password);

        foreach($results as $r){
            if($r["username"] == $username && $r["password"] == $password) {
                $_SESSION['username'] = $r['username'];
                $_SESSION["connect"] = true;

                header('location:main.php');
                exit();
            } else {
                echo '<strong style="color: red;">Username Or Password is Incorrect!</strong>';
            }
        }
    } 

   

?>