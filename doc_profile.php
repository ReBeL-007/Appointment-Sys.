<?php 
    date_default_timezone_set("Asia/Kathmandu");

	     @session_start();

   require_once 'admin/object.php';
    
    $doctor->set('id',$_GET['id']);

  if(isset($_POST['submit'])){
        
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

    if(isset($_POST['gender'])){
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
        
    if(isset($_POST['status'])){
            $doctor->set('status',$_POST['status']);
        }
        //print_r($err);
           if(count($err)==0){
                $doctor->set('updated_by',$_SESSION['doctor_username']);
            $doctor->set('updated_date',date('Y-m-d H:i:s'));
            $st= $doctor->edit2();
            //print_r($st);
            }                
    }


$data= $doctor->getdoctorByID();
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Updating your profile</a>
         
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">

                                    <?php if(isset($st) && $st==true) { ?>
                                        <div class="alert alert-success"><?php echo "Doctor updated Successfully"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on updating doctor"; ?></div>
                                        <?php } ?>
		                    <form role="form" action="" method="POST" id="doctor_form">
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name</label> 
                                <div class="col-8">
                                  <input id="username" name="username" value="<?php echo $data[0]->username; ?>" placeholder="Username" class="form-control here" required="required" type="text">
                                  <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['username'])){
                                                echo $err['username']; }?></label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" value="<?php echo $data[0]->name; ?>" placeholder="Your Name" class="form-control here" type="text" required="">
                                  <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['name'])){
                                                echo $err['name']; }?></label>
                                </div>
                              </div>
                             <div class="form-group row">
                                <label for="address" class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <input id="address" name="address" value="<?php echo $data[0]->address; ?>" placeholder="address" class="form-control here" type="text" required="">
                                   <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['address'])){
                                                echo $err['address']; }?></label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="contact" class="col-4 col-form-label">Contact</label> 
                                <div class="col-8">
                                  <input id="contact" name="contact" value="<?php echo $data[0]->contact; ?>" placeholder="contact" class="form-control here" type="text" required="">
                                   <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['contact'])){
                                                echo $err['contact']; }?></label>
                                </div>
                              </div>

                              
                             
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" value="<?php echo $data[0]->email; ?>" placeholder="Email" class="form-control here" required="required" type="text">
                                  
                                    <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['email'])){
                                                echo $err['email']; }?></label>
                                </div>
                              </div>
                              
                              
                              <div class="form-group row">
                                <label for="pass" class="col-4 col-form-label">Password</label> 
                                <div class="col-8">
                                  <input id="pass" name="password" value="<?php echo $data[0]->password; ?>" placeholder="Password" class="form-control here" type="Password" required="" readonly>
                                  <!-- <input type="checkbox" onclick="myFunction()">Show Password -->
                                  <a href="change_psw.php?id=<?php echo $data[0]->id; ?>" style='float: right;'>Change</a>
                                  <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['password'])){
                                                echo $err['password']; }?></label>
                                </div>
                              </div> 
                              <div class="form-group row">
                                            <label for="dob" class="col-4 col-form-label">DOB</label>
                                            <div class="col-8">
                                            <input type="date" name="dob" value="<?php echo $data[0]->dob; ?>" id="dob" class="form-control here" required>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['dob'])){
                                                echo $err['dob']; }?></label>
                                        </div>
                                    </div>
                                        
                                        <div class="form-group row">
                                            <label for="gender" class="col-4 col-form-label">Gender</label>
                                            <div class="col-8">
                                            <?php if($data[0]->gender==1){?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="1" checked="" >Male
                                                </label>
                                            </div>
                                        
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="0" >Female
                                                </label>
                                            </div>
                                        <?php } else{?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="1" >Male
                                                </label>
                                            </div>
                                        
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="0" checked="">Female
                                                </label>
                                            </div>
                                        <?php }?>
                                                
                                            
                                        </div>
                                    </div>

                                      	<div class="form-group row">
                                            <label for="status" class="col-4 col-form-label">Status</label>
                                            <div class="col-8">
                                        <?php if($data[0]->status==1){?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="status" value="1" checked="" >Active
                                                </label>
                                            </div>
                                        
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="status" value="0" >De Active
                                                </label>
                                            </div>
                                        <?php } else{?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="status" value="1" >Active
                                                </label>
                                            </div>
                                        
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="status" value="0" checked="">De Active
                                                </label>
                                            </div>
                                        <?php }?>
                                           </div> 
                                        </div>


                                    <div class="form-group row">
                                            <label for="qualification" class="col-4 col-form-label">Qualification</label>
                                            <div class="col-8">
                                            <textarea rows="5" cols="30" name="qualification" id="qualification" class="form-control here" required><?php echo $data[0]->qualification; ?></textarea>
                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['qualification'])){
                                                echo $err['qualification']; }?></label>
                                        </div>
                                        </div>

                                         <div class="form-group row">
                                <label for="spe" class="col-4 col-form-label">Specialist</label> 
                                <div class="col-8">
                                  <select name="specialist_id" id="specialist_id" required="">
                                                        <!-- <option value="0">Select </option> -->
                                                        <?php $specialists=$specialist->list();
                                                            
                                                            foreach ($specialists as $s) { 
                                                                if ($s->id==$data[0]->specialist_id) {?>
                                                                <option value="<?php echo $s->id; ?>" selected><?php echo $s->specialist;?>
                                                                     
                                                                 <?php }else { ?>
                                                                <option value="<?php echo $s->id; ?>"><?php echo $s->specialist;?>
                                                                        </option>
                                                            <?php } }?>
                                                    </select>
                                </div>
                              </div>
                               <div class="form-group row">
                                            <label for="spe_details" class="col-4 col-form-label">Specialist Details</label>
                                            <div class="col-8">
                                            <textarea rows="5" cols="50" name="specialistdetails" id="specialistdetails">
                                                <?php echo $data[0]->specialist_details;?>
                                            </textarea>
                                              <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['specialistdetails'])){
                                                echo $err['specialistdetails']; }?></label>  
                                        </div>
                                    </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#doctor_form').validate();
        })

        function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    </script>