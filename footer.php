
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
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker({ dateFormat: "yy-mm-dd", minDate: -0, maxDate: +6}).val();
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
	
<!-- get available doctors in selected date -->
 <script type="text/javascript">
		// $(selector).functionname();
		$(document).ready(function () {
			// alert("bmdolm");
			
			$('.date').change(function(){
				var date = $(this).val();
			        if (date!='') {
			        //call ajax
			        $.ajax({
			          
			          url : 'getdoctor.php',
			          data : {'date':date},
			          method : 'post',
			          success : function(response){
			          	$('#doctor_id').html('');
						$('#doctor_id').html(response);
			          console.log(response);
									}
								});
						}
							
					});
				});
	</script>

<!-- get timeslots of doctors -->
	<script type="text/javascript">
		// $(selector).functionname();
		$(document).ready(function () {
			// alert("bmdolm");
			$('.date').change(function(){
				var date= $(this).val();
			
			$('#doctor_id').change(function(){
				var doctor = $(this).val();
			        if (doctor!='') {
			        //call ajax
			        $.ajax({
			          
			          url : 'gettime.php',
			          data : {'doctor':doctor,'date':date},
			          method : 'post',
			          success : function(response){
			          	console.log(response);
			          	$('#time').html('');
						$('#time').html(response);
			          
									}
								});
						}
							
					});
				});
				});
	</script>

<!-- <script type="text/javascript">
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script> -->

</html>
