<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel= "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
        <form action ="login.php" method ="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])){ ?>
                <p class = "error"><?php echo $_GET['error'];?> </p>
            <?php } ?>
            <label>Username</label>
            <input type = "text" name = "uname" placeholder ="User name"><br>

            <label>Password</label>
            <input type = "password" name = "pass" placeholder ="Password"><br>

            <button type = "submit" name = "login">LOGIN</button>
            <a href="Register.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Register</a>
        </form>
    </body>

</html>