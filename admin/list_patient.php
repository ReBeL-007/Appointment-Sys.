    <?php 
        $title= "Display Patient";
    require_once "header.php";
    $patients= $patient->list();
     ?>
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Patient Management
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Display patient
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="display_patient">
                                    <thead>
                                        <tr>
                                            	<td>SN</td>
                                                <td>Name</td>
                                                <td>Username</td>
                                                <td>email</td>
                                                <td>Password</td>
                                                <td>Created By</td>
                                                <td>Updated By</td>
                                                <td>Created Date</td>
                                                <td>Updated Date</td>
                                                <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach($patients as $d){?>
                                    	<tr>
                                    			<td><?php echo $i++; ?></td>
                                                <td><?php echo $d->name; ?></td>
                                                <td><?php echo $d->username; ?></td>
                                                <td><?php echo $d->email; ?></td>
                                                <td><?php echo $d->password; ?></td>
                                                <td><?php echo $d->created_by; ?></td>
                                                <td><?php echo $d->updated_by; ?></td>
                                                <td><?php echo $d->created_date; ?></td>
                                                <td><?php echo $d->updated_date; ?></td>
                                                <td>
                                                    

                                                    <a href="delete_patient.php?id=<?php echo $d->id; ?>" class="btn btn-danger" title="delete" onclick= "return confirm('Are you sure to delete?')"><i class="fa fa-trash">Delete</i>
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
                $('#display_patient').dataTable();
            });
    </script>