<?php
/* Template Name: About Us */
get_header();?>
<?php $frame1 = get_field('frame1'); if( $frame1 ): ?>
<div class="abt_frame1">
	<div class="banner" style="background-image: url('<?php echo esc_url( $frame1['background'] ); ?>');"></div>
	<div class="gradient"></div>
	<div class="frm-content staggerup_hldr">
		<div class="sabong-logo staggerup" style="background-image: url('<?php echo esc_url( $frame1['logo'] ); ?>');"></div>
		<div class="frm-title staggerup">
			<h1><?php echo $frame1['header']; ?></h1>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $frame2 = get_field('frame2'); if( $frame2 ): ?>
<div class="abt_frame2">
	<div class="banner" style="background-image: url('<?php echo esc_url( $frame2['background'] ); ?>');"></div>
	<div class="gradient"></div>
	<div class="frm-content staggerup_hldr1">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="frm-title staggerup1">
					<h2><?php echo $frame2['title']; ?></h2>
				</div>
				<div class="frm-desc staggerup1">
					<p><?php echo $frame2['description']; ?></p>
				</div>
				<div class="rooster staggerup1" style="background-image: url('<?php bloginfo('template_url'); ?>/images/rooster.png');"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $frame3 = get_field('frame3'); if( $frame3 ): ?>
<div class="abt_frame3">
	<div class="blob" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob5.svg');"></div>
	<div class="blob second" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob4.svg');"></div>
	<div class="frm-cntnr width--80 staggerup_hldr2">
		<div class="frm-title staggerup2">
			<h2><?php echo $frame3['title']; ?></h2>
		</div>
		<div class="frm-desc staggerup2">
			<p><?php echo $frame3['description']; ?></p>
		</div>
		<div class="image-hldr staggerup2">
			<div class="image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/mob.svg');"></div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer();?>