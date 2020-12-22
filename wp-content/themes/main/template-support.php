<?php
/* Template Name: Support */
get_header();?>

<section class="support_frame1">
	<div class="blob" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob5.svg');"></div>
	<div class="blob1" style="background-image: url('<?php bloginfo('template_url'); ?>/images/blob4.svg');"></div>
	<?php $support = get_field('support');?>
	<div class="frm-cntnr width--80">
		<div class="frm-title">
			<h1><b class="green"><?php echo $support['title']; ?></b></h1>
		</div>
		<div class="chat_support">
			<div class="chat-icon" style="background-image: url('<?php bloginfo('template_url'); ?>/images/chat3.svg');"></div>
			<div class="chat-calendar" style="background-image: url('<?php bloginfo('template_url'); ?>/images/calendar.svg');"></div>
		</div>
		<div class="text-hldr">
			<p><?php echo $support['description_1']; ?></p>
		</div>
		<div class="female-chat">
			<div class="chat-female" style="background-image: url('<?php bloginfo('template_url'); ?>/images/chat.svg');"></div>
		</div>

		<div class="text-hldr">
			<p><?php echo $support['description_2']; ?></p>
		</div>
	</div>
</section>

<?php get_footer();?>