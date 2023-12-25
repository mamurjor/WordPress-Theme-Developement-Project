	<!-- Footer Area -->
  <footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
									<?php 
									
									wp_nav_menu(
										array(
											'theme_location' => 'footer-one',
											'link_before' => '<i class="fa fa-caret-right" aria-hidden="true"></i>'
											
										)
									);
									?>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
									<?php 
									
									wp_nav_menu(
										array(
											'theme_location' => 'Footer-two',
											'link_before' => '<i class="fa fa-caret-right" aria-hidden="true"></i>'
											
										)
									);
									?>
										<!-- <ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>  <?php
								
								
								$myoption_Field=get_option('myunqiueidthemeoption');
									if(isset($myoption_Field['copyrighttest'])){
										echo $myoption_Field['copyrighttest'];
									}
									else{
										echo "Static Data Here";
									}
								
								
								?> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/easing.js"></script>
		<!-- Color JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

		<script>
			$(document).ready(function(){
				$("ul.sub-menu").addClass('dropdown');
			})
		</script>
    <?php wp_footer();?>
    </body>
</html>
