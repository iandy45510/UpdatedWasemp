<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <title>Create Page</title>
</head>
<body>
   
<div class="container my-5">
    <form method= "post">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control"placeholder="Enter your First Name"
            name = "Firstname" autocomplete="off" id ="Firstname"  > 
        </div>

        <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control"placeholder="Enter your Surname"
            name = "Surname" autocomplete="off" id ="Surname" > 
        </div>

        <div class="form-group">
            <label>Middle Initial</label>
            <input type="text" class="form-control"placeholder="Enter your Middle Initial"
            name = "Midname" autocomplete="off" id ="Midname" > 
        </div>

        <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" class="form-control"placeholder="Enter your Permanent Address"
            name = "PerAdd" autocomplete="off" id ="PerAdd" > 
        </div>

        <div class="form-group">
            <label>Current Address</label>
            <input type="text" class="form-control"placeholder="Enter your Current Address"
            name = "CurAdd" autocomplete="off" id = "CurAdd" > 
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control"placeholder="Enter your Age"
            name = "age" autocomplete="off" id ="age" > 
        </div>

        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" class="form-control"placeholder="Enter your Contact Number"
            name = "num" autocomplete="off"id ="num" > 
        </div>

        <div class="form-group">
            <label>Barangay</label>
            <input type="text" class="form-control"placeholder="Enter your Barangay"
            name = "brgy" autocomplete="off" id = "brgy" > 
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control"placeholder="Enter your Email Address"
            name = "emailadd" autocomplete="off" id = "emailadd" > 
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control"placeholder="Enter your Password"
            name = "Pword" autocomplete="off" id = "Pword"  > 
        </div>
        <br>

  <input type="submit" class="btn btn-primary" name="submit" value="Submit Form">
</form>
</div>
</body>
</html>

<?php
session_start();
include ('datacon.php');
if(isset($_POST['submit'])){

    $Fname=$_POST['Firstname'];
    $Sname=$_POST['Surname'];
    $Mname=$_POST['Midname'];
    $Paddress=$_POST['PerAdd'];
    $Caddress=$_POST['CurAdd'];
    $age=$_POST['age'];
    $mobile=$_POST['num'];
    $barangay=$_POST['brgy'];
    $email=$_POST['emailadd'];
    $Password=$_POST['Pword'];

    $sql="INSERT INTO `sampleaccount`(`id`, `Fname`, `Sname`, `Mname`, `Paddress`, `Caddress`, `age`, `mobile`, `barangay`, `email`, `Password`)
    VALUES ('$Fname','$Sname','$Mname','$Paddress','$Caddress','$age','$mobile','$mobile','$barangay','$email','$Password')";

    $result=mysqli_query($con,$sql);
    if($result){
    echo "Registered Sucessfully";
    }else{
        echo "Connection Failed!";
    }
}
?>
