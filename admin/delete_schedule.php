<?php 
	require_once "object.php";
	$schedule->set('id',$_GET['id']);
	$schedule->remove();
	header("location:display_schedule.php");
?>	