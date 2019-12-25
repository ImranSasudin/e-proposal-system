<?php
include "connection.php";
session_start();

	$progName = $_POST['name'];
	$prop_id = $_POST['prop_id'];
	$user_id = $_POST['user_id'];
	
	if($_FILES['proposalFile']['size'] != 0){
	$progFile = addslashes(file_get_contents($_FILES['proposalFile']['tmp_name']));
	$progFileName = $_FILES['proposalFile']['name'];

	if ($_FILES['proposalFile']['type'] == "application/pdf"){
	$sqlProposal = "UPDATE proposal SET prog_name = '".$progName."', prop_file = '".$progFile."' ,prop_fileName = '".$progFileName."' where prop_id = ".$prop_id."";

		if (mysqli_query($conn, $sqlProposal)) {
			header("Location:viewUserProposal.php?id=$user_id&successUpdate=true");
		} 
		else {
			echo "Error: "  . "<br>" . mysqli_error($conn);
		}
	}
	else{
		header("Location:updateUserProposal.php?format=fail&id=$prop_id");
	}
	}
	else{
		$sqlProposal = "UPDATE proposal SET prog_name = '".$progName."' where prop_id = ".$prop_id."";

		if (mysqli_query($conn, $sqlProposal)) {
			header("Location:viewUserProposal.php?id=$user_id&successUpdate=true");
		} 
		else {
			echo "Error: "  . "<br>" . mysqli_error($conn);
		}
	}

	mysqli_close($conn);											
	
	
?>
