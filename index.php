<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if (is_singular() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		} ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div><?php the_content(); ?></div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_footer(); ?>
	</body>
</html>


