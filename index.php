<?php
get_header();
?>
<?php
get_template_part('staticpage');
?>
<?php
get_template_part('loop');
?>
<p class="text-center wow fadeInUpBig">
    <button class="btn btn-primary btn-lg" onclick="window.location.href='http://hlwxh.xutaotao.cn/category/news'">更多动态</button>
</p>
<!--主页页脚-->
<footer id="wx-footer">
    <div class="container">
        <div class="row">
            <div class="foot-left ">
                <div class="col-md-4">
                    <div class="col-xs-4">
                        <img src="<?php bloginfo('template_url');?>/img/qq-group.jpg" alt="QQ交流群">
                        <p class="text-center">QQ群:
                            <br>423186527</p>
                    </div>
                    <div class="col-xs-4">
                        <img src="<?php bloginfo('template_url');?>/img/qq.jpg" class="img-responsive" alt="官方QQ">
                        <p class="text-center">官方QQ：
                            <br>2284036801</p>
                    </div>
                    <div class="col-xs-4">
                        <img src="<?php bloginfo('template_url');?>/img/Wechat.jpg" alt="官方微信公众号">
                        <p class="text-center">微信公众号：
                            <br>网小蓝</p>
                    </div>
                </div>
            </div>
            <div class="footer-center">
                <div class="col-md-4">
                    <p>友情链接</p>
                    <ul>
                        <li><a href="https://github.com/">GitHub</a></li>
                        <li><a href="https://wordpress.org/">Wordpress</a></li>
                        <li><a href="http://www.hubu.edu.cn/">湖北大学</a></li>
                        <li><a href="http://csi.hubu.edu.cn/">湖北大学计算机与信息工程学院</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-right ">
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_url');?>/img/Hubu-hlwxh.jpg" alt="foot-log" class="img-circle">
                    <strong>湖北大学互联网协会</strong>
                    <p>成为最有趣的互联网团队</p>
                    <p>Copyright<span>©</span>湖北大学互联网协会.All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--主页页脚结束-->
<?php
get_footer();
?>