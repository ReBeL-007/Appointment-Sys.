    <?php 
        $title= "Add Doctor";

    require_once "header.php"; 

        if(isset($_POST['save'])){
        
        $err=[];


        if(isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])!=""){
            $doctor->set('name',$_POST['name']);
        }
        else{
        $err['name']= "Enter name";
    }

    if(isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])!=""){
            $doctor->set('address',$_POST['address']);
        }
        else{
        $err['address']= "Enter address";
    }

    if(isset($_POST['contact']) && !empty($_POST['contact']) && trim($_POST['contact'])!=""){
            $doctor->set('contact',$_POST['contact']);
        }
        else{
        $err['contact']= "Enter contact";
    }

    if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=""){
            $doctor->set('email',$_POST['email']);
        }
        else{
        $err['email']= "Enter email";
    }

    if(isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])!=""){
            $doctor->set('username',$_POST['username']);
        }
        else{
        $err['username']= "Enter username";
    }

    if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
            $doctor->set('password',md5($_POST['password']));
        }
        else{
        $err['password']= "Enter password";
    }

    if(isset($_POST['dob']) && !empty($_POST['dob'])){
            $doctor->set('dob',$_POST['dob']);
        }
        else{
        $err['dob']= "Enter date of birth";
    }

    if(isset($_POST['gender']) ){
            $doctor->set('gender',$_POST['gender']);
        }
        else{
        $err['gender']= "Enter gender";
    }

    if(isset($_POST['qualification']) && !empty($_POST['qualification']) && trim($_POST['qualification'])!=""){
            $doctor->set('qualification',$_POST['qualification']);
        }
        else{
        $err['qualification']= "Enter qualification";
    }

    if(isset($_POST['specialist_id']) && !empty($_POST['specialist_id']) && trim($_POST['specialist_id'])!=""){
            $doctor->set('specialist_id',$_POST['specialist_id']);
        }
        else{
        $err['specialist_id']= "Enter specialist";
    }

    if(isset($_POST['specialistdetails']) && !empty($_POST['specialistdetails']) && trim($_POST['specialistdetails'])!=""){
            $doctor->set('specialist_details',$_POST['specialistdetails']);
        }
        
        
    if(isset($_POST['status']) ){
            $doctor->set('status',$_POST['status']);
        }
        
            if (count($err)==0) {
                $doctor->set('created_by',$_SESSION['admin_username']);
            $doctor->set('created_date',date('Y-m-d H:i:s'));
            $st= $doctor->create();
            //print_r($st);
            }
           
                
    }


    ?>
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Doctor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    <?php if(isset($st) && $st > 0) { ?>
                                        <div class="alert alert-success"><?php echo "Doctor added"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on adding doctor"; ?></div>
                                        <?php } ?>
                                    <form role="form" action="" method="POST" id="doctor_form" >
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['name'])){
                                                echo $err['name']; }?></label>                           
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['address'])){
                                                echo $err['address']; }?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter contact" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['contact'])){
                                                echo $err['contact']; }?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['email'])){
                                                echo $err['email']; }?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['username'])){
                                                echo $err['username']; }?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['password'])){
                                                echo $err['password']; }?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="date" name="dob" id="dob" class="form-control" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['dob'])){
                                                echo $err['dob']; }?></label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="1" >Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="0">Female
                                                </label>
                                            </div>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['gender'])){
                                                echo $err['gender']; }?></label>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="status" id="status" value="1">Active
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="status" id="status" value="0" checked="">Deactive
                                                </label>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <div><textarea rows="5" cols="50" name="qualification" id="qualification" class="form-control" required></textarea></div>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['qualification'])){
                                                echo $err['qualification']; }?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Specialist</label>
                                            <div><select name="specialist_id" id="specialist_id" class="form-control" required>
                                                        <option value="0">Select Specialist</option>
                                                        <?php $specialists=$specialist->list();
                                                            
                                                            foreach ($specialists as $s) { ?>
                                                                <option value="<?php echo $s->id; ?>"><?php echo $s->specialist;?>
                                                                        </option>
                                                            <?php }?>
                                                    </select>
                                            </div>
                                            <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['specialist_id'])){
                                                echo $err['specialist_id']; }?></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Specialist Details</label>
                                            
                                            <div><textarea rows="5" cols="50" name="specialistdetails" id="specialistdetails" class="form-control"></textarea></div>
                                                
                                        </div>
                                         
                                        <button type="submit" name="save" class="btn btn-info">Add Doctor</button>
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
            
            $('#doctor_form').validate();
        })
    </script>