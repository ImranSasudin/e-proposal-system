<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<meta charset="utf-8">
</head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css" >
	<link rel="stylesheet" href="css/lobsterfont.css" >
	<link href="css/mdb.min.css" rel="stylesheet">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/mdb.min.js"></script>
	<style>
	h1 {
    font-family: Lobster, Monospace;
  	}
  	.couriernew{
  	font-family: Courier New;
  	}
  	.jumbotron{
  	background-color: #e2e2e2;
  	}
  	}
	.modal-login {
		color: #636363;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #00ce81;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	
	</style>
<body>

<?php
if(isset($_GET['successLogout'])){
	echo "<script> alert('Success Logout!');</script>";
}
elseif(isset($_GET['successRegister'])){
	echo "<script> alert('Register Success!');</script>";
}
elseif(isset($_GET['msg'])){
	echo "<script> alert('Invalid ID / Password!');</script>";
}
?>
<div class="container-fluid text-center" >
<div class="jumbotron">
	<img src="img/uitm2.png" alt="UiTM" style="width: 600px; height:200px;"><br>
  <h1 class="display-4 ">UiTM Proposal System</h1>
  <p class="lead"><i>"A successful man is one who can lay a firm foundation with the bricks others have thrown at him."</i> <br/> - David Brinkley</p>
</div>
 <p class="my-4 couriernew"><i class="far fa-heart"></i> Dear Students and Staffs <i class="far fa-heart"></i> <br/> Please login / register first <i class="fas fa-sign-in-alt"></i></p>
  <button type="button" class="btn peach-gradient my-4" data-toggle="modal" data-target="#myModal">
    Login
  </button>
  <button type="button" class="btn peach-gradient my-4" data-toggle="modal" data-target="#register">
    Register
  </button>
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-md modal-login">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <div class="container-fluid text-center">
          <h4 class="modal-title"><img src="img/uitm2.png" class="rounded" alt="uitm logo" style="width: 400px; height:200px;"></h4>
        </div>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="login1.php" method="post">
         
       	<div class="form-group">
     	<i class="fa fa-user"></i><input type="text" class="form-control" name="id" placeholder="Enter your ID" required="required">
   		</div>
 		 
 		<br/>
  		<div class="form-group">	
     	<i class="fa fa-lock"></i><input type="password" class="form-control" name="password"  placeholder="Enter your password" required="required">    		
  		</div>
		<br/><br/><button type="submit" class="btn btn-lg btn-outline-success waves-effect text-uppercase" name="action" value="Login">login</button>
		</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal for register -->
  <div class="modal fade" id="register">
    <div class="modal-dialog modal-dialog-centered modal-md modal-login">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <div class="container-fluid text-center">
          <h4 class="modal-title"><img src="img/uitm2.png" class="rounded" alt="uitm logo" style="width: 400px; height:200px;"></h4>
        </div>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="add_user.php" method="post">
         
       	<div class="form-group">
     	<i class="fa fa-user"></i><input type="text" class="form-control" name="id" placeholder="Enter your Student ID" pattern="[0-9]{10}" title="10 digits number" required="required">
   		</div>
 		 
		 <div class="form-group">
     	<i class="fa fa-user"></i><input type="text" class="form-control" name="name" placeholder="Enter your Name" required="required">
   		</div>
		
 		
  		<div class="form-group">	
     	<i class="fa fa-lock"></i><input type="password" class="form-control" name="password"  placeholder="Enter your password" required="required">    		
  		</div>
		
		<div class="form-group">
     	<select name="course" class="form-control" required>
			<option selected disabled value="">Select Course</option>
			<option value = "CS246">CS246</option>
			<option value = "CS245">CS245</option>
			<option value = "CS230">CS230</option>
		</select>
   		</div>
		
		<div class="form-group">
     	<select name="semester" class="form-control" required>
			<option selected disabled value="">Select Semester</option>
			<option value = "1">1</option>
			<option value = "2">2</option>
			<option value = "3">3</option>
			<option value = "4">4</option>
			<option value = "5">5</option>
			<option value = "6">6</option>
			<option value = "7">7</option>
		</select>
   		</div>
		
		<br/><br/><button type="submit" class="btn btn-lg btn-outline-success waves-effect text-uppercase" name="action" value="Login">Register</button>
		</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
	

</body>
</html>
