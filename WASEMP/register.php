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
            name = "Fname" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control"placeholder="Enter your Surname"
            name = "Sname" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Middle Initial</label>
            <input type="text" class="form-control"placeholder="Enter your Middle Initial"
            name = "Mname" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" class="form-control"placeholder="Enter your Permanent Address"
            name = "Paddress" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Current Address</label>
            <input type="text" class="form-control"placeholder="Enter your Current Address"
            name = "Caddress" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control"placeholder="Enter your Age"
            name = "age" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" class="form-control"placeholder="Enter your Contact Number"
            name = "mobile" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Barangay</label>
            <input type="text" class="form-control"placeholder="Enter your Barangay"
            name = "barangay" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control"placeholder="Enter your Email Address"
            name = "email" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control"placeholder="Enter your Password"
            name = "Password" autocomplete="off"> 
        </div>
        

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>

<?php
session_start();
include 'datacon.php';
if(isset($_POST['submit'])){

    $Fname=$_POST['Fname'];
    $Sname=$_POST['Sname'];
    $Mname=$_POST['Mname'];
    $Paddress=$_POST['Paddress'];
    $Caddress=$_POST['Caddress'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $barangay=$_POST['barangay'];
    $email=$_POST['email'];
    $Password=$_POST['Password'];

    $sql="insert into visitor(fname,sname,mname,caddress,paddress,age,mobile,barangay,email,password)
    values('$Fname','$Sname','$Mname','$Paddress','$Caddress','$age','$mobile','$mobile','$barangay','$email','$Password')";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "Registered Sucessfully";
    }else{
        echo "Connection Failed!";
    }
}
?>
