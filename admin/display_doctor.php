    <?php 
        $title= "Display Doctor";
    require_once "header.php";
    $doctors= $doctor->list();
    //print_r($doctors);
      $specialists=$specialist->list();
     ?>
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Doctor Management
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Display Doctor
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="display_dr">
                                    <thead>
                                        <tr>
                                            	<td>SN</td>
                                                <td>Name</td>
                                                <td>Username</td>
                                                <td>email</td>
                                                <td>Password</td>
                                                <td>Address</td>
                                                <td>DOB</td>
                                                <td>Contact</td>
                                                <td>Gender</td>
                                                <td>Status</td>
                                                <td>Qualification</td>
                                                <td>Specialist</td>
                                                <td>Specialist Details</td>
                                                <td>Created By</td>
                                                <td>Updated By</td>
                                                <td>Created Date</td>
                                                <td>Updated Date</td>
                                                <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach($doctors as $d){?>
                                    	<tr>
                                    			<td><?php echo $i++; ?></td>
                                                <td><?php echo $d->name; ?></td>
                                                <td><?php echo $d->username; ?></td>
                                                <td><?php echo $d->email; ?></td>
                                                <td><?php echo $d->password; ?></td>
                                                <td><?php echo $d->address; ?></td>
                                                <td><?php echo $d->dob; ?></td>
                                                <td><?php echo $d->contact; ?></td>
                                                <td><?php echo ($d->gender=='1')? 'male': 'female' ; ?></td>
                                                <td><?php if($d->status==1){?>
                                                    <span class="label label-success"> Active </span>
                                                    <?php } else {?>
                                                    <span class="label label-danger"> Deactive </span>
                                                    <?php } ?></td>
                                                <td><?php echo $d->qualification; ?></td>
                                                <td><?php foreach($specialists as $s){
                                                            if($d->specialist_id==$s->id){
                                                                echo $s->specialist;
                                                                }
                                                            } ?></td>
                                                <td><?php echo $d->specialist_details; ?></td>
                                                <td><?php echo $d->created_by; ?></td>
                                                <td><?php echo $d->updated_by; ?></td>
                                                <td><?php echo $d->created_date; ?></td>
                                                <td><?php echo $d->updated_date; ?></td>
                                                <td>
                                                    <a href="edit_doctor.php?id=<?php echo $d->id; ?>" class="btn btn-warning" title="edit" ><i class="fa fa-">Edit</i></a>
                                                    
                                                     <a href="delete_doctor.php?id=<?php echo $d->id; ?>" class="btn btn-danger" title="delete" onclick= "return confirm('Are you sure to delete?')"><i class="fa fa-trash">Delete</i>
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
                $('#display_dr').dataTable();
            });
    </script>
     