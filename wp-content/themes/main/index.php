<?php get_header();?>

<!-- <div class="loader">
	<div class="vertical-parent">
		<div class="vertical-align">
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
			<p>loading...</p>
		</div>
	</div>
</div> -->
<?php $frame1 = get_field('frame1'); if( $frame1 ): ?>
<section class="hm_frame1">
	<div class="background-cntnr">
		<div class="background" style="background-image: url('<?php echo esc_url( $frame1['background'] ); ?>');"></div>
		<div class="gradient"></div>
	</div>
	<div class="frm-cntnr">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="red_border">
					<div class="vertical-parent">
						<div class="vertical-align">
							<div class="frm-content">
								<div class="header-text">
									<h3><?php echo $frame1['header']; ?></h3>
								</div>
								<div class="main-text">
									<?php echo $frame1['title']; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="rooster" style="background-image: url('<?php echo esc_url( $frame1['rooster'] ); ?>');"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php $frame2 = get_field('frame2'); if( $frame2 ): ?>
<section class="hm_frame2">
	<div class="right-item">
		<div class="blob" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob2.svg');"></div>
	</div>
	<div class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="left-side">
				<div class="phone" style="background-image: url('<?php echo esc_url( $frame2['mobile_image'] ); ?>');"></div>
			</div
			><div class="right-side">
				<div class="text-hldr">
					<h1 class="red"><?php echo $frame2['header']; ?></h1>
				</div>
				<div class="text-cntnr">
					<p><?php echo $frame2['description']; ?></p>
				</div>	
				<div class="button-hldr">
					<a href="<?php echo esc_url( $frame2['guide_link'] ); ?>" class="button">Guide</a>
				</div>	
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php $frame3 = get_field('frame3'); if( $frame3 ): ?>
<section class="hm_frame3">
	<div class="frm-cntnr width--80">
		<div class="frm-title">
			<h1><?php echo $frame3['header']; ?></h1>
		</div>
		<div class="chat_support">
			<div class="chat-icon" style="background-image: url('<?php bloginfo('template_url'); ?>/images/chat3.svg');"></div>
			<div class="chat-calendar" style="background-image: url('<?php bloginfo('template_url'); ?>/images/calendar.svg');"></div>
		</div>
		<div class="text-hldr">
			<p><?php echo $frame3['description']; ?></p>
		</div>
		<div class="button-hldr">
			<a href="<?php echo esc_url( $frame2['support_link'] ); ?>" class="button">Support</a>
		</div>	
	</div>
</section>
<?php endif; ?>
<?php $frame4 = get_field('frame4'); if( $frame4 ): ?>
<section class="hm_frame4">
	<div class="blue-shape">
		<svg class="welcome-section-svg-5" width="80%" height="456px" viewBox="0 0 675 456">
			<defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-5"><stop stop-color="#00B1FF" offset="0%"></stop><stop stop-color="#007BDF" offset="100%"></stop></linearGradient></defs><g id="welcome-svg-5" transform="translate(-129.000000, -1180.000000)" fill="url(#linearGradient-5)"><path d="M483.532824,1551.31377 C577.344425,1551.31377 658.337852,1750.00922 776.864188,1419.1344 C895.390524,1088.25958 600.242233,1346.46715 382.060638,1217.02787 C163.879042,1087.5886 89.5030678,1322.45039 148.418795,1536.81668 C207.334523,1751.18297 389.721224,1551.31377 483.532824,1551.31377 Z" id="Oval5"></path></g>
		</svg>
	</div>

	<div class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="left-side">
				<div class="frm-title">
					<h1><?php echo $frame4['header']; ?></h1>
				</div>
				<div class="frm-desc">
					<p><?php echo $frame4['description']; ?></p>
				</div>
				<div class="button-hldr">
					<a href="category/news-events" class="button">View More</a>
				</div>
			</div
			><div class="right-side">
				<div class="inlineBlock-parent">
					<?php
					$args2 = array(
						'post_type' => 'post',
						'posts_per_page' => 2,
					);
					$_posts2 = new WP_Query($args2);
					?>

					<?php if($_posts2->have_posts()):?>
					<?php while ($_posts2->have_posts()): $_posts2->the_post();?><div class="news-card">
						<div class="image-hldr">
							<div class="image" style="background-image: url('<?php the_field('banner'); ?>');"></div>
						</div>
						<div class="title-hldr">
							<p><?php the_title();?></p>
						</div>
						<div class="read-more">
							<a href="<?php the_permalink();?>">Read More</a>
						</div>
					</div><?php endwhile;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php $frame5 = get_field('frame5'); ?>
<section class="hm_frame6">
	<div class="frm-cntnr width--80">
		<div class="frm-title">
			<h1><?php echo $frame5['header']; ?></h1>
		</div>
		<?php if( have_rows('partners') ): ?>
		<div class="partner-slider">
			<?php while( have_rows('partners') ): the_row(); 

			// vars
			$image = get_sub_field('partner_image');
			$link = get_sub_field('partner_link');

			?>
			<div class="logo-hldr">
				<a href="<?php echo $link; ?>" target="_blank">
					<div class="logo-img" style="background-image: url('<?php echo $image; ?>');"></div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php $frame6 = get_field('frame6'); if( $frame6 ): ?>
<section class="hm_frame5">
	<div class="background" style="background-image: url('<?php echo esc_url( $frame6['background'] ); ?>');"></div>
	<div class="gradient"></div>
	<div class="frm-cntnr width--80">
		<div class="rooster2" style="background-image: url('<?php echo esc_url( $frame6['rooster'] ); ?>');"></div>
		<!-- <div class="sabong" style="background-image: url('<?php bloginfo('template_url'); ?>/images/logo.png');"></div> -->
		<div class="inlineBlock-parent">
			<div class="left-side">
				<div class="frm-title">
					<h1><?php echo $frame6['header']; ?></h1>
				</div>
				<div class="frm-desc">
					<p><?php echo $frame6['description']; ?></p>
				</div>
			</div
			><div class="right-side">
				<div class="contact-card">
					<form id="contactForm" method="post">
						<div class="input-hldr">
							<input type="text" name="fullname" placeholder="Full Name" required>
						</div>
						<div class="input-hldr">
							<input type="text" name="address" placeholder="Address" required>
						</div>
						<div class="input-hldr">
							<input type="text" name="contact" placeholder="Contact Number" onkeydown="return ( event.ctrlKey || event.altKey 
				                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
				                    || (95<event.keyCode && event.keyCode<106)
				                    || (event.keyCode==8) || (event.keyCode==9) 
				                    || (event.keyCode>34 && event.keyCode<40) 
				                    || (event.keyCode==46) )" required>
						</div>
						<div class="input-hldr">
							<input type="text" name="email" placeholder="Email Address" required>
						</div>
						<div class="input-hldr">
							<textarea id="" name="messagedetails" placeholder="Message" required></textarea>
						</div>
						<div class="button-hldr" id="contactBtn">
							<button>Submit</button>
							<input type="hidden" name="postFlag" value="1">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer();?>

