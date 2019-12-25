<?php
include "connection.php";
session_start();
if(!isset($_SESSION['admin_id'])){
	header('location:login.php');
} 
$month = $_GET['month'];
$sql = "SELECT * FROM proposal where Month = '".$month."'";

$res = mysqli_query($conn,$sql);

?>
<html>
	<link href="css/select2.min.css" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS for header -->
    <link rel="stylesheet" href="css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="fontawesome/js/all.min.js" >
 	<link rel="stylesheet" href="fontawesome/css/all.min.css" >
 	<!-- DataTable CSS -->
 	<link rel="stylesheet" href="css/datatables-select.min.css">
 	<link rel="stylesheet" href="css/datatables.min.css">
<body>
<?php

if(isset($_GET['successDelete'])){
	echo "<script> alert('Delete Success!');</script>";
}
elseif(isset($_GET['successUpdate'])){
	echo "<script> alert('Update Success!');</script>";
}
?>
<div class="wrapper">
	<?php include 'header.php';?>
		<div id="content">
		<?php include 'navigation.php';?>
		<div class="text-center">
		<section id="cover">
    		<div id="cover-caption">
       			 <div id="container" class="container">
          			  <div class="row text-black">
               			 <div class="col-lg-8 offset-sm-1 text-center">
							<h1>Proposal List By Month</h1><br/><br/>
								<div class="info-form">
                       				 <form method="" action="" class="form-inlin justify-content-center">
										<table id = "dtBasicExample" class="table table-striped table-bordered">
											<thead>
												<th class="th-sm">ID</th>
												<th class="th-sm">User ID</th>
												<th class="th-sm">Admin ID</th>
												<th class="th-sm">Event Name</th>
												<th class="th-sm">Proposal File Name</th>
												<th class="th-sm">Month</th>
												<th class="th-sm">Semester</th>
												<th class="th-sm">Status</th>
												<th class="th-sm">Comment</th>
												<th class="th-sm">Update</th>
												<th class="th-sm">Delete</th>
											</thead>
											<tbody>
												<?php
												while($rows = mysqli_fetch_assoc($res)){
												?>
												<tr>
													
													<td><?php echo $rows['prop_id'];?></td>
													<td><?php echo $rows['user_id']; ?></td>
													<td><?php echo $rows['admin_id']; ?></td>
													<td><?php echo $rows['prog_name']; ?></td>
													<td style="color: blue;"><a target="_blank" href = "verifyPage.php?id=<?php echo $rows['prop_id']?>"><?php echo $rows['prop_fileName']; ?></a></td>
													<td><?php echo $rows['Month']; ?></td>
													<td><?php echo $rows['Semester']; ?></td>
													<td><?php echo $rows['Status']; ?></td>
													<td><?php echo $rows['prop_comment']; ?></td>
													<td><a href = "verifyProposal.php?id=<?php echo $rows['prop_id']; ?>&page=MonthlyProposal&month=<?php echo $month ?>"><i class="fas fa-edit"></i></a></td>
													<td><a onclick="return confirm('Are you sure you want to delete this proposal?');" href = "deleteProposal.php?id=<?php echo $rows['prop_id']; ?>&page=MonthlyProposal&month=<?php echo $month ?>"><i class="fas fa-trash-alt"></i></a></td>
													
												</tr>
												<?php
												}
												?>
											</tbody>
										</table><br/><br/>	
</body>
		<!-- jQuery -->
	<script src="jquery.js"></script>
	
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="js/popper.min.js"> </script>
    <!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>  
	<!-- Bootstrap Bundle JS -->
	<script src="js/bootstrap.bundle.min.js"></script>  
	<!-- jQuery Custom Scroller CDN -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- SweetAlert.JS -->
	<script src="js/sweetalert.min.js"></script>
	<script src="js/select2.min.js"></script>
	<!-- DataTables.JS -->
	<script src="js/datatables-select.min.js"></script>
	<script src="js/datatables.min.js"></script>
	
<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable({
	'columnDefs': [ {

		'targets': [9,10], // column or columns numbers

		'orderable': false,  // set orderable for selected columns

		}]
	});
$('.dataTables_length').addClass('bs-select');
$("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});

</script>
</html>