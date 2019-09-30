    <?php 
        $title= "Update Schedule";
    require_once "header.php"; 
    $schedule->set('id',$_GET['id']);

        if(isset($_POST['update'])){
        
        $err=[];


        if(isset($_POST['doctor_id']) && !empty($_POST['doctor_id'])){
            $schedule->set('doctor_id',$_POST['doctor_id']);
        }
        else{
                $err['doctor_id']= "Please Select Doctor";
              }

        if(isset($_POST['day']) && !empty($_POST['day'])){
            $schedule->set('day',$_POST['day']);
        }
        else{
                $err['day']= "Please Select Day";
              }

        if(isset($_POST['stime']) && !empty($_POST['stime'])){
            $schedule->set('start_time',$_POST['stime']);
        }
        else{
                $err['stime']= "Please enter start time";
              }

        if(isset($_POST['etime']) && !empty($_POST['etime'])){
            $schedule->set('end_time',$_POST['etime']);
        }
        else{
                $err['etime']= "Please enter end time";
              }

        if(isset($_POST['max_patient']) && !empty($_POST['max_patient'])){
            $schedule->set('max_Patient',$_POST['max_patient']);
        }
        else{
                $err['max_patient']= "Please select max patient";
              }

        if (count($err)==0) {
            $schedule->set('updated_by',$_SESSION['admin_username']);
            $schedule->set('updated_date',date('Y-m-d H:i:s'));
           $st=$schedule->edit();
        }
        
}
	$data= $schedule->getscheduleByID();
	//print_r($data);
    ?>



        <div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Schedule Management
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Schedule
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    <?php if(isset($st) && $st==true) { ?>
                                        <div class="alert alert-success"><?php echo "Schedule updated"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on updating schedule"; ?></div>
                                        <?php } ?>
                                    <form role="form" action="" method="POST" id="schedule_form" >
                                        
                                        <div class="form-group">
                                            <label>Select Doctor</label>
                                            <div>
                                            <select name="doctor_id" id="doctor_id" required="" style="width: 300px;">
                                                        <option value="">Please select</option>
                                                        <?php $doctors=$doctor->list();
                                                            
                                                            foreach ($doctors as $d) { 
                                                            	if($d->id==$data[0]->doctor_id){
                                                            		?>
                                                            		<option value="<?php echo $d->id?>"selected><?php echo $d->name;?>
                                                            			</option>
                                                            	<?php } else{?>
                                                                <option value="<?php echo $d->id; ?>"><?php echo $d->name;?>
                                                                        </option>
                                                            <?php } }?>
                                                    </select>
                                                </div>

                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['doctor_id'])){
                                                            echo $err['doctor_id'];
                                                        }?>
                                                </label>

                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Select Day</label> 
                                            <div>
                                                <input type="date" name="day" id="day" style="width: 300px;" value="<?php echo $data[0]->day; ?>" required="">
                                                    
                                            </div>
                                               
                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['day'])){
                                                            echo $err['day'];
                                                        }?>
                                                </label>
                                            
                                        </div>
                                                 
                                         <div class = "form-group"> 
                                            <label>Start Time</label>
                                            <div>
                                                <input type="time" name="stime" value="<?php echo $data[0]->start_time; ?>"  required="">
                                            </div>

                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['stime'])){
                                                echo $err['stime']; }?></label>

                                            
                                         </div>

                                         <div class = "form-group">
                                            <label>End Time</label>
                                            <div>
                                                 <input type="time" name="etime" value="<?php echo $data[0]->end_time; ?>"  required="">
                                            </div>

                                                 <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['etime'])){
                                                echo $err['etime']; }?></label>

                                            
                                        </div> 

                                        <div class = "form-group">
                                            <label>Max. Patient</label>
                                            <div>
                                                 <input type="number" name="max_patient" style="width: 300px;" value="<?php echo $data[0]->max_Patient; ?>"  required="">
                                            </div>

                                                 <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['max_patient'])){
                                                echo $err['max_patient']; }?></label>

                                            
                                        </div> 

                                        <button type="submit" name="update" class="btn btn-info">Update Schedule</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                        
                                    </form>
                                </div>
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
            $('#schedule_form').validate();
        })
    </script>