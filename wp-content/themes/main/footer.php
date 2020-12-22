<footer>
	<div class="ftr_hldr">
		<div class="inlineBlock-parent">
			<div class="banner-cntnr">
				<div class="logo-cntnr">
					<div class="logo" style="background-image: url('<?php bloginfo('template_url'); ?>/images/logo.png');"></div>
				</div>
				<div class="banner-text">
					<h3><b class="red">Sabong</b> International</h3>
				</div>
				<div class="privacy inlineBlock-parent">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'privacy',
						)
					);
				?><p>|</p><?php
					wp_nav_menu(
						array(
							'theme_location' => 'terms',
						)
					);
				?>
				</div>
			</div
			><div class="quick-links">
				<div class="ftr-title">
					<p>Quick Link</p>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile-menu',
						)
					);
				?>
			</div
			><div class="social-hldr">
				<div class="ftr-title">
					<p>Connect With Us</p>
				</div>
				<a href="">
				<div class="social-link inlineBlock-parent">
					<i class="fab fa-facebook-square"></i><p>Sabong International</p>
				</div>
				</a>
				<a href="">
				<div class="social-link inlineBlock-parent">
					<i class="fab fa-twitter-square"></i><p>Sabong International</p>
				</div>
				</a>
				<a href="">
				<div class="social-link inlineBlock-parent">
					<i class="fab fa-instagram"></i><p>Sabong International</p>
				</div>
				</a>
			</div>
		</div>
	</div>
	<div class="bottom">
		<p>© Copyright 2020 Sabong International | All Rights Reserved</p>
	</div>
	
</footer>
 <!-- Script -->
<?php wp_footer();?>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>


<!-- Vue -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

<!-- jQuery Zoom -->

   <!-- <script src="https://cdn.rawgit.com/jackmoore/zoom/master/jquery.zoom.min.js"></script>-->



<!-- Validate -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<!-- StickyFloat -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfloat/7.5.0/stickyfloat.js"></script>

<!-- Slick -->
<script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>


<!-- Remodal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.6/remodal.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<!-- Scrollify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.5/jquery.scrollify.min.js"></script>    

<!-- TweenMax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ModifiersPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>

<!-- ScrollMagic -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d0c0ed665a9655b"></script>


<!-- HoverIntent -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.8.1/jquery.hoverIntent.min.js"></script>

  <!-- GoogleMap -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsZhlAVfe9K80UZJvHRTBmMmsXpD9ocqo"></script>



<!-- Light Gallery -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/js/lightgallery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lg-video@1.2.2/dist/lg-video.min.js"></script>

<!-- Script --> 

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/app.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/animate.js' ?>"></script>

</body>
</html>