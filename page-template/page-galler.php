<?php 
/*
Template Name:相册
*/
 ?>
<?php 
get_header(); 
?>
<div id="single">
    <div class="container">
        <?php 
        if(have_posts()) :
         ?>
        <?php 
        while(have_posts()) : the_post();
        ?>
        <?php 
		echo [FinalTilesGallery id='1']
         ?>
        <?php 
        endwhile; 
        ?>
        <div class="single-guide">
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <p class="text-center">
                <span> 上一篇：</span>
                    <?php 
                    previous_post_link('%link','%title');
                     ?>
                <span>下一篇：</span>
                    <?php 
                    next_post_link('%link','%title');
                    ?>
                </p>
            </nav>
        </div>
        <?php else : ?>
        <h2>Not Found</h2>
        <?php endif; ?>
    </div>
</div>
<footer id="wx-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright<span>©</span>湖北大学互联网协会.All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!--页脚结束-->
<?php
 get_footer();
 ?>