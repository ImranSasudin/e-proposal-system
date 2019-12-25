<?php
session_start();
if(!isset($_SESSION['user_id']) && !isset($_SESSION['admin_id'])){
	header('location:login.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
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
<?php
if(isset($_GET['successLogin'])){
	echo "<script> alert('Login Success!');</script>";
}
?>
<div class="wrapper">
	<?php include 'header.php';?>
		<div id="content">
		<?php include 'navigation.php';?>
		<div class="text-center">
            <img class="rounded mx-auto d-block img-responsive" src="img/uitm2.png" alt="uitm logo" style="width: 500px; height: 200px;"><br><br>
            <h2 class="font-weight-bold">Mission</h2>
			<p>To enhance the knowledge and expertise of Bumiputeras in all fields of study through professional programmes, research work and community service based on moral values and professional ethics.</p>

            <div class="line"></div>

            <h2 class="font-weight-bold">Vision</h2>
			<p>To establish UiTM as a premier university of outstanding scholarship and academic excellence capable of providing leadership to Bumiputeras’s dynamic involvement in all professional fields of world-class standards in order to produce globally competitive graduates of sound ethical standing.</p>
			
            <div class="line"></div>

            <h2 class="font-weight-bold">Philosophy</h2>
			<p>Every individual has the ability to attain excellence through the transfer of knowledge and assimilation of moral values so as to become professional graduates capable of developing knowledge, self, society and nation.</p>
            
            <div class="line"></div>

            <h2 class="font-weight-bold">Motto</h2>
			<p>Usaha, Taqwa, Mulia</p>
			<p>(Endeavour, Religious, Dignified)</p>
        	
            </div>
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