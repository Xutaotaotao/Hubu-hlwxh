<?php get_header(); ?>
<div id="single">
    <div class="container" >
                    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post();?>
            <div class="single-post" id="post-<?php the_ID();?>">
                <h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-content ">
                    
                    <p class="text-center">
                        <span class="badge">作者:</span><?php  the_author(); ?> 
                        <span class="badge">发布日期：</span> <?php the_time('Y-m-j');?>
                        <span ><?php edit_post_link('Edit', ' &#124; ', ''); ?></span> 
                    </p>
                    <?php the_content(); ?> 
                    <?php link_pages('<p>Pages:','</p>','number'); ?>  
                </div>
            </div>
        <?php endwhile; ?>
        <div class="single-guide">
             <nav class="navbar navbar-default navbar-fixed-bottom">
                <div class="container">
                     <p class="text-center"><button class="btn btn_default"> 上一篇：</button>
                        <?php previous_post_link('%link') ?><button class="btn btn_default">下一篇：</button><?php next_post_link('%link') ?></p>
                </div>
            </nav>
        </div>   
        <?php else : ?>
            <h2>Not Found</h2>
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
