<?php
include 'connection.php';
$id=$_GET['id'];
$querydelete="DELETE FROM blogtable WHERE ID='$id'";
	$resultdelete=mysql_query($querydelete);
	header("Location: " . "myblogadmin.php");
?>
