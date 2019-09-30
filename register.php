<?php

    date_default_timezone_set("Asia/Kathmandu");

  require_once 'admin/object.php';

   if(isset($_POST['signup'])){
        
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

    if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
      if(isset($_POST['rpassword']) && !empty($_POST['rpassword']) && trim($_POST['rpassword'])!=""){
          if($_POST['password']!=$_POST['rpassword']){
            $err['rpassword']= "Password not matched";
          }
        }
        else{
        $err['rpassword']= "Enter password";
    }
      }

   // print_r($err);
        if (count($err)==0) {
          // $patient->set('created_by',$_SESSION['admin_username']);
            $patient->set('created_date',date('Y-m-d H:i:s'));
            $st= $patient->create();
            //print_r($st);
        }
                
    }
?>



<!DOCTYPE html>
<html>
<style>
body {
        font-family: Arial, Helvetica, sans-serif;
        background: grey  ;
        width: 0%;
        height: 50px;
        padding: 5px 5px;

  }
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    position: absolute;
    background-color: white;
    padding: 20px;
    width: 50%;
    display: table;
    margin-left: 350px;
    }

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

    <?php if(isset($st) && $st > 0) { ?>
      <div class="alert alert-success"><?php echo "<script type='text/javascript'>alert('Signed up successfully');</script>"; ?></div>
      <?php } elseif(isset($st) && $st == false) { ?>
      <div class="alert alert-danger"><?php echo "Error on signing up"; ?></div>
          <?php } ?>

    <form action="#" method="post" style="border:1px solid #ccc" id="signup_form">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <div class="form-group">
        <label for="name"><b>Name</b></label>
        <input type="text" class="form-control" placeholder="Enter FullName" name="name" required>
              <?php  if(isset($err['name'])){ ?>
                             <div class="alert alert-danger">
                              <?php echo $err['name']; ?>  
                              </div>
                        <?php } ?>
        </div>

        <div class="form-group">
        <label for="username"><b>Username</b></label>
        <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            <?php if(isset($err['username'])){ ?>
              <div class="alert alert-danger">
                   <?php echo $err['username']; ?>
                 </div>
                     <?php }?>
        </div>

        <div class="form-group">             
        <label for="email"><b>Email</b></label><br>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" size="65%"  required>
              <?php  if(isset($err['email'])){ ?>
                             <div class="alert alert-danger">
                              <?php echo $err['email']; ?>  
                              </div>
                        <?php } ?>
        </div>

        <div class="form-group">
        <label for="password"><b>Password</b></label>
        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
              <?php  if(isset($err['password'])){ ?>
                             <div class="alert alert-danger">
                              <?php echo $err['password']; ?>  
                              </div>
                        <?php } ?>
        </div>

        <div class="form-group">
        <label for="rpassword"><b>Repeat Password</b></label>
        <input type="password" class="form-control" placeholder="Repeat Password" name="rpassword" required>
              <?php  if(isset($err['rpassword'])){ ?>
                             <div class="alert alert-danger">
                              <?php echo $err['rpassword']; ?>  
                              </div>
                        <?php } ?>
        </div>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>
        
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn" name="signup">Sign Up</button>
        </div>
      </div>
    </form>

</body>
</html>
 <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#signup_form').validate();
        })
    </script>