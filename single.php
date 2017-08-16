<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<h3>
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<p><?php the_time('Y年n月j日') ?></p>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part(the_content());
		endwhile;
		?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
