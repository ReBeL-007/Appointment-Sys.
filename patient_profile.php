<?php 
    date_default_timezone_set("Asia/Kathmandu");

	     @session_start();

   require_once 'admin/object.php';
    
    $patient->set('id',$_GET['id']);

  if(isset($_POST['submit'])){
        
        $err=[];


        if(isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])!=""){
            $patient->set('name',$_POST['name']);
        }
        else{
        $err['name']= "Enter name";
    }

    
    if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=""){
            $patient->set('email',$_POST['email']);
        }
        else{
        $err['email']= "Enter email";
    }

    if(isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])!=""){
            $patient->set('username',$_POST['username']);
        }
        else{
        $err['username']= "Enter username";
    }

    if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
            $patient->set('password',md5($_POST['password']));
        }
        else{
        $err['password']= "Enter password";
    }

    
        //print_r($err);
           if(count($err)==0){
                $patient->set('updated_by',$_SESSION['patient_username']);
            $patient->set('updated_date',date('Y-m-d H:i:s'));
            $st= $patient->edit();
            //print_r($st);
            }                
    }


$data= $patient->getpatientByID();
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
                                        <div class="alert alert-success"><?php echo "User Updated Successfully"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on updating User"; ?></div>
                                        <?php } ?>
		                    <form role="form" action="" method="POST" id="patient_form">
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
                                  <a href="change_user_psw.php?id=<?php echo $data[0]->id; ?>" style='float: right;'>Change</a>
                                  <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['password'])){
                                                echo $err['password']; }?></label>
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
            $('#patient_form').validate();
        })

        
    </script>