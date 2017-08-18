<?php 
/*
Template Name:blog
*/
 ?>
 <?php get_header(); ?>
  <div class="blog">
  	<?php 
  	$cats = get_the_category(array('blogs'));
  	foreach ($cats as $cats ) {
  		query_posts('showposts=10&cat='.$cat->cat_ID);
  	}
  	 ?>
<h3><?php echo $cat->cat_name; ?></h3>
<ul>
	<?php while(have_posts()) : the_post();?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
		</li>
		<?php wp_reset_query(); ?>
	<?php endwhile; ?>
</ul>
  </div>
    <div>
    	<nav class="navbar navbar-default navbar-fixed-bottom" id="single-footer">
  			<div class="container">
				<p class="text-center">Copyright<span>©</span>湖北大学互联网协会 &nbsp; All Rights Reserved.</p>
  			</div>
		</nav>
    </div>
    <?php get_footer(); ?>