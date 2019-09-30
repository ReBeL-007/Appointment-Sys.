<?php 
    @session_start();
    if((!isset($_SESSION['patient_username']) || empty($_SESSION['patient_username'])) && (!isset($_SESSION['doctor_username']) || empty($_SESSION['doctor_username']))){
        header('location:index.php?msg=1');
        }
    
    require_once "header.php"; ?>



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
    <?php require_once "footer.php";?>