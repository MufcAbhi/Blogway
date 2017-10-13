<?php
	$con = mysql_connect("localhost","root","");
	if(!$con){
		die("Unable to connect.");
	}
	$db = mysql_select_db('blog');
	if(!$db){
		die("Database does not exists");
	}
?>