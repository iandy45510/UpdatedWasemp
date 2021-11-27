<?php
session_start();
include 'conn/datacon.php';
if (isset($_POST['login'])){
    $user = $_POST['uname'];
    $pword = $_POST['pass'];
    if($con)
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(empty($user) || empty($pword))
        {
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
                    header("Location:user/Account.php");
            }else{
                $sql = "SELECT * FROM visitor WHERE email = '".$user."' AND Password = '".$pword."'"; 
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['name'] = $row['fname'];
                    $_SESSION['surn'] = $row['sname'];
                    $_SESSION['mid'] = $row['mname'];
                    $_SESSION['agg'] = $row['age'];
                    $_SESSION['mbile'] = $row['mobile'];
                    $_SESSION['curad'] = $row['caddress'];
                    $_SESSION['perad'] = $row['paddress'];
                    $_SESSION['barG'] = $row['barangay'];
                    $_SESSION['netM'] = $row['email'];
                    $_SESSION['id'] = $row['id']; 
                        header("Location:User/Account.php");
            }
            else{
                $sql = "SELECT * FROM visitor WHERE mobile = '".$user."' AND Password = '".$pword."'"; 
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['name'] = $row['fname'];
                    $_SESSION['surn'] = $row['sname'];
                    $_SESSION['mid'] = $row['mname'];
                    $_SESSION['agg'] = $row['age'];
                    $_SESSION['mbile'] = $row['mobile'];
                    $_SESSION['curad'] = $row['caddress'];
                    $_SESSION['perad'] = $row['paddress'];
                    $_SESSION['barG'] = $row['barangay'];
                    $_SESSION['netM'] = $row['email'];
                        $_SESSION['id'] = $row['id'];   
                        header("Location:User/Account.php");
            }else{
            header("Location: index.php?error=Incorrect Password/Username");
            exit();
            }
        } 
    }
}
}
}
?>
