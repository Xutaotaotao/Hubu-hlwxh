<?php get_header(); ?>
    	<div class="container" id="news">
    		        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post();?>
            <div class="single-post" id="post-<?php the_ID();?>">
                <h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-content ">
	                <p class="postmetadata text-center" ><!--文章数据-->
	                    作者:<?php  the_author(); ?>
	                   <button class="btn"><?php edit_post_link('Edit', ' &#124; ', ''); ?></button> 
	                 </p>
                    <?php the_content(); ?> 
                    <?php link_pages('<p>Pages:','</p>','number'); ?>  
                </div>
            </div>
        <?php endwhile; ?>
        <div class="row">
        	<div class="col-md-12">
        		<div class="navigation text-center">
              <span>上一篇：<?php previous_post_link('%link') ?></span> 
              <span>下一篇：<?php next_post_link('%link') ?></span>
            </div>
        	</div>
        </div>
            
        <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
    	</div>
    	<div>
    		<nav class="navbar navbar-default navbar-fixed-bottom" id="single-footer">
  			<div class="container">
				<p class="text-center">Copyright<span>©</span>湖北大学互联网协会 &nbsp; All Rights Reserved.</p>
  			</div>
		</nav>
    	</div>
    	

  
    <!--页脚结束-->
<?php get_footer(); ?>
