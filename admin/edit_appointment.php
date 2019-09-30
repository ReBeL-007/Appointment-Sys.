    <?php 
        $title= "Update Appointment";
    	require_once "header.php"; 
    	$appointment->set('id',$_GET['id']);
    	$data=$appointment->getappointmentByID();
    	//print_r($data);
         if(isset($_POST['update'])){
        
        $err=[];

        if (isset($_POST['status'])) {
        	$appointment->set('status',$_POST['status']);
        }
        else{
        	$err['status']= "Select status";
        }

        if (isset($_POST['patient_id']) && !empty($_POST['patient_id'])) {
        	$appointment->set('patient_id',$_POST['patient_id']);
        }
        else{
        	$err['patient_id']= "Select user";
        }

        if (isset($_POST['patient_name']) && !empty($_POST['patient_name']) && trim($_POST['patient_name']) != "") {
        	$appointment->set('patient_name',$_POST['patient_name']);
        }
        else{
        	$err['patient_name']= "Enter patient name";
        }

        if(isset($_POST['doctor_id']) && !empty($_POST['doctor_id'])){
            $appointment->set('doctor_id',$_POST['doctor_id']);
        }
        else{
                $err['doctor_id']= "Please Select Doctor";
              }

        if(isset($_POST['date']) && !empty($_POST['date'])){
            $appointment->set('date',$_POST['date']);
        }
        else{
                $err['date']= "Please choose Date";
              }

        if(isset($_POST['time']) && !empty($_POST['time'])){
            $appointment->set('time',$_POST['time']);
        }
        else{
                $err['time']= "Please enter timeslot";
              }

        if (isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address']) != "") {
        	$appointment->set('address',$_POST['address']);
        }
        else{
        	$err['address']= "Enter address";
        }

        if(isset($_POST['age']) && !empty($_POST['age'])){
            $appointment->set('age',$_POST['age']);
        }
        else{
                $err['age']= "Please enter age";
              }

        if(isset($_POST['gender'])){
            $appointment->set('gender',$_POST['gender']);
        }
        else{
                $err['gender']= "Please enter gender";
              }

        if (isset($_POST['contact']) && !empty($_POST['contact']) && trim($_POST['contact']) != "") {
        	$appointment->set('contact',$_POST['contact']);
        }
        else{
        	$err['contact']= "Enter contact";
        }

        if (isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description']) != "") {
        	$appointment->set('description',$_POST['description']);
        }
        

              if(count($err)==0){
                    $appointment->set('confirmed_by',$_SESSION['admin_username']);
                    $appointment->set('confirmed_date',date('Y-m-d H:i:s'));
                    $st=$appointment->edit();

                }
}
    ?>
        <div id="page-wrapper">
           <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Appointment Management
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Appointment
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php if(isset($st) && $st > 0) { ?>
                                        <div class="alert alert-success"><?php echo "Appointment confirmed successfully"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on confirming appointment"; ?></div>
                                        <?php } ?>
                                    
                                    <form role="form" action="" method="POST" id="appointment_form" >
                                        
                                        <div class="form-group">
                                            <label>Appointment status</label></br>
                                            
                                        <?php if($data[0]->status==1){?>
                                            
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" id="status" value="1" checked="" >Confirmed
                                                </label>
                                        
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" id="status" value="0" >Pending
                                                </label>

                                        <?php } else{?>

                                                <label class="radio-inline">
                                                    <input type="radio" name="status" id="status" value="1" >Confirm
                                                </label>
                                        
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" id="status" value="0" checked="">Pending
                                                </label>
                                            
                                        <?php }?>
                                        </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <div>
                                            <select name="patient_id" id="patient_id" class="form-control" required="" >
                                                        <!-- <option value="">Please select</option> -->
                                                        <?php $patients=$patient->list();
                                                            
                                                            foreach ($patients as $p) {
                                                            	if ($p->id==$data[0]->patient_id) { ?>
                                                                <option value="<?php echo $p->id; ?>"><?php echo $p->name;?>
                                                                        </option>
                                                            <?php }}?>
                                                    </select>
                                                </div>

                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['patient_id'])){
                                                            echo $err['patient_id'];
                                                        }?>
                                                </label>

                                        </div>

                                        <div class="form-group">
                                        	<label>Patient Name</label>
                                        	<div>
                                                <input type="text" name="patient_name" id="patient_name" class="form-control" value="<?php echo $data[0]->patient_name; ?>" required="" readonly>
                                            </div>
                                             <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['patient_name'])){
                                                            echo $err['patient_name'];
                                                        }?>
                                                </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Select Doctor</label>
                                            <div>
                                            <select name="doctor_id" id="doctor_id" class="form-control" required="">
                                                        
                                                        <?php $doctors=$doctor->list();
                                                            
                                                            foreach ($doctors as $d) { 
                                                            	if($d->id==$data[0]->doctor_id){?>
                                                                <option value="<?php echo $d->id; ?>"><?php echo $d->name;?>
                                                                        </option>
                                                            <?php }}?>
                                                    </select>
                                                </div>

                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['doctor_id'])){
                                                            echo $err['doctor_id'];
                                                        }?>
                                                </label>

                                        </div>

                                                                               
                                        <div class="form-group">
                                            <label>Date</label> 
                                            <div>
                                                <input type="date" name="date" id="date" class="form-control" value="<?php echo $data[0]->date; ?>" required="" readonly>
                                                    
                                            </div>
                                               
                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['date'])){
                                                            echo $err['date'];
                                                        }?>
                                                </label>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Select Timeslot</label>
                                            <div>
                                            <select name="time" id="time" class="form-control" required="">
                                                <option value="<?php echo $data[0]->time; ?>" ><?php echo $data[0]->time; ?></option>
                                                    </select>
                                                </div>

                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['time'])){
                                                            echo $err['time'];
                                                        }?>
                                                </label>

                                        </div>
                                                 
                                         <div class = "form-group"> 
                                            <label>Address</label>
                                            <div>
                                                <input type="text" name="address" id="address" class="form-control" value="<?php echo $data[0]->address; ?>" required="" readonly>
                                            </div>

                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['address'])){
                                                echo $err['address']; }?></label>

                                            
                                         </div>

                                         <div class = "form-group"> 
                                            <label>Age</label>
                                            <div>
                                                <input type="number" name="age" id="age" class="form-control" value="<?php echo $data[0]->age; ?>" required="" readonly>
                                            </div>

                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['age'])){
                                                echo $err['age']; }?></label>

                                            
                                         </div>

                                         <div class="form-group">
                                            <label>Gender</label></br>
                                            
                                        <?php if($data[0]->gender==1){?>
                                            
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="gender" value="1" checked="" >Male
                                                </label>
                                            
                                        
                                            
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="gender" value="0" disabled>Female
                                                </label>
                                            
                                        <?php } else{?>
                                            
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="gender" value="1" disabled>Male
                                                </label>
                                            
                                        
                                            
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="gender" value="0" checked="" >Female
                                                </label>
                                            
                                        <?php }?>
                                        </div>

                                         <div class = "form-group">
                                            <label>Contact</label>
                                            <div>
                                                 <input type="number" name="contact" id="contact" class="form-control" value="<?php echo $data[0]->contact; ?>" required="" readonly>
                                            </div>

                                                 <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['contact'])){
                                                echo $err['contact']; }?></label>
                                        </div> 

                                        <div class="form-group">
                                            <label>Description</label>
                                            
                                            <div><textarea rows="5" cols="50" name="description" id="description" class="form-control" readonly>
                                            	<?php echo $data[0]->description;  ?>
                                            </textarea></div>
                                                
                                        </div> 

                                        <button type="submit" name="update" class="btn btn-info">Confirm</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
           </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php require_once "footer.php"; ?>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#appointment_form').validate();
        })
    </script>


