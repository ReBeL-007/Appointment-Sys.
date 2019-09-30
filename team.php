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
<!--team -->
    <div class="about-w3layouts" id="team">
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
        <?php require_once "footer.php";?>