<?php
     @session_start();
    if(!isset($_SESSION['doctor_username']) || empty($_SESSION['doctor_username'])){
        header('location:index.php?msg=1');
        }
	require_once 'header.php'; 

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
    

<!-- <div class="bnr-btm-w3layouts" id="appoint">
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

		
	</div> -->
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


	<?php require_once 'footer.php'; ?>
