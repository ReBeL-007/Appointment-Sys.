<?php
	
	

    require_once 'admin/object.php';
    @session_start();
// login validation for patient
    if(isset($_POST['login'])){
        
        $err=[];


        if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=""){
            $patient->set('email',$_POST['email']);
        }
        else{
        $err['email']= "Enter email";
    }
    if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
            $patient->set('password',md5($_POST['password']));
        }
        else{
        $err['password']= "Enter password";
    }
        if(count($err)== 0){
        $login_err= $patient->login();
    		}


    }


// login validation for doctor
    if(isset($_POST['login2'])){
        
        $err=[];


        if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=""){
            $doctor->set('email',$_POST['email']);
        }
        else{
        $err['email']= "Enter email";
    }
    if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])!=""){
            $doctor->set('password',md5($_POST['password']));
        }
        else{
        $err['password']= "Enter password";
    }
        if(count($err)== 0){
        $login_err= $doctor->login();
    		}


    }


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
	<link href="css/modal.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
	<?php if (isset($login_err)) {
		echo "<script type='text/javascript'>alert('$login_err');</script>";
	}
	?>
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
					<a href="index.php">
						<span>T</span>himi
						<span>A</span>raniko
						<span>D</span>ental
						<span>C</span>linic</a>
				</h1>
					
					
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
	
<!-- The Modal -->
<div id="modal" class="modal" tabindex="-1" role="dialog">
  

  <!-- Modal Content -->
  <div class="modal-content">

  	<div class="close" title="Close Modal">&times;</div>
	<h2 style="text-align: center; color: green;">User Login</h2>
  <form  action="" method="post">
   
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['email'])){
                                                echo $err['email']; }?></label>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['password'])){
                                                echo $err['password']; }?></label>

      <button type="submit" name="login">Login</button>
      
    

    <div class="container" style="background-color:#f1f1f1; width:100%;">
      <button type="button" id="cancelbtn" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="register.php">Don't have an account?</a></span></div>
  </form>
      </div>

</div>

