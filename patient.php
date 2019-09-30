<?php
     @session_start();
    if(!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])){
        header('location:index.php?msg=1');
        }
	require_once 'header.php'; 

	// appointment validation 
     if(isset($_POST['appoint'])){
        
        $err=[];


        if(isset($_POST['pname']) && !empty($_POST['pname']) && trim($_POST['pname'])!=""){
            $appointment->set('pname',$_POST['pname']);
        }
        else{
        $err['pname']= "Enter name";
    }
    if(isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])!=""){
            $appointment->set('address',$_POST['address']);
        }
        else{
        $err['address']= "Enter address";
    }
    if(isset($_POST['age']) && !empty($_POST['age'])){
    		$appointment->set('age',$_POST['age']);
    	}
    	else{
    		$err['age']="Select age";
    	}
    	if(isset($_POST['gender']) && !empty($_POST['gender'])){
    		$appointment->set('gender',$_POST['gender']);
    	}
    	else{
    		$err['gender']="Select gender";
    	}
    if(isset($_POST['contact']) && !empty($_POST['contact']) && trim($_POST['contact'])!=""){
    		$appointment->set('contact',$_POST['contact']);
    	}
    	else{
    		$err['contact']="Enter contact";
    	}
    if(isset($_POST['date']) && !empty($_POST['date'])){
    		$appointment->set('date',$_POST['date']);
    	}
    	else{
    		$err['date']="Enter date";
    	}
    if(isset($_POST['doctor_id']) && !empty($_POST['doctor_id'])){
    		$appointment->set('doctor_id',$_POST['doctor_id']);
    	}
    	else{
    		$err['doctor_id']="Select doctor";
    	}
    if(isset($_POST['time']) && !empty($_POST['time'])){
    		$appointment->set('time',$_POST['time']);
    	}
    	else{
    		$err['time']="Select time";
    	}
    if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description'])!=""){
            $appointment->set('description',$_POST['description']);
        }

        if(count($err)== 0){
        	
        		$appointment->set('patient_id',$_SESSION['patient_id']);
        	
        		
      			$st=$appointment->create();
                //print_r($st);
    		}


    }

?>


    
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
    <!-- Banner bottom -->
    

<div class="bnr-btm-w3layouts" id="appoint">
		<div class="bnr-lft-agileits">
			<h2>Request An Appointment!</h2>
			<p class="para-agileits-w3layouts">Just make an appointment to get help from our experts</p>
			<h3 class="subheading-agileits-w3layouts">Our services</h3>
			<ul>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Root Canal</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Teeth Whitening</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Wisdom Teeth</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Crowns Bridges</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Cosmetic Dentis</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Dental Implants</li>
			</ul>
		</div>

		<!-- book an appointment -->
		<div class="contact-right-w3l">

			<h5 class="title-w3">Book Appointment </h5>
                 <?php if(isset($st) && $st > 0) { ?>
                                        <div class="alert alert-success"><?php echo "Appointment Successfull"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Appointment Failed"; ?></div>
                                        <?php } ?>
			<form role="form" action="" method="POST" id="appointment_form">
				<div class="input-w3ls w3ls-left">
					<input type="text" name="pname" placeholder="Patient Name" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['pname'])){
                                                            echo $err['pname'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="text" name="address" placeholder="Address" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['address'])){
                                                            echo $err['address'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="number" name="age" placeholder="your age" class="form-control" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['age'])){
                                                            echo $err['age'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					<select name="gender" class="form-control" required="">
						<option value="">--Gender--</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['gender'])){
                                                            echo $err['gender'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" name="contact" placeholder="Contact" required="">
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['contact'])){
                                                            echo $err['contact'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
                     
					<input id="datepicker" name="date" type="text" class="date" placeholder="Pick-up Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}" required="">
					    <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['date'])){
                                                            echo $err['date'];
                                                        }?>
                                                </label>
				</div>
				
				<div class="input-w3ls w3ls-left">
					<select name="doctor_id" id="doctor_id" class="form-control" required="">
						<option value="">select Doctor</option>
						<?php $doctors=$doctor->list();
                                                            
	                        foreach ($doctors as $d) { ?>
	                            <option value="<?php echo $d->id; ?>"><?php echo $d->name;?>
	                                    </option>
	                        <?php }?>

					</select>
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['doctor_id'])){
                                                            echo $err['doctor_id'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls w3ls-rght">
					<select name="time" id="time" class="form-control" required="">
						<option>select Timeslot</option>
					</select>
					<label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['time'])){
                                                            echo $err['time'];
                                                        }?>
                                                </label>
				</div>
				<div class="input-w3ls">
					<textarea name="description" placeholder="Description"></textarea>
				</div>
				<div class="input-w3ls">
					<input type="submit" name="appoint" value="Book Appointment">
				</div>

			</form>
		</div>
		
	</div>
    <!-- //Banner bottom -->
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
    <!-- <div class="features" id="features">
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
    </div> -->
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
    <!-- <div class="agileits-contact" id="contact">
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
    </div> -->
    <!-- //contact -->
	
<?php require_once 'footer.php'; ?>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#appointment_form').validate();
        })
    </script>