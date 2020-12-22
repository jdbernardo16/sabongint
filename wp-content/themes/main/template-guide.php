<?php
/* Template Name: Guide */
get_header();?>



<?php $banner = get_field('banner'); if( $banner ): ?>
<div id="top" class="guide_frame1">
	<div class="banner" style="background-image: url('<?php echo esc_url( $banner['background'] ); ?>');"></div>
	<div class="gradient"></div>
	<div class="frm-text">
		<div class="frm-title">
			<h1><?php echo $banner['title']; ?></h1>
		</div>
		<div class="frm-desc">
			<p><?php echo $banner['description']; ?></p>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="guide_frame2">
	<div class="blob" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob3.svg');"></div>
	<div id="tabs" class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="sidenav_hldr">
				<div class="sidenav_card">
					<div class="guide-title">
						<p>Guide Menu:</p>
					</div>
					<?php if( have_rows('guide') ): ?>
					<?php while( have_rows('guide') ): the_row(); 

					// vars
					$title = get_sub_field('guide_title');
					// $desc = get_sub_field('guide_description');

					?>
					<div class="nav-link" @click="activetab = <?php echo get_row_index(); ?>" v-bind:class="{'active':activetab == <?php echo get_row_index(); ?>}">
						<a><?php echo $title; ?></a>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div
			><div class="content-container">
				<?php if( have_rows('guide') ): ?>
				<?php while( have_rows('guide') ): the_row(); 

				// vars
				$title = get_sub_field('guide_title');
				$desc = get_sub_field('guide_description');

				?>
				<transition name="slide-fade">
				<div v-if="activetab == <?php echo get_row_index(); ?>" class="content-hldr">
					<div class="content-title">
						<h3><?php echo $title; ?></h3>
					</div>
					<?php echo $desc; ?>
				</div>
				</transition>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="back-top">
			<a href="#top">
				<i class="fas fa-arrow-circle-up"></i>
			</a>
		</div>
	</div>
</div>

<?php get_footer();?>

