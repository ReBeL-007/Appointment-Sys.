<?php 
    require_once 'admin/object.php';
        $doctors=$doctor->list();
         
	// $date=$_POST['date'];
	// print_r($date);
	$s= $schedule->getdoctorForAppt();
	print_r($s);
	 $option="<option value=''> select Doctor</option>";
	 foreach ($s as $ss) {
	 	foreach($doctors as $d){
        	if($ss->doctor_id == $d->id){
        		$option.= "<option value=$ss->doctor_id>$d->name</option>";
        	}
        }
	 }
	 	
	 
	 	
	 	 
	echo $option;
?>