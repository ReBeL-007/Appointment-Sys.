<?php 
	require_once "object.php";
	$appointment->set('id',$_GET['id']);
	$appointment->remove();
	header("location:display_appointment.php");
?>