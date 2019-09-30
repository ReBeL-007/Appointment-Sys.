    <?php 
        $title= "Display Appointment";
    require_once "header.php";
    $appointments= $appointment->list();
    $patients= $patient->list();
    $doctors= $doctor->list();
      
     ?>
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Display Appointment
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="display_appoint">
                                    <thead>
                                        <tr>
                                            	<td>SN</td>
                                                <td>Appointment Status</td>
                                                <td>UserName</td>
                                                <td>Patient Name</td>
                                                <td>Doctor Name</td>
                                                <td>Date</td>
                                                <td>Timeslot</td>
                                                <td>age</td>
                                                <td>gender</td>
                                                <td>Address</td>
                                                <td>Contact</td>
                                                <td>Description</td>
                                                <td>Confirmed By</td>
                                                <td>Confirmed Date</td>
                                                <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach($appointments as $a){?>
                                    	<tr>
                                    			<td><?php echo $i++; ?></td>
                                                <td><?php echo ($a->status=='1')? 'confirmed': 'pending' ; ?></td>
                                                <td><?php foreach ($patients as $p) {
                                                    if($a->patient_id==$p->id){echo $p->name; }}?></td>
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
                                                <td><?php echo $a->confirmed_by; ?></td>
                                                <td><?php echo $a->confirmed_date; ?></td>
                                                <td>
                                                    <a href="edit_appointment.php?id=<?php echo $a->id; ?>" class="btn btn-success" title="edit" ><i class="fa fa-">Confirm</i></a>
                                                    
                                                     <a href="delete_appointment.php?id=<?php echo $a->id; ?>" class="btn btn-danger" title="delete" onclick= "return confirm('Are you sure to delete?')"><i class="fa fa-trash">Delete</i>
                                                    </a>

                                                    
                                                </td>
                                    	</tr>
                                    	<?php }?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  --> 	
           </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php require_once "footer.php"; ?>
     
    
     <!-- DATA TABLE SCRIPTS -->
     <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#display_appoint').dataTable();
            });
    </script>
     