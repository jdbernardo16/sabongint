<?php
/* Template Name: Privacy Policy */
get_header();?>
<?php if( have_posts() ): while( have_posts() ): the_post();?>

	

<?php endwhile; else: endif;?>
<div class="pn_frame1">
	<div class="frm-cntnr width--70">
		<div class="privacy-title animate-up">
			<p><?php the_title();?></p>
		</div>
		<div class="privacy-desc">
			<?php the_content();?>
		</div>
		
	</div>
</div>

<?php get_footer();?>