<?php 
/*
Template Name:协会相册
*/
 ?><?php 
get_header(); 
?>
<section id="gallery-bg">
    <div class="gallery-bg-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-text">
                        <h2 class="wow animated zoomInDown">美好的瞬间需要用照片来定格</h2>
                        <p class="wow animated zoomInUp">有你在的每一天都会更加美好</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="page-gallery">
    <div class="container">
        <?php 
        if(have_posts()) :
         ?>
        <?php 
        while(have_posts()) : the_post();
        ?>
        <div class="single-post" id="post-<?php the_ID();?>">
            <div class="post-content ">
                <?php 
                the_content(); 
                ?>
                <?php
                 link_pages('<p>Pages:','</p>','number');
                ?>
            </div>
        </div>
        <?php 
        endwhile; 
        ?>
        <?php else : ?>
        <h2>Not Found</h2>
        <?php endif; ?>
    </div>
</div>
<!--页脚-->
<footer id="wx-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright<span>©</span>湖北大学互联网协会.All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<?php 
get_footer(); 
?>