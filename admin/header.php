<?php
    require_once 'object.php';
    date_default_timezone_set("Asia/Kathmandu");
    @session_start();
    if(!isset($_SESSION['admin_username']) || empty($_SESSION['admin_username'])){
    header('location:index.php?msg=1');
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <!-- <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" /> -->
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <style type="text/css">
    .error{
        color:red;
    }
</style> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><b>Thimi</b>Clinic</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                         <?php echo $_SESSION['admin_username']?>
                         <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-stethoscope"></i> Doctor Management</a>
                        <span class="fa arrow"></span>
                        <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_doctor.php"><i class="fa fa-plus fa-fw"></i>Add Doctor</a>
                                </li>
                                <li>
                                    <a href="display_doctor.php"><i class="fa fa-th-list   fa-fw"></i>List Doctor</a>
                                </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user"></i> Patient Management</a>
                        <span class="fa arrow"></span>
                        <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="list_patient.php"><i class="fa fa-th-list   fa-fw"></i>List Patient</a>
                                </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user-md"></i> Speciality Management</a>
                        <span class="fa arrow"></span>
                        <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_specialist.php"><i class="fa fa-plus fa-fw"></i>Add Speciality</a>
                                </li>
                                <li>
                                    <a href="display_specialist.php"><i class="fa fa-th-list   fa-fw"></i>List Speciality</a>
                                </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user"></i> Schedule Management</a>
                        <span class="fa arrow"></span>
                        <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="add_schedule.php"><i class="fa fa-plus fa-fw"></i>Add Schedule</a>
                                </li>
                                <li>
                                    <a href="display_schedule.php"><i class="fa fa-th-list   fa-fw"></i>List Schedule</a>
                                </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user"></i> Appointment Management</a>
                        <span class="fa arrow"></span>
                        <ul class="nav nav-second-level">
                                
                                <!-- <li>
                                    <a href="add_appointment.php"><i class="fa fa-plus fa-fw"></i>Add Appointment</a>
                                </li> -->
                                <li>
                                    <a href="display_appointment.php"><i class="fa fa-th-list   fa-fw"></i>List Appointment</a>
                                </li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->