<!-- The Modal for doctor-->
<div id="modal2" class="modal2" tabindex="-1" role="dialog" 
																style=" position: absolute; 
																    /*z-index: 1; *//* Sit on top */
																    /*left: 0;*/
																    top: 0;
																    width: 100%; /* Full width */
																    height: 100%; /* Full height */
																    /*overflow: auto;*/ /* Enable scroll if needed */
																    /*background-color: rgb(0,0,0);*/ /* Fallback color */
																    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
																   /* padding-top: 60px;*/
																   z-index: 1;
																   display: flex;
																   justify-content: center;
																   align-items: center;
																    display: none; /* Hidden by default */">
  

  <!-- Modal Content -->
  <div class="modal-content">

  	<div class="close2" title="Close Modal" 
													  	style="/* Position it in the top right corner outside of the modal */
													    position: absolute;
													    right: 14px;
													    top: 0; 
													    color: #000;
													    font-size: 25px;
													    cursor: pointer;
													    z-index: 1;">&times;</div>
	<h2 style="text-align: center; color: green;">Doctor Login</h2>
  <form  action="" method="post">
   
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['email'])){
                                                echo $err['email']; }?></label>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['password'])){
                                                echo $err['password']; }?></label>

      <button type="submit" name="login2">Login</button>
      
    

    <div class="container" style="background-color:#f1f1f1; width:100%;">
      <button type="button" id="cancelbtn2" class="cancelbtn">Cancel</button>
      	</div>
  </form>
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
									<li>
										<a href="index.php" class="active scroll">Home</a>
									</li>
									<li>
										<a href="#about" class="scroll">About</a>
									</li>
									<li>
										<a href="#team" class="scroll">Team</a>
									</li>
									<li>
										<a href="#portfolio" class="scroll">Portfolio</a>
									</li>
									
									<li class="nav-item dropdown">
								      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        Login
								        <i class="fa fa-caret-down"></i>
								      </a>
								      <div class="dropdown-menu" style="text-align: center;">
								      	<ul >
								        <a class="dropdown-item" id="patient" style="cursor: pointer;" >--as User--</a>
								        <li class="divider"></li>

								        <a class="dropdown-item" id="doctor" style="cursor: pointer;">--as Doctor--</a>
								        </ul>
								      </div>
								    </li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //Navigation -->
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img b1">
						</div>
						<div class="slider_banner_info">
							<div class="w3ls-info">
								<h4>
									<span>D</span>ental
									<span>W</span>hitening</h4>
								<p>We can improve your child's dental health.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img b2">
						</div>
						<div class="slider_banner_info">
							<div class="w3ls-info">
								<h4>
									<span>R</span>oot
									<span>T</span>reatment</h4>
								<p>We are passionate about your child's oral health.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img b3">
						</div>
						<div class="slider_banner_info">
							<div class="w3ls-info">
								<h4>
									<span>D</span>ental
									<span>I</span>mplant</h4>
								<p>We can improve your child's dental health.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- //banner-slider -->
	<!-- //Header -->
	
	<!--about-->
	
	<div class="about-w3layouts" id="about">
		<div class="container">
			<div class="tittle-agileinfo">
				<h5 class="title-w3">About Us</h5>
				<div class="about-top">
					<h3 class="subheading-agileits-w3layouts">Welcome to our Pearly Care</h3>
					<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
						arcu, sed interdum risus. </p>
				</div>
			</div>
			<div class="about-right">
				<h3 class="subheading-agileits-w3layouts sub-2">With 25 years` experience working with children and teens</h3>
				<p class="para-agileits-w3layouts">Duis sit amet nisi quis leo fermentum vestibulum vitae eget augue. Nulla quam nunc, vulputate id urna at, tempor tincidunt
					metus. Sed feugiat quam nec mauris mattis malesuada.</p>
				<div class="button-w3layouts">
					<a href="#contact" class="scroll">Contact Us</a>
				</div>
			</div>
			<div class="about-left-agileits">
				<div class="left-pos-img">
					<img src="images/b3.jpg" alt="">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//about-->
	<!-- Features -->
	<div class="features" id="features">
		<div class="col-md-6 banner-right-w3-agileits">
			<iframe src="https://player.vimeo.com/video/138433283"></iframe>
		</div>
		<div class="col-md-6 agileits_updates_grid_right">
			<h5 class="title-w3">Treatments & Prices</h5>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title asd">
							<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
							    aria-controls="collapseOne">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Dental Whitening
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body panel_text">
							<h5>$30
								<span>(First time)</span>
							</h5>
							Nullam vitae dui magna. Nam egestas interdum odio nec placerat. Fusce dictum eros ligula, quis tempus ante hendrerit nec.
							Aliquam sed tortor vitae massa consequat lobortis.
							<div class="apmnt-butn">
								<a href="#appoint" class="scroll">Request an Appointment</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
							    aria-controls="collapseTwo">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Root Treatment
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body panel_text">
							<h5>$40
								<span>(First time)</span>
							</h5>
							Nullam vitae dui magna. Nam egestas interdum odio nec placerat. Fusce dictum eros ligula, quis tempus ante hendrerit nec.
							Aliquam sed tortor vitae massa consequat lobortis.
							<div class="apmnt-butn">
								<a href="#appoint" class="scroll">Request an Appointment</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
							    aria-controls="collapseThree">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Dental Implant
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body panel_text">
							<h5>$50
								<span>(First time)</span>
							</h5>
							Nullam vitae dui magna. Nam egestas interdum odio nec placerat. Fusce dictum eros ligula, quis tempus ante hendrerit nec.
							Aliquam sed tortor vitae massa consequat lobortis.
							<div class="apmnt-butn">
								<a href="#appoint" class="scroll">Request an Appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //Features -->
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Pearly Care
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="images/b1.jpg" alt=" " class="img-responsive" />
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
						consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
						vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
						<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</i>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //bootstrap-pop-up -->
	<!-- gallery -->
	<div class="gallery-w3layouts" id="portfolio">
		<div class="container-fluid">
			<h5 class="title-w3">Portfolio</h5>
			<div class="col-md-3 gallery-columns">
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g1.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g1.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g2.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g2.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery-columns">
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g4.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g4.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g5.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g5.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery-columns">
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g7.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g7.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g8.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g8.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery-columns">
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g6.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g6.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="images/g3.jpg">
						<div class="gal_grid_outer1">
							<img src="images/g3.jpg" alt=" " class="img-responsive" />
							<div class="gallery_grid_pos">
								<h3>
									<span>P</span>early
									<span>C</span>are</h3>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //gallery -->
	<!--team -->
	<div class="team" id="team">
		<div class="container">
			<h5 class="title-w3">Meet our dentists</h5>
			<div class="team-w3ls">
				<div class="col-md-3 team-grid w3_agileits">
					<img class="img-w3l t1-wthree img-responsive" src="images/t1.jpg" alt="">
					<h6>Andrew Bert</h6>
					<p>Lorem ipsum dolor sit amet. Cras rutrum iaculis enim, non convallis felis mattis.</p>
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
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 team-grid w3_agileits t2">
					<img class="img-w3l t1-wthree img-responsive" src="images/t2.jpg" alt="">
					<h6>Mecan smith</h6>
					<p>Lorem ipsum dolor sit amet. Cras rutrum iaculis enim, non convallis felis mattis.</p>
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
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 w3_agileits team-grid">
					<img class="img-w3l t1-wthree img-responsive" src="images/t4.jpg" alt="">
					<h6>Jack Bravo</h6>
					<p>Lorem ipsum dolor sit amet. Cras rutrum iaculis enim, non convallis felis mattis.</p>
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
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 w3_agileits team-grid">
					<img class="img-w3l t1-wthree img-responsive" src="images/t3.jpg" alt="">
					<h6>Bernard Smith</h6>
					<p>Lorem ipsum dolor sit amet. Cras rutrum iaculis enim, non convallis felis mattis.</p>
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
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team-->
	<!-- testimonials -->
	<div class="test">
		<div class="container">
			<h5 class="title-w3">Testimonials</h5>
			<div class=" test-gr">
				<div class=" test-gri1">
					<div id="owl-demo2" class="owl-carousel">
						<div class="agile">
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/1.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>Andery</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/2.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor.</p>
									<h4>Bryan</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="agile">
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/3.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor.</p>
									<h4>Andery</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/1.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>Bryan</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="agile">
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/2.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>williams</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/3.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>Jack</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonials -->
	<!-- contact -->
	<div class="agileits-contact" id="contact">
		<div class="w3_agileits-contact-left">
		</div>
		<div class="contact-right-w3l">

			<h5 class="title-w3">contact Us </h5>
			<form action="#" method="post">
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="First Name" placeholder="First Name" required="">
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="text" class="name" name="Last Name" placeholder="Last Name" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="email" class="name" name="Email" placeholder="Email" required="">
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="text" class="name" name="Subject" placeholder="Subject" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<select>
						<option>select</option>
					</select>
				</div>
				<div class="input-w3ls w3ls-rght">
					<select>
						<option>select time</option>
					</select>
				</div>
				<div class="input-w3ls">
					<textarea placeholder="Your Message" required=""></textarea>
				</div>
				<div class="input-w3ls">
					<input type="submit" value="Send Message">
				</div>

			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
			<!-- Map -->
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2199.4018448445013!2d8.300581316012691!3d56.546939980773224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464a23dbbf6968cb%3A0xb0923027d6b875bb!2sHospital+Bunker!5e0!3m2!1sen!2sin!4v1519022418987"></iframe>
			</div>
			<!-- //Map -->
			<div class="w3ls_footer_grids">

				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Location</h4>
							<p>7620 Lemvig, Denmark</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Email</h4>
							<p>
								<a href="mailto:info@example.com">info@example.com</a>
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Call Us</h4>
							<p>(+000) 003 003 0052</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- //footer -->
	<!-- copyright -->
	<div class="wthree_copy_right">
		<div class="container">
			<p>© 2018 Pearly Care. All rights reserved | Design by
				<a href="http://w3layouts.com/">W3layouts</a>
			</p>

		</div>
	</div>
	<!-- //copyright -->
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- js -->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- requried-jsfiles-for owl -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- Gallery-script -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.gallery-columns a').simpleLightbox();
	</script>
	<!-- //Gallery-script -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script>
// Get the modal for patient
	document.getElementById('patient').addEventListener('click',
		function(){
			document.querySelector('.modal').style.display='flex';
		});
	
	document.querySelector('.close').addEventListener('click',
		function(){
			document.querySelector('.modal').style.display='none';
		});
	document.getElementById('cancelbtn').addEventListener('click',
		function(){
			document.querySelector('.modal').style.display='none';
		});
	window.addEventListener('click',
		function(e){
			if (e.target== modal) {
			document.querySelector('.modal').style.display='none';
		}});

// Get the modal for doctor
	document.getElementById('doctor').addEventListener('click',
		function(){
			document.querySelector('.modal2').style.display='flex';
		});
	document.querySelector('.close2').addEventListener('click',
		function(){
			document.querySelector('.modal2').style.display='none';
		});
	document.getElementById('cancelbtn2').addEventListener('click',
		function(){
			document.querySelector('.modal2').style.display='none';
		});
	window.addEventListener('click',
		function(e){
			if (e.target== modal2) {
			document.querySelector('.modal2').style.display='none';
		}});
</script>
</body>

</html>


