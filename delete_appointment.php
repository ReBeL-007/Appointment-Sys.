<?php 
	require_once "admin/object.php";
	$appointment->set('id',$_GET['id']);
	$appointment->remove();
	header("location:myappointment.php");
?>