<?php 
    date_default_timezone_set("Asia/Kathmandu");

    require_once 'admin/object.php';
	

	$date= $_POST['date'];        
	$s= $schedule->getTimeForAppt();
	$booked= $appointment->getBookedTime();
	//print_r($s);
	//print_r($booked);

		 		$bookedTime= array();

	foreach ($booked as $b) {
	 	 $bTime= strtotime($b->time);
	 	 array_push($bookedTime, date("H:i",$bTime));
	 }
	 		

	 $option="<option value=''> select Timeslot</option>";
	 
	 
	 foreach ($s as $ss) {
	 	 $startTime= $ss->start_time;
	 	 $endTime= $ss->end_time;
	 	 	}

	 	 	$tStart = strtotime($startTime);
			$tEnd = strtotime($endTime);
			$tNow = $tStart;

			// echo $tStart;
			// echo $tEnd;

			$timeIntervals = array();
			while($tNow <= $tEnd){

			 array_push($timeIntervals, date("H:i",$tNow));
			  $tNow = strtotime('+30 minutes',$tNow);
			}	 	 

				$resultTime= array();
				$result =array_diff($timeIntervals, $bookedTime);
				foreach($result as $r){
					array_push($resultTime,$r);
				}
				print_r($resultTime);

			for ($i=0;$i<count($resultTime)-1;$i++){
				if ($date." ".$resultTime[$i] > date('Y-m-d H:i')) {
				$option.="<option value='$resultTime[$i]'>$resultTime[$i]</option>";
				}
			}


				//print_r($time1);
	 		// for($i=$time1; $i<=$time2; $i++){
	 		// 	$option.="<option value='$i'>$i:00:00</option>";
	 		// }
	 		// $time1 = date('d');
	 		// print_r($time1);
	 		// if ($time1<6) {
				// 	for ($i=8; $i <= 19; $i++) { 
				// 		foreach ($time1 as $t1) {
				// 			if ($t1 == $i) {
				// 				$i++;
				// 			}
				// 		}
				// 		$ht.="<option value='$i'>$i:00:00</option>";
				// 	}
				// }else{
				// 	for ($i=$time1+2; $i <= 19; $i++) { 
				// 		foreach ($time1 as $t1) {
				// 			if ($t1 == $i) {
				// 				$i++;
				// 			}
				// 		}
				// 		$ht.="<option value='$i'>$i:00:00</option>";
				// 	}
				// }

	 	// foreach ($time1 as $t1) {
			// 				print_r($t1);
			// 				}
			// 			}
						//$ht.="<option value='$i'>$i:00:00</option>";
	 	// for ($i=$ss->start_time; $i <$ss->end_time ; $i++) { 
	 	// 	 $option.="<option value='$i'>$i</option>";

	 	
	 	
	 

	 	
	 	 
print_r($option);
?>