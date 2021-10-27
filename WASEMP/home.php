<?php
session_start();

$uid = $_SESSION['id'];
$uname = $_SESSION['username'];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel= "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
        <h1> Hello, <?php echo $_SESSION['name']; ?></h1> <br?>
        <a href= "logout.php">Logout</a>
    </body>

</html>