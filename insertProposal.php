<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header('location:login.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Page Title</title>
</head>
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
<?php if(isset($_GET['format'])){
	echo "<script> alert('FAILED! File must be in PDF only');</script>";
} ?>
<div class="wrapper">
    <!-- Page Sidebar  -->
       <?php include 'header.php';?>

        <!-- Page Content  -->
        <div id="content">
        <!-- Page Top Navigation  -->
		<?php include 'navigation.php';?>
			<!-- Default form login -->
		<section id="cover">
    		<div id="cover-caption">
       			 <div id="container" class="container">
          			  <div class="row text-black">
               			 <div class="col-sm-6 offset-sm-3 text-center">
							<h1>Insert Proposal Page</h1>
							<div class="info-form">
							<form action = "insertProposalTable.php" method = "post" enctype="multipart/form-data" class="form-inlin justify-content-center">
								<div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left "> Program Name: <h3/>
										<input type = "text" name = "name" class="form-control border border-light" required>
								</div>		
								<div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left ">Proposal File: </h3>
										<input type ="file" name = "proposalFile" class="form-control border border-light" required>
								</div>		
								<input type = "submit" value = "Submit" class="btn btn-success "/>
							</form>
							</div>
							<br>

							<!--<a href="#nav-main" class="btn btn-outline-secondary btn-sm" role="button"> 
                       			 More
                    			</a>-->
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
