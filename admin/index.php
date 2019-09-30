<?php
    require_once 'object.php';

    if(isset($_POST['btn-lg'])){
        
        $err=[];


        if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=""){
            $admin->set('email',$_POST['email']);
        }
        else{
        $err['email']= "Enter Email";
    }
    if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
            $admin->set('password',($_POST['password']));
        }
        else{
        $err['password']= "Enter password";
    }
        if(count($err)== 0){
        $login_err= $admin->login();
    }


    }


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ThimiDental</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
    .error{
        color:red;
    }
</style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php if(isset($login_err)) { ?>
                        <div class="alert alert-danger"><?php echo $login_err; ?></div>
                        <?php } ?>
                        <?php if(isset($_GET['msg']) && !empty($_GET['msg'])) { ?>
                        <div class="alert alert-danger">Please Login to Access</div>
                        <?php } ?>
                        <form role="form" method="post"  action="" id="login_form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required="">
                                    <?php if(isset($err['email'])){ ?>
                                     <div class="alert alert-danger"><?php echo $err['email']; ?></div>
                                     <?php } ?>
                                 
                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                                    <?php  if(isset($err['password'])){ ?>
                                     <div class="alert alert-danger"><?php echo $err['password']; ?></div>
                                     <?php } ?>
                                 
                                    
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="btn-lg">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>


    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#login_form').validate();
        })
    </script>

</body>

</html>
