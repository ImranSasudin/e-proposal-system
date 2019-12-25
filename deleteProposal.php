<?php
include "connection.php";
session_start();

	$prop_id = $_GET['id'];
	$page = $_GET['page'];
	if(isset($_GET['month'])){
	$month = $_GET['month'];
	}
	elseif(isset($_GET['semester'])){
	$semester = $_GET['semester'];
	}
	$sqlProposal = "DELETE FROM proposal where prop_id = ".$prop_id."";

	if (mysqli_query($conn, $sqlProposal)) {
		if ($page == "allProposal"){
		header("Location: viewProposalList.php?successDelete=true");
		}
		elseif($page == "MonthlyProposal"){
		header("Location: listProposalByMonth.php?successDelete=true&month=$month");
		}
		elseif($page == "SemesterProposal"){
		header("Location: listProposalBySemester.php?successDelete=true&semester=$semester");
		}
	} 
	else {
		echo "Error: "  . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);											
	
	
?>
