    <?php 
        $title= "Update Speciality";
    require_once "header.php"; 
    $specialist->set('id',$_GET['id']);

        if(isset($_POST['update'])){
        
        $err=[];


        if(isset($_POST['specialist_name']) && !empty($_POST['specialist_name']) && trim($_POST['specialist_name'])!=""){
            $specialist->set('specialist',$_POST['specialist_name']);
        }
        else{
        $err['specialist_name']= "Enter specialist name";
              }

        if (count($err)==0) {
            $specialist->set('updated_by',$_SESSION['admin_username']);
            $specialist->set('updated_date',date('Y-m-d H:i:s'));
           $st=$specialist->edit();
        }
        
}
	$data= $specialist->getspecialistByID();
	//print_r($data);
    ?>



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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Speciality
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    <?php if(isset($st) && $st==true) { ?>
                                        <div class="alert alert-success"><?php echo "Speciality updated"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on updating speciality"; ?></div>
                                        <?php } ?>
                                    <form role="form" action="" method="POST" id="specialist_form">
                                        <div class="form-group">
                                            <label>Speciality</label>
                                            <input type="text" name="specialist_name" id="specialist_name" class="form-control" value="<?php echo $data[0]->specialist; ?>" required="">
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['specialist_name'])){
                                                echo $err['specialist_name']; }?></label>
                                        </div>
                                       
                                         
                                        <button type="submit" name="update" class="btn btn-info">Update Speciality</button>
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
            $('#specialist_form').validate();
        })
    </script>