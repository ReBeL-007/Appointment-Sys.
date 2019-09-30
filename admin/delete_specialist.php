<?php 
	require_once "object.php";
	$specialist->set('id',$_GET['id']);
	$specialist->remove();
	header("location:display_specialist.php");
?>	