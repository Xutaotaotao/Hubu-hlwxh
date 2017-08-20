<?php 
/*
Template Name:News
*/
 ?>
<?php get_header(); ?>
<div id="page-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <h2 class="wow bounceInLeft">终于等到你！</h2>
                <h2 class="wow bounceInRight">快来了解互联网协会的最新资讯。</h2>
            </div>
            <?php if(have_posts() ): ?>
            <?php  while(have_posts()):the_post();?>
            <div class="post col-sm-6 col-md-4 wow rollIn" id="post-<?php the_ID();?>">
                <h2 class="text-center">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="thumbnail">
                    <?php if(has_post_thumbnail()){
                       echo '<a href="'.get_permalink().'" title="阅读全文">';  
                       the_post_thumbnail('thumbnail');  
                       echo '</a>';  
                        } ?>
                    <?php the_excerpt(); ?>
                    <!--文章数据-->
                    <p>
                        <span class="badge">作者:</span>
                        <?php  the_author(); ?>
                    </p>
                    <p>
                        <span class="badge">发布日期：</span>
                        <?php the_time('Y-m-j');?>
                    </p>
                    <p>
                        <button class="btn btn-info" onclick="window.location.href='<?php the_permalink(); ?>'"> 阅读全文</button>
                        <span><?php edit_post_link('编辑', ' &#124; ', ''); ?></span>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="post-nav">
        <!--文章导航-->
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <p class="text-center">
                <span>
                    <?php posts_nav_link('&nbsp;','上一页','下一页'); ?>
                </span>
            </p>
        </nav>
    </div>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
</div>
<?php get_template_part('singlefooter'); ?>
<?php get_footer(); ?>