<?php
	       
    date_default_timezone_set("Asia/Kathmandu");
	
	     @session_start();

    require_once 'admin/object.php';
   

$doctors= $doctor->list();
$patients= $patient->list();
	

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Thimi Araniko Dental Clinic</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Pearly Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<!--     <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
 -->

	<!--Online-fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!--//Online-fonts-->

	<style type="text/css">
    .error{
        color:red;
    }
</style> 
</head>

<body>
	
	<!-- Header -->
	<div class="logo-w3layouts">
		<div class="header-top-w3ls">
			<div class="container">
				<div class="w3l-social">
					<ul>
						<li>
							<a href="#" class="fa fa-facebook"></a>
						</li>
						<li>
							<a href="#" class="fa fa-twitter"></a>
						</li>
						<li>
							<a href="#" class="fa fa-google-plus"></a>
						</li>
					</ul>
				</div>
				<div class="right-p">
					<ul>
						<li>
							<span class="fa fa-phone" aria-hidden="true"></span>098-765-4321</li>
						<li>
							<span class="fa fa-clock-o" aria-hidden="true"></span>( Mon-Fri 9am - 8pm ) ( Sat-Sun 10am - 6pm )</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header-mid">
			<div class="container">
				<h1>
				<?php if (isset($_SESSION['doctor_username']) || !empty($_SESSION['doctor_username'])) { ?>
                    <a href="doctor.php" ><span>T</span>himi
						<span>A</span>raniko
						<span>D</span>ental
						<span>C</span>linic</a>
                <?php } elseif (isset($_SESSION['patient_username']) || !empty($_SESSION['patient_username'])) {?>

                    <a href="patient.php" ><span>T</span>himi
						<span>A</span>raniko
						<span>D</span>ental
						<span>C</span>linic</a>
                <?php }?>
					
				</h1>
					
						<ul class="nav navbar-top-links navbar-right">
                
                            <!-- /.dropdown -->
                            <li class="dropdown" style="float: right;"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <button style="float: right;">
                                    <?php 
                                        if (isset($_SESSION['doctor_username']) || !empty($_SESSION['doctor_username'])) {
                                                echo $_SESSION['doctor_username'];
                                                    } 

                                                elseif (isset($_SESSION['patient_username']) || !empty($_SESSION['patient_username'])) {
                                                    echo $_SESSION['patient_username'];
                                    } ?>

                                     <i class="fa fa-caret-down"></i>
                                 </button>
                                </a>
                                <div class="clearfix"></div>
                                <ul class="dropdown-menu dropdown-user">

                                    <?php if (isset($_SESSION['patient_username']) || !empty($_SESSION['patient_username'])) {?>
                                    <li><a href="myappointment.php"><i class="fa fa-list fa-fw"></i> MyAppointment</a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php foreach($patients as $p){
                                                if($p->username== $_SESSION['patient_username']){ ?> 
                                     <li><a href="patient_profile.php?id=<?php echo $p->id; ?>"><i class="fa fa-user fa-fw"></i> Profile</a>
                                    </li>
                                <?php }}} else { ?>
                                    <li><a href="docappointment.php"><i class="fa fa-list fa-fw"></i> MyAppointment</a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php foreach($doctors as $d){
                                                if($d->username== $_SESSION['doctor_username']){ ?> 
                                     <li><a href="doc_profile.php?id=<?php echo $d->id; ?>"><i class="fa fa-user fa-fw"></i> Profile</a>
                                    </li>
                                <?php }}}?>
                            
                                    
                                    <li class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                        <div class="clearfix"></div>
            </div>
        </div>
    </div>
    



    <div class="w3l_banner_info" id="home">
        <div class="slider">
            <div class="callbacks_container">
                <!-- Navigation -->
                <div class="header-nav">
                    <div class="container">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header logo">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- navbar-header -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><?php if (isset($_SESSION['doctor_username']) || !empty($_SESSION['doctor_username'])) { ?>
                                        <a href="doctor.php" >Home</a>
                                    <?php } elseif (isset($_SESSION['patient_username']) || !empty($_SESSION['patient_username'])) {?>
                                    	<a href="patient.php" >Home</a>
                                    <?php }?>
                                    </li>
                                    <li>
                                        <a href="about.php" >About</a>
                                    </li>
                                    <li>
                                        <a href="team.php" >Team</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.php" >Portfolio</a>
                                    </li>
                                   <?php if (isset($_SESSION['patient_username']) || !empty($_SESSION['patient_username'])) {?>
                                    <li>
                                        <a href="book.php" >Book Appointment</a>
                                    </li>
                                <?php }?>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </nav>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!-- //Navigation -->