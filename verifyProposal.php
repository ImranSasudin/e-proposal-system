<?php
include "connection.php";
 session_start();
if(!isset($_SESSION['admin_id'])){
	header('location:login.php');
} 
$id = $_GET['id'];
$page = $_GET['page'];
if(isset($_GET['month'])){
	$month = $_GET['month'];
}
elseif(isset($_GET['semester'])){
$semester = $_GET['semester'];
}
$sql = "SELECT * FROM proposal where prop_id = '$id'";

$res = mysqli_query($conn,$sql);

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
<div class="wrapper">
	<?php include 'header.php';?>
		<div id="content">
		<?php include 'navigation.php';?>
		<section id="cover">
			<div id="cover-caption">
       			 <div id="container" class="container">
          			  <div class="row text-black">
               			 <div class="col-sm-6 offset-sm-3 text-center">
								<?php
									while($rows = mysqli_fetch_assoc($res)){
								?>
								<h1>Update Proposal</h1>
								<form action = "updateAdminProposal.php" method = "post" enctype="multipart/form-data" class="form-inlin justify-content-center">
									 <div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left ">Admin ID : </h3>
										<input type="text" name="admin_id" value="<?php echo $_SESSION['admin_id']; ?>" class="form-control border border-light" readonly>
									</div>
									 <div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left">Student ID : </h3>
										<input type="text" name="user_id" value="<?php echo $rows['user_id']; ?>" class="form-control border border-light" readonly>
									</div>
									 <div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left"> Program Name : </h3>
										<input type="text" name="prog_name" value="<?php echo $rows['prog_name']; ?>" class="form-control border border-light" readonly><br/><br/>
									</div>
									<a style="color: blue;" target="_blank" href = "verifyPage.php?id=<?php echo $rows['prop_id']?>" class="form-control border border-light"><?php echo $rows['prop_fileName']; ?></a><br/><br/>
									<div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left"> Month : 
										<input type="text" name="month" value="<?php echo $rows['Month']; ?>" class="form-control border border-light" readonly >
									</div>
									 <div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left"> Semester : </h3>
									<input type="text" name="user_id" value="<?php echo $rows['Semester']; ?>" class="form-control border border-light" readonly >
									</div>
									 <div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left">Status : </h3>
										<select name="status" class="form-control border border-light" required>
										<?php if($rows['Status'] == "Pending"){ ?>
										<option selected disabled value="">Select Status</option>
										<?php } else { ?>
										<option selected hidden value='<?php echo $rows['Status']; ?>'><?php echo $rows['Status']; ?></option> 
										<?php } ?>
										<option value="KIV">KIV</option>
										<option value="APPROVED">APPROVED</option>
										</select>
									 <div class="form-group">
                          			  	<br/>
                          			  	<h3 class="text-left">Comment : </h3>
										<textarea name="comment" rows="10" cols="60" class="form-control border border-light"><?php echo $rows['prop_comment']; ?></textarea><br/><br/>
									<input hidden type="text" name="prop_id" value="<?php echo $id ?>">
									<input hidden type="text" name="page" value="<?php echo $page ?>">
									<?php if(isset($_GET['month'])){ ?>
									<input hidden type="text" name="month1" value="<?php echo $month ?>">
									<?php } if(isset($_GET['semester'])){ ?>
									<input hidden type="text" name="semester1" value="<?php echo $semester ?>">
									<?php } ?>
									<input type = "submit" value = "Update" class="btn btn-success "/>
								</form>
								<?php
								}
								?>
								</div>
                    			<br>

							<!--<a href="#nav-main" class="btn btn-outline-secondary btn-sm" role="button"> 
                       			 More
                    			</a>-->
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
