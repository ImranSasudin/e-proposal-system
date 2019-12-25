<?php
include "connection.php";
session_start();

	$progName = $_POST['name'];
	$progFile = addslashes(file_get_contents($_FILES['proposalFile']['tmp_name']));
	$progFileName = $_FILES['proposalFile']['name'];
	$user_id = $_SESSION['user_id'];
	$status = "Pending";
	if ($_FILES['proposalFile']['type'] == "application/pdf"){
	$sqlProposal = "INSERT INTO proposal(user_id,prog_name,prop_file,prop_fileName, semester, status, month)
						  VALUES('".$_SESSION['user_id']."','".$progName."','".$progFile."','".$progFileName."',(select if(dayofyear(sysdate()) < 182.5 , concat('1ST SEM OF ',date_format(sysdate(),'%Y')) , concat('2ND SEM OF ',date_format(sysdate(),'%Y')))),'".$status."',(select date_format(sysdate(),'%M %Y')))";
						  
		if (mysqli_query($conn, $sqlProposal)) {
			header("Location:viewUserProposal.php?id=$user_id&successUpload=true");
		} 
		else {
			echo "Error: "  . "<br>" . mysqli_error($conn);
		}
	}
	else{
		header("Location: insertProposal.php?format=true; ");
	}

	mysqli_close($conn);											
	
	
?>
