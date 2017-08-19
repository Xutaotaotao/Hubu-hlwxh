<?php 
/*
Template Name:News
*/
 ?>
<?php get_header(); ?>
<div id="page-news">
    <div class="container">
        <?php query_posts("category_name='news'");?>
        <?php if(have_posts() ): ?>
        <?php  while(have_posts()):the_post();?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="thumbnail">
            <?php if(has_post_thumbnail()){
                       echo '<a href="'.get_permalink().'" title="阅读全文">';  
                       the_post_thumbnail('thumbnail');  
                       echo '</a>';  
                        } ?>
            <?php the_excerpt(); ?>
            <p class="postmetadata">
                <!--文章数据-->
                <span>作者:<?php  the_author(); ?></span>
                <span>发布日期：<?php the_time(Y-m-d);?></span>
                <br>
                <button class="btn btn-primary" onclick="window.location.href='<?php the_permalink(); ?>'"> 阅读全文</button>
                <button class="btn">
                    <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </button>
            </p>
        </div>
        <?php endwhile; ?>
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>
        <?php else: ?>
        <h2>Not found</h2>
        <?php endif; ?>
    </div>
</div>
<div>
    <nav class="navbar navbar-default navbar-fixed-bottom" id="single-footer">
        <div class="container">
            <p class="text-center">Copyright<span>©</span>湖北大学互联网协会 &nbsp; All Rights Reserved.</p>
        </div>
    </nav>
</div>
<?php get_footer(); ?>