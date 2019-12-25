<?php
$dbh = new PDO("mysql:host=localhost;dbname=proposal_system", "root","");
$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $dbh->prepare("select * from proposal where prop_id=?");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat->fetch();
header('Content-Type:' .$row['prop_fileName']);
echo $row['prop_file'];


?>