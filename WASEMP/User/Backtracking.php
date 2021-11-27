<?php
include ('datacon.php');
session_start();
$uid = $_SESSION['id'];
$uname = $_SESSION['name'];
$mid = $_SESSION['mid'];
$surr = $_SESSION['surn'];
$curr = $_SESSION['curad'];
$perma = $_SESSION['perad'];
$bgay = $_SESSION['barG'];
$mmail = $_SESSION['netM'];
$mobi = $_SESSION['mbile'];
$ag = $_SESSION['agg'];
if($con->connect_error){ 
	echo $con->connect_error;
}
?>

<!DOCTYPE html>
<html style="padding-top: 0px;padding-right: 0px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Backtracking</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
    <script>$(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup",function(){
                var value =$(this).val().toLowerCase();
                $("#myTable tr").Filter(function(){
                    $(this).toggle($(this).text().toLowerCase(),indexOf(value) > -1)
                })
            })
        })
</script>
</head>

<body id="page-top">
    <div id="wrapper" style="margin-right: -16px;padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 0px;margin-bottom: -21px;min-height: 0px;margin-top: -20px;margin-left: -20px;height: 782px;">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="color: var(--bs-purple);background: var(--bs-dark);margin: 0px;padding-right: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0px;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-church"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Wasemp</span></div>
                </a>

                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="Account.php"><i class="fa fa-user"></i><span>Account</span></a>
                        <a class="nav-link" href="Analytics.php"><i class="fas fa-chart-pie"></i><span>Analytics</span></a>
                        <a class="nav-link" href="qr.php"><i class="fas fa-qrcode"></i><span>QR</span></a>
                        <a class="nav-link" href="Backtracking.php"><i class="fas fa-location-arrow"></i><span>BackTracking</span></a>
                        <a class="nav-link" href="/wasemprev2/logout.php" style="margin: 0px;"><i class="fas fa-sign-out-alt"></i><span>Logout</span>
                        </a>
                    </li>
                </ul>
                <!-- media -->
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="padding-left: 12px;"></button></div>
                <footer class="footer-basic" style="background: var(--bs-dark);">
                    <div class="social" style="background: var(--bs-dark);padding-right: 0px;padding-top: 0px;margin-top: 0px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;font-size: 34px;">
                        <a href="#" style="background: var(--bs-white);border-color: var(--bs-dark);"><i class="icon ion-social-instagram"></i></a>
                        <a href="#" style="background: var(--bs-white);"><i class="icon ion-social-youtube"></i></a>
                        <a href="#" style="background: var(--bs-white);"><i class="icon ion-social-facebook"></i>
                        </a>
                    </div>
                </footer>

                <footer class="footer-dark" style="background: var(--bs-dark);transform: rotate(-91deg);padding: 0px 0px;"></footer>
            </div>
        </nav>

        <div class="d-flex flex-column" id="content-wrapper" style="margin-top: 0px;padding-top: 0px;margin-right: 0px;margin-bottom: 0px;padding-bottom: 0px;">
            <div id="content" style="margin-right: 0px;padding-right: 0px;padding-left: 10px;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="padding-left: 0px;padding-right: 0px;margin-right: 0px;margin-left: -9px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav>
                <!-- time&date, textbox, button -->
                <div class="container">
                <form method= "post">
                    <div class="row">
                        <div class="col-md-3">
                        <label>Date</label>
            <input type="text" class="form-control"placeholder="Date"
            name = "Datey" autocomplete="off" id = "datey"  > 
                        </div>Time</label>
            <input type="text" class="form-control"placeholder="Time"
            name = "Timey" autocomplete="off" id = "Timey"  > 
                        </div>
                        <div class="col-md-3">
                        <label>Location</label>
            <input type="text" class="form-control"placeholder="location"
            name = "Locationn" autocomplete="off" id = "Locationn"  > 
                        </div>
                        <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit Form">
                    </div>
                </div>
    </form>
                <!-- table -->
                <div class="container" style="margin-top: 0px;padding-top: 20px;"><table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>DATE & TIME</th>
                <th>LOCATION</th>
             
            </tr>
        </thead>
        <tbody >
        <h1> Hello, <?php echo $_SESSION['name']; ?></h1>
        <?php
					$sql = mysqli_query($con,"Select * FROM backtracking WHERE fname = '".$uname."' AND sname = '" .$surr."'");
					$count =1;
					$row = mysqli_num_rows($sql);
					if($row > 0){
					while($row =mysqli_fetch_array($sql)){
				?>
			 <tr>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['location'];?></td>
			  </tr>
			  <?php 
			  $count = $count+1;
			}}		
				?>
			</tbody>
    </table></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

<?php
if(isset($_POST['submit'])){
    
    $FirstNameee=$_POST[$_SESSION['name']];
    $Surnameee=$_POST[$_SESSION['surn']];
    $date=$_POST['datey'];
    $time=$_POST['Timey'];
    $location=$_POST['Locationn'];

    $sql="INSERT INTO `backtracking`(`fname`, `sname`, `date`, `time`, `location`)
    VALUES ('$FirstNameee','$Surnameee','$date', '$time','$location')";

$result=mysqli_query($con,$sql);
    if($result){
        header("Location:Backtracking.php?error=Registered Sucessfully!");
    }else{
        echo "Connection Failed!";
    }

}?>