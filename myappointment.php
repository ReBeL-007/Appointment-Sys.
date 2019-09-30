 <?php 
     @session_start();

 if((!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])) && (!isset($_SESSION['doctor_username']) || empty($_SESSION['doctor_username']))){
        header('location:index.php?msg=1');
        }
    
    require_once "header.php";
    $appointments= $appointment->list();
    $patients= $patient->list();
    $doctors= $doctor->list();
    $schedules= $schedule->list();
      
     ?> 

	</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- //banner-slider -->
    <!-- //Header -->

<!-- <br><br><br><br><br> -->
    <!-- <div class="about-w3layouts" id="page-wrapper" style="margin-left: 10%;">
           <div id="page-inner"> -->
              <!--  <div class="row">
                    <div class="col-md-8">
                        <h1 class="page-header">
                            Doctor Management
                        </h1>
                    </div>
                </div>  -->
                 <!-- /. ROW  -->
               
           <!--  <div class="row">
                <div class="col-md-8"> -->
                    <!-- Advanced Tables -->
                    <!-- <div class="panel panel-default"> -->
                       

                        <div class="about-w3layouts" id="body2">
                        
                                          
                         <div class="tbl-header">
                        <div class="panel-body">
                            <div>
                            <legend style="color: green;">Upcoming Appointments:</legend>
                            <div class="table-responsive">                               
                               <table class="table table-striped table-bordered table-hover" id="display_appoint" cellpadding="0" cellspacing="0">
                                    <thead style="color: black; text-transform: uppercase;">
                                        <tr>
                                            	<td>SN</td>
                                                <td>Status</td>
                                                <td>Patient Name</td>
                                                <td>Doctor Name</td>
                                                <td>Date</td>
                                                <td>Timeslot</td>
                                                <td>age</td>
                                                <td>gender</td>
                                                <td>Address</td>
                                                <td>Contact</td>
                                                <td>Description</td>
                                                <td>Action</td>
                                        </tr>
                                    </thead>
                                      <tbody class="tbl-content" style="color: black;">
                                    	<?php $i=1; foreach ($appointments as $a) {
                                            if($a->date.' '. $a->time >= date('Y-m-d H:i:s')){
                                    			if (($_SESSION['patient_id'])==$a->patient_id) {
                                                    foreach ($schedules as $s) {
                                                        if ($s->doctor_id == $a->doctor_id) {
                                                            if (($s->day.' '.$s->start_time <= $a->date.' '.$a->time) && ($a->date.' '.$a->time < $s->day.' '.$s->end_time)){?>
		                                    	<tr>
                                    			<td><?php echo $i++; ?></td>
                                                <td><?php echo ($a->status=='1')? 'confirmed': 'pending' ; ?></td>
                                                <td><?php echo $a->patient_name; ?></td>
                                                <td><?php foreach ($doctors as $d) {
                                                    if($a->doctor_id==$d->id){echo $d->name; }}?></td>
                                                <td><?php echo $a->date; ?></td>
                                                <td><?php echo $a->time; ?></td>
                                                <td><?php echo $a->age?></td>
                                                <td><?php echo ($a->gender=='1')? 'male': 'female';?></td>
                                                <td><?php echo $a->address; ?></td>
                                                <td><?php echo $a->contact; ?></td>
                                                <td><?php echo $a->description; ?></td>
                                                <td>
                                                    <a href="edit_appointment.php?id=<?php echo $a->id; ?>" class="btn btn-warning" title="edit" ><i class="fa fa-">Change</i></a>
                                                    
                                                     <a href="delete_appointment.php?id=<?php echo $a->id; ?>" class="btn btn-danger" title="delete" onclick= "return confirm('Are you sure to cancel?')"><i class="fa fa-trash">Cancel</i>
                                                    </a>

                                                    
                                                </td>
                                    	</tr>
                                    	<?php }}}}}}?>
                                    </tbody>
                            </table>
                            </div>
                        </div>

                        <div style="margin-top:50px; ">
                        <legend style="color: red;">Appointment History:</legend>
                            <div class="table-responsive">                                  
                               <table class="table table-striped table-bordered table-hover" id="display_appoint2" cellpadding="0" cellspacing="0">
                                    <thead style="color: black; text-transform: uppercase;">
                                        <tr>
                                                <td>SN</td>
                                                <td>Patient Name</td>
                                                <td>Doctor Name</td>
                                                <td>Date</td>
                                                <td>Timeslot</td>
                                                <td>age</td>
                                                <td>gender</td>
                                                <td>Address</td>
                                                <td>Contact</td>
                                                <td>Description</td>
                                        </tr>
                                    </thead>
                                      <tbody class="tbl-content" style="color: black;">
                                        <?php $i=1; foreach ($appointments as $a) {
                                            if($a->date.' '. $a->time <= date('Y-m-d H:i:s')){
                                                if (($_SESSION['patient_id'])==$a->patient_id) {?>
                                                 
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $a->patient_name; ?></td>
                                                <td><?php foreach ($doctors as $d) {
                                                    if($a->doctor_id==$d->id){echo $d->name; }}?></td>
                                                <td><?php echo $a->date; ?></td>
                                                <td><?php echo $a->time; ?></td>
                                                <td><?php echo $a->age?></td>
                                                <td><?php echo ($a->gender=='1')? 'male': 'female';?></td>
                                                <td><?php echo $a->address; ?></td>
                                                <td><?php echo $a->contact; ?></td>
                                                <td><?php echo $a->description; ?></td>
                                                
                                        </tr>
                                        <?php }}}?>
                                    </tbody>
                            </table>

                        </div></div>
                    </div>
                </div>
            </div>
                    <!-- </div> -->
                    <!--End Advanced Tables -->
               <!--  </div> -->
            <!-- </div> -->
                <!-- /. ROW  --> 	
          <!--  </div> -->
            <!-- /. PAGE INNER  -->
       <!--  </div> -->

    <?php require_once "footer.php";?>
    <!-- DATA TABLE SCRIPTS -->
<script src="admin/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="admin/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
          $(document).ready(function () {
  $('#display_appoint').DataTable();
});
    </script>

    <script>
          $(document).ready(function () {
  $('#display_appoint2').DataTable();
});
    </script>

       