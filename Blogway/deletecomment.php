<?php
include 'connection.php';
$idd=$_GET['idd'];
$id=$_GET['id'];
$querydelete="DELETE FROM commenttable
			where commenttable.IDid='$idd'";
    $result=mysql_query($querydelete);
    header("Location: " . "commentadmin.php?id=$id");
?>
