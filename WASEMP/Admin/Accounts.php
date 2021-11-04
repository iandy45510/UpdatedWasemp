<?php
include ('datacon.php');

if($con->connect_error){
	echo $con->connect_error;
}

$sql = "Select * FROM visitor";
$visitor = $con ->query($sql) or die ($con->error);
$row = $visitor->fetch_assoc();

///do {
	/// echo $row['fname']." ".$row['sname']." ".$row['mname']." ".$row['caddress']." ".$row['padress']." ".$row['age']." ".$row['mobile']." ".$row['barangay']." ".$row['email']. "<br/";
//// }while($row = $visitor->fetch_assoc());
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Accounts</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/c38967da69.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo.png">
				<ul>
					<li><a href="Accounts.php">Accounts</a></li>
					<li><a href="List Of Servers.php">List Of Servers</a></li>
					<li><a href="Analytics.php">Analytics</a></li>
					<li><a href="QR.php">QR</a></li>
					
				</ul>
				
			</nav>
			        <!--search button  -->
					<div class="search">
						<form action = "" method = "GET">
						  <div class="input-group">
						  <div class="input-group mb-3">
						  <input type="text" class="form-control" name = "search" value = "<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="Search">
 						  <button type = "Submit" class= "btn btn-primary">Search</button>
</form>

<?php
	if(isset($_GET['search']))
	{
		$filtervalues = $_GET['search'];
		$query = "SELECT * FROM visitor WHERE CONCAT (id,fname,sname,mname,caddress,paddress,age,mobile,barangay,email) LIKE '%$filtervalues% ";
		$query_run = mysqli_query($con,$query);
		if($query_run > 0)
		{ 

			foreach($query_run as $items)
			{
				$row = $visitor->fetch_assoc();
			} 
		}
		else {
			?>
			<tr>
				<td colspan="4"> No record Found</td>
		</tr>
		<?php
		}
	}
	
?>

</div>
						 
		 <!-- table -->
		 <table class="table">
			<thead class="thead-dark">
			  <tr>
			  <th scope="row"></th>
			    <td>ID</td>
				<td>First Name </td>
				<td>Last name</td>
				<td>Middle name</td>
				<td>Current Address</td>
				<td>Present Address</td>
				<td>Age</td>
				<td>Mobile</td>
				<td>Barangay</td>
				<td>Email</td>
			  </tr>
			</thead>
			<tbody>
			  <?php do{ ?>
			  <tr>
				<th scope="row"></th>
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
			  <?php  }while($row = $visitor->fetch_assoc())  ?>
			  <tr>
			  </tr>
			</tbody>
		  </table>


 <!-- sms Button -->
 <div class="sms ">
	<div class="message">
	<a href="sms.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">SMS</a>
	</div>	
	<!-- Print report button -->
	<div class="report">
        <div class="print">
		<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">report</a>
      
    </div>
	<div class="Logout ">
		<div class="Log">
		<a href="/WASEMP/logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
		</div>
		  
		   <div class="row text-center media">
			   <div class="col-md-4">
				<i class="fab fa-facebook"></i>
			   </div>
			   <div class="col-md-4">
				<i class="fab fa-youtube"></i>
			   </div>
			   <div class="col-md-4">
				<i class="fab fa-instagram"></i>
			   </div>
		   </div>
		
</body>
</html>