    <?php 
        $title= "Display Specialist";
    require_once "header.php"; 
    $specialists=$specialist->list();
    ?>
         <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <div id="page-wrapper">
           <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Speciality Management
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Display Speciality
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="display_specialist">
                                    <thead>
                                        <tr>
                                            	<td>SN</td>
                                                <td>Speciality</td>
                                                <td>created_by</td>
                                                <td>updated_by</td>
                                                <td>created_date</td>
                                                <td>updated_date</td>
                                                <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=1; foreach($specialists as $s){?>
                                    	<tr>
                                    			<td><?php echo $i++; ?></td>
                                                <td><?php echo $s->specialist; ?></td>
                                                <td><?php echo $s->created_by; ?></td>
                                                <td><?php echo $s->updated_by; ?></td>
                                                <td><?php echo $s->created_date; ?></td>
                                                <td><?php echo $s->updated_date; ?></td>
                                                <td>
                                                    <a href="edit_speciallist.php?id=<?php echo $s->id; ?>" class="btn btn-warning" title="edit" ><i class="fa fa">Edit</i></a>

                                                    <a href="delete_specialist.php?id=<?php echo $s->id; ?>" class="btn btn-danger" title="delete" onclick= "return confirm('Are you sure to delete?')"><i class="fa fa-trash">Delete</i>
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
                $('#display_specialist').dataTable();
            });
    </script>