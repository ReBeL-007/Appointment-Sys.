<?php 
	require_once "object.php";
	$patient->set('id',$_GET['id']);
	$patient->remove();
	header("location:list_patient.php");
?>