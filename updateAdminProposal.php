<?php
include "connection.php";
session_start();

	$status = $_POST['status'];
	$comment = $_POST['comment'];
	$prop_id = $_POST['prop_id'];
	$admin_id = $_POST['admin_id'];
	$page = $_POST['page'];
	if(isset($_POST['month1'])){
	$month = $_POST['month1'];
	}
	if(isset($_POST['semester1'])){
	$semester = $_POST['semester1'];
	}
	$sqlProposal = "UPDATE proposal SET Status = '".$status."', prop_comment = '".$comment."', admin_id = '".$admin_id."' where prop_id = ".$prop_id."";

	if (mysqli_query($conn, $sqlProposal)) {
		if($page == "allProposal"){
		header("Location: viewProposalList.php?successUpdate=true");
		}
		elseif($page == "MonthlyProposal"){
		header("Location: listProposalByMonth.php?successUpdate=true&month=$month");
		}
		elseif($page == "SemesterProposal"){
		header("Location: listProposalBySemester.php?successUpdate=true&semester=$semester");
		}
	} 
	else {
		echo "Error: "  . "<br>" . mysqli_error($conn);
	}


	mysqli_close($conn);											
	
	
?>
