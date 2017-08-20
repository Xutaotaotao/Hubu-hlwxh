<?php get_header(); ?>
<div id="single">
    <div class="container">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();?>
        <div class="single-post" id="post-<?php the_ID();?>">
            <h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-content ">
                <p class="text-center">
                    <span class="badge">作者:</span>
                    <?php  the_author(); ?>
                    <span class="badge">发布日期：</span>
                    <?php the_time('Y-m-j');?>
                    <span><?php edit_post_link('编辑', ' &#124; ', ''); ?></span>
                </p>
                <?php the_content(); ?>
                <?php link_pages('<p>Pages:','</p>','number'); ?>
            </div>
        </div>
        <?php endwhile; ?>
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
<?php get_template_part('singlefooter'); ?>
<?php get_footer(); ?>