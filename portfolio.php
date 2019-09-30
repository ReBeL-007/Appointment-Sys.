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
<!-- gallery -->
    <div class="gallery-w3layouts" id="portfolio">
        <div class="container">
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


    <?php require_once "footer.php"; ?>
