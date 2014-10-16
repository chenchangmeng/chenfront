<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweet</h4>
							<div id="tweet" class="twitter" data-account-id="">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</p></li>
									<li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2014. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<?php echo HTML::script('vendor/jquery.js'); ?>
		<?php echo HTML::script('vendor/jquery.appear.js'); ?>
		<?php echo HTML::script('vendor/jquery.easing.js'); ?>
		<?php echo HTML::script('vendor/jquery.cookie.js'); ?>
		<?php echo HTML::script('vendor/bootstrap/js/bootstrap.js'); ?>
		<?php echo HTML::script('vendor/jquery.validate.js'); ?>
		<?php echo HTML::script('vendor/jquery.stellar.js'); ?>
		<?php echo HTML::script('vendor/jquery.knob.js'); ?>
		<?php echo HTML::script('vendor/jquery.gmap.js'); ?>
		<?php echo HTML::script('vendor/twitterjs/twitter.js'); ?>
		<?php echo HTML::script('vendor/isotope/jquery.isotope.js'); ?>
		<?php echo HTML::script('vendor/owl-carousel/owl.carousel.js'); ?>
		<?php echo HTML::script('vendor/jflickrfeed/jflickrfeed.js'); ?>
		<?php echo HTML::script('vendor/magnific-popup/magnific-popup.js'); ?>
		<?php echo HTML::script('vendor/mediaelement/mediaelement-and-player.js'); ?>
		
		<!-- Theme Initializer -->
		<?php echo HTML::script('js/theme.plugins.js'); ?>
		<?php echo HTML::script('js/theme.js'); ?>

		<!-- Current Page JS -->
		<?php echo HTML::script('vendor/circle-flip-slideshow/js/jquery.flipshow.js'); ?>
		<?php echo HTML::script('vendor/nivo-slider/jquery.nivo.slider.js'); ?>
		<?php echo HTML::script('js/views/view.home.js'); ?>
		
		<!-- Custom JS -->
		<?php echo HTML::script('js/custom.js'); ?>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>