<?php get_header();?>


<section class="news_frame1">
	<div class="blob" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob4.svg');"></div>
	<div class="frm-cntnr width--80">
		<div class="inlineBlock-parent">
			<div class="recent-hldr">
				<div class="recent-news">
					<?php if( get_field('banner') ): ?>
					<div class="recent-news-image">
						<div class="image" style="background-image: url('<?php the_field('banner'); ?>');"></div>
					</div>
					<?php endif; ?>
					<div class="recent-news-title">
						<h2><?php the_title();?></h2>
					</div>
					<div class="recent-news-date">
						<p><?php the_time('m/j/y g:i A') ?></p></p>
					</div>
					<div class="recent-news-desc">
						<?php if( have_posts() ): while( have_posts() ): the_post();?>

							<?php the_content();?>

						<?php endwhile; else: endif;?>
					</div>
				</div>
			</div
			><div class="latest-list-hldr">
				<div class="latest-card">
					<div class="latest-card-title">
						<h3>News & Events</h3>
						<div class="line"></div>
					</div>
					<div class="news-container">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 999,
						);
						$_posts = new WP_Query($args);
						?>

						<?php if($_posts->have_posts()):?>
						<?php while ($_posts->have_posts()): $_posts->the_post();?>
						<div class="news-hldr inlineBlock-parent">
							<div class="news-image">
								<?php if( get_field('banner') ): ?>
								<div class="image" style="background-image: url('<?php the_field('banner'); ?>');"></div>
								<?php endif; ?>
							</div
							><div class="news-details">
								<div class="news-title">
									<p class="restrict"><?php the_title();?></p>
								</div>
								<div class="read-more">
									<a href="<?php the_permalink();?>">Read More</a>
								</div>
							</div>
						</div>
						<?php endwhile;?>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>

