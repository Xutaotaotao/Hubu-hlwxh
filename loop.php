<!-- 最近动态 -->
<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUpBig">
                <h2>最近动态</h2>
            </div>
            <?php 
            query_posts("showposts=3&category_name='news'");
            ?>
             <?php if(have_posts()) : ?>
             <?php while(have_posts()) : the_post();?>
        <div class="news-post col-md-4 wow rollIn" id="post-<?php the_ID();?>">
            <h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="thumbnail"">
            <div class="post-img text-center ">
                <?php if(has_post_thumbnail()){
                    echo '<a href="'.get_permalink().'" title="阅读全文">';  
                    the_post_thumbnail('Medium');  
                    echo '</a>';  
                } ?>
            </div>
                <?php the_excerpt(); ?>
                <?php link_pages('<p>Pages:','</p>','number'); ?>
                <p class="text-center">
                    <span class="badge">作者:</span>
                    <?php  the_author(); ?>
                    <span class="badge">发布日期：</span>
                    <?php the_time('Y-m-j');?>
                    <span><?php edit_post_link('编辑', ' &#124; ', ''); ?></span>
                </p>
                  <p>
                        <button class="btn btn-info" onclick="window.location.href='<?php the_permalink(); ?>'"> 阅读全文</button>
                        <span><?php edit_post_link('编辑', ' &#124; ', ''); ?></span>
                    </p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <h2>Not Found</h2>
        <?php endif; ?>
        </div>
    </div>
</section>
<!-- 最近动态结束 -->