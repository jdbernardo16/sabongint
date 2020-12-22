<?php
/* Template Name: Contact Us */
get_header();?>


<section class="cntct_frame1">
	<?php if( get_field('background') ): ?>
	<div class="background" style="background-image: url('<?php the_field('background'); ?>');"></div>
	<?php endif; ?>
	<div class="gradient"></div>
	<div class="frm-cntnr width--80">
		<?php if( get_field('rooster') ): ?>
		<div class="rooster2" style="background-image: url('<?php the_field('rooster'); ?>');"></div>
		<?php endif; ?>
		<div class="inlineBlock-parent">
			<div class="left-side">
				<div class="frm-title">
					<h1><?php the_field('title'); ?></h1>
				</div>
				<div class="frm-desc">
					<p><?php the_field('description'); ?></p>
				</div>
			</div
			><div class="right-side">
				<?php get_template_part('includes/form','inquiry');?>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>