<?php
include ('datacon.php');

if($con->connect_error){ 
	echo $con->connect_error;
}

?>
<!DOCTYPE html>
<html style="padding-top: 0px;padding-right: 0px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Account  </title>
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
                      <a class="nav-link " href="Account.php"><i class="fa fa-user"></i><span>Account</span></a>
                      <a class="nav-link " href="List Of Server.php"><i class="fas fa-server"></i><span>List Of Server</span></a>
                      <a class="nav-link " href="Analytics.php"><i class="fas fa-chart-pie"></i><span>Analytics</span></a>
                      <a class="nav-link " href="QR.php"><i class="fas fa-qrcode"></i><span>QR</span></a>
                      <a class="nav-link " href="Backtracking.php"><i class="fas fa-location-arrow"></i><span>BackTracking</span></a>
                      <a class="nav-link " href="#" style="text-shadow: 0px 0px;"><i class="fas fa-sms"></i><span style="height: 0px;">SMS</span></a>
                      <a class="nav-link " href="#" style="margin: 0px;"><i class="fas fa-bug"></i><span>Report</span></a>
                      <a class="nav-link " href="/wasemprev2/logout.php" style="margin: 0px;"><i class="fas fa-sign-out-alt"></i><span>Logout</span>
                      </a>
                    </li>
                </ul>
               <!-- Media -->
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="padding-left: 12px;"></button></div>
                <footer class="footer-basic" style="background: var(--bs-dark);height: 210px;">
                    <div class="social" style="background: var(--bs-dark);margin-bottom: 0px;margin-top: 8px;">
                      <a href="#" style="background: var(--bs-white);border-color: var(--bs-dark);"><i class="icon ion-social-instagram"></i></a>
                      <a href="#" style="background: var(--bs-white);"><i class="icon ion-social-youtube"></i></a>
                      <a href="#" style="background: var(--bs-white);"><i class="icon ion-social-facebook"></i>
                      </a>
                    </div>
                </footer>
                <footer class="footer-dark" style="background: var(--bs-dark);transform: rotate(-91deg);padding: 0px 0px;"></footer>
            </div>
        </nav>
        <!-- table & search  -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav><div class="container" style="padding-top: 45px;">
    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Middle Name</th>
                <th>Current Address</th>
                <th>Present Address</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Barangay</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody >
        <?php
					$sql = mysqli_query($con,"Select * FROM visitor");
					$count =1;
					$row = mysqli_num_rows($sql);
					if($row > 0){
					while($row =mysqli_fetch_array($sql)){
				?>
			 <tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['sname'];?></td>
				<td><?php echo $row['mname'];?></td>
				<td><?php echo $row['caddress'];?></td>
				<td><?php echo $row['paddress'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['barangay'];?></td>
				<td><?php echo $row['email'];?></td>
			  </tr>
			  <?php 
			  $count = $count+1;
			}}		
				?>
			</tbody>
    </table>
    <div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="#" target="_blank"><img src="https://via.placeholder.com/100x100/.png?text=Your+ad+here" alt="ad space" class="img-responsive img-circle"></a>
                                            </div>
                                            <div class="col-md-6"><input type="text" class="form-control-plaintext" value="Information
                                                         " readonly /></div>
                                        </div>
                                    </div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Timestamp</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Backtracking</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Health Declaration</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                   <p>content for 1</p>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="tab-2">
                                                <p>Content for tab 2.</p>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="tab-3">
                                                <p>Content for tab 3.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
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