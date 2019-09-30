<?php 
    

   require_once 'admin/object.php';
    
    $patient->set('id',$_GET['id']);


  if(isset($_POST['submit'])){
        
        $err=[];


    if(isset($_POST['oldpass']) && !empty($_POST['oldpass']) && trim($_POST['oldpass'])!=""){
            $patient->set('oldpass',md5($_POST['oldpass']));
        }
        else{
        $err['oldpass']= "Enter oldpass";
    }

    if(isset($_POST['newpass']) && !empty($_POST['newpass']) && trim($_POST['newpass'])!=""){
            $patient->set('newpass',md5($_POST['newpass']));
        }
        else{
        $err['newpass']= "Enter newpass";
    }

    
        //print_r($err);
           if(count($err)==0){
                
            $st= $patient->change_psw();
            //print_r($st);
            }                
    }


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
                                        <div class="alert alert-success"><?php echo "Password updated Successfully"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on updating password"; ?></div>
                                        <?php } ?>
		                    <form role="form" action="" method="POST" id="patient_form">
                              
                              <div class="form-group row">
                                <label for="oldpass" class="col-4 col-form-label">Old Password</label> 
                                <div class="col-8">
                                  <input id="oldpass" name="oldpass" placeholder="Old Password" class="form-control here" type="Password" required="">
                                  <input type="checkbox" onclick="myFunction()">Show Password
                                  
                                  <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['oldpass'])){
                                                echo $err['oldpass']; }?></label>
                                </div>
                              </div> 

                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="Password" required="">
                                  <input type="checkbox" onclick="myFunction2()">Show Password
                                  
                                  <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['newpass'])){
                                                echo $err['newpass']; }?></label>
                                </div>
                              </div> 
                              
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Change Password</button>
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

        function myFunction() {
    var x = document.getElementById("oldpass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myFunction2() {
    var x = document.getElementById("newpass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    </script>