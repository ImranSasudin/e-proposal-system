<?php
include "connection.php";
session_start();
if(!isset($_SESSION['admin_id'])){
	header('location:login.php');
} 
$sql = "select month, count(prop_id) from proposal group by month";

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
<div class="wrapper">
	<?php include 'header.php';?>
		<div id="content">
		<?php include 'navigation.php';?>
		<section id="cover">
    		<div id="cover-caption">
       			 <div id="container" class="container">
          			  <div class="row text-black">
               			 <div class="col-lg-8 offset-sm-2 text-center">
							<h1>Monthly Proposal</h1><br/><br/>
								<div class="info-form">
                       				 <form method="" action="" class="form-inlin justify-content-center">
										<table id = "dtBasicExample" class="table table-striped table-bordered">
											<thead>
												<th class="th-sm">Month</th>
												<th class="th-sm">Num. of Proposal</th>
											</thead>
											<tbody>
												<?php
												while($rows = mysqli_fetch_assoc($res)){
												?>
												<tr>
													
													<td style="color: blue;"><a href="listProposalByMonth.php?month=<?php echo $rows['month'];?>"><?php echo $rows['month'];?></a></td>
													<td><?php echo $rows['count(prop_id)']; ?></td>
													
												</tr>
												<?php
												}
												?>
											</tbody>
										</table><br/><br/>	
										
									</form>
								</div>
		
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
</div>
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
$('#dtBasicExample').DataTable();
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