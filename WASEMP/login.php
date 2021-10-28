<?php
session_start();
include 'dbcon.php';
if (isset($_POST['login'])){
    $user = $_POST['uname'];
    $pword = $_POST['pass'];
    if($con){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(empty($user) || empty($pword)){
            header("Location: index.php?error=Username/Password is Required");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE uname = '".$user."' AND pword = '".$pword."'"; 
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['uname'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location:Admin/Accounts.php");
            }else{
                $sql = "SELECT * FROM sampleaccount WHERE email = '".$user."' AND Password = '".$pword."'"; 
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                        $_SESSION['username'] = $row['uname'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                        header("Location:User/Information.php");
            }else{
            header("Location: index.php?error=Incorrect Password/Username");
            exit();
            }
        } 
    }
}
}
?>
