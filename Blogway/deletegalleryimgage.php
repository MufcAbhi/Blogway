<?php
include 'connection.php';
$id=$_GET['id'];
$querydelete="DELETE FROM imagegallery WHERE ImageGalleryID='$id'";
$resultdelete=mysql_query($querydelete);
header("Location: " . "imagegalleryuploadadmin.php");
?>
