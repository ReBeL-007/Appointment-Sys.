<?php 
	@session_start();
    if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
        header('location:index.php?msg=1');
        }
        
	require_once "header.php"; 
	$appointment->set('id',$_GET['id']);
    	$data=$appointment->getappointmentByID();
    		// $appointment->remove();
		// print_r($data);
	// appointment validation 
     if(isset($_POST['appoint'])){
        
        $err=[];


        if(isset($_POST['patient_name']) && !empty($_POST['patient_name']) && trim($_POST['patient_name'])!=""){
            $appointment->set('patient_name',$_POST['patient_name']);
        }
        else{
        $err['patient_name']= "Enter name";
    }
    if(isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])!=""){
            $appointment->set('address',$_POST['address']);
        }
        else{
        $err['address']= "Enter address";
    }
    if(isset($_POST['age']) && !empty($_POST['age'])){
    		$appointment->set('age',$_POST['age']);
    	}
    	else{
    		$err['age']="Select age";
    	}
    	if(isset($_POST['gender']) && !empty($_POST['gender'])){
    		$appointment->set('gender',$_POST['gender']);
    	}
    	else{
    		$err['gender']="Select gender";
    	}
    if(isset($_POST['contact']) && !empty($_POST['contact']) && trim($_POST['contact'])!=""){
    		$appointment->set('contact',$_POST['contact']);
    	}
    	else{
    		$err['contact']="Enter contact";
    	}
    if(isset($_POST['date']) && !empty($_POST['date'])){
    		$appointment->set('date',$_POST['date']);
    	}
    	else{
    		$err['date']="Enter date";
    	}
    if(isset($_POST['doctor_id']) && !empty($_POST['doctor_id'])){
    		$appointment->set('doctor_id',$_POST['doctor_id']);
    	}
    	else{
    		$err['doctor_id']="Select doctor";
    	}
    if(isset($_POST['time']) && !empty($_POST['time'])){
    		$appointment->set('time',$_POST['time']);
    	}
    	else{
    		$err['time']="Select time";
    	}
    if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description'])!=""){
            $appointment->set('description',$_POST['description']);
        }

        if(count($err)== 0){
        	
        		$appointment->set('patient_id',$_SESSION['patient_id']);
        	
        		
      			$st=$appointment->change();
               // print_r($st);
    		}


    }
    
	?>

    
</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- //banner-slider -->
    <!-- //Header -->
    <!-- Banner bottom -->
    <div class="about-w3layouts"></br>
<div class="bnr-btm-w3layouts" id="appoint">
		<div class="bnr-lft-agileits">
			 <div class="tittle-agileinfo">
			<h2>Request An Appointment!</h2>
			<p class="para-agileits-w3layouts">Just make an appointment to get help from our experts</p>
			<h3 class="subheading-agileits-w3layouts">Our services</h3>
			<ul>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Root Canal</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Teeth Whitening</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Wisdom Teeth</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Crowns Bridges</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Cosmetic Dentis</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Dental Implants</li>
			</ul>
		</div>
	</div>

		<!-- book an appointment -->
		<div class="contact-right-w3l">

			<h5 class="title-w3">Change Appointment </h5>
                  <?php if(isset($st) && $st > 0) { ?>
                                        <div class="alert alert-success"><?php echo "Appointment Changed successfully";?></div>
                                        <?php } elseif(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on changing appointment";?></div>
                                        <?php } ?>
			<form role="form" action="" method="POST" id="appointment_form">
				<div class="input-w3ls w3ls-left">
					<input type="text" name="patient_name" value="<?php echo $data[0]->patient_name; ?>" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['patient_name'])){
                                                            echo $err['patient_name'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="text" name="address" value="<?php echo $data[0]->address; ?>" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['address'])){
                                                            echo $err['address'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="number" name="age" value="<?php echo $data[0]->age; ?>" class="form-control" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['age'])){
                                                            echo $err['age'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					<select name="gender" class="form-control" required="">

						<option value="<?php echo $data[0]->gender;?>"><?php if($data[0]->gender==1){echo 'Male';} elseif($data[0]->gender==2){echo 'Female';}?></option>
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['gender'])){
                                                            echo $err['gender'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" name="contact" value="<?php echo $data[0]->contact; ?>" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['contact'])){
                                                            echo $err['contact'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					
					<input id="datepicker" class="date" name="date" type="text" value="<?php echo $data[0]->date;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}" required="">
					    <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['date'])){
                                                            echo $err['date'];
                                                        }?>
                                                </label>
				</div>
				
				<div class="input-w3ls w3ls-left">
					<select name="doctor_id" id="doctor_id" class="form-control" required="">
						<!-- <option value="">select Doctor</option> -->
						<?php $doctors=$doctor->list();
                                                            
	                        foreach ($doctors as $d) { 
	                        	if($d->id==$data[0]->doctor_id){?>
	                            <option value="<?php echo $d->id; ?>"><?php echo $d->name;?>
	                                    </option>
	                        <?php }}?>

					</select>
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['doctor_id'])){
                                                            echo $err['doctor_id'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					<select name="time" id="time" class="form-control" required="">
						<option value="<?php echo $data[0]->time;?>"><?php echo $data[0]->time;?></option>
					</select>
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['time'])){
                                                            echo $err['time'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls">
					<textarea name="description" placeholder="Description"><?php echo $data[0]->description; ?></textarea>
				</div>
				<div class="input-w3ls">
					<input type="submit" name="appoint" value="Change Appointment">
				</div>

			</form>
		</div>
		
	</div>
	</div>
    <!-- //Banner bottom -->
 <?php require_once "footer.php";?>