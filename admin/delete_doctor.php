<?php 
	require_once "object.php";
	$doctor->set('id',$_GET['id']);
	$doctor->remove();
	header("location:display_doctor.php");
?>