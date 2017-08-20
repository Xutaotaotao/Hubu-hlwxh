<?php 
/*
Template Name:前端导航
*/
 ?>
<?php get_header(); ?>
<!--前端导航-->
<!--前端导航背景-->
<section id="frontEnd-bg">
    <div class="frontEnd-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="source-text">
                        <h2 class="wow animated rotateInDownLeft">欢迎来到前端导航页</h2>
                        <p class="wow animated rotateInUpLeft">给你一些实用有趣的工具和网站。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--前端导航背景结束-->
<!--侧边导航-->
<section id="front-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2 text-center">
                <ul class="nav nav-pills nav-stacked text-center" role="tablist">
                    <li role="presentation"><a href="#basic" aria-controls="profile" role="tab" data-toggle="tab">基础教程</a></li>
                    <li role="presentation"><a href="#editor" aria-controls="profile" role="tab" data-toggle="tab">编辑器</a></li>
                    <li role="presentation"><a href="#ui" aria-controls="profile" role="tab" data-toggle="tab">UI框架</a></li>
                    <li role="presentation"><a href="#js" aria-controls="profile" role="tab" data-toggle="tab">JS框架</a></li>
                    <li role="presentation"><a href="#package" aria-controls="profile" role="tab" data-toggle="tab">插件</a></li>
                    <li role="presentation"><a href="#build" aria-controls="profile" role="tab" data-toggle="tab">构建工具</a></li>
                    <li role="presentation"><a href="#developer" aria-controls="profile" role="tab" data-toggle="tab">开发社区</a></li>
                </ul>
            </div>
            <div class="col-md-10 text-center">
                <div class="tab-content">
                    <div class="tab-pane active" id="basic">
                        <div class="col-md-3">
                            <a target="_blank" href="http://www.w3school.com.cn">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/W3School.png" alt="Image">
                                        <span>W3C教程</span>
                                    </div>
                                    <div class="front-logo-text">基础教程，涵盖HTML,CSS，JavaScript的基础知识</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://www.runoob.com">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/cainiao.jpg" alt="Image">
                                        <span>菜鸟教程</span>
                                    </div>
                                    <div class="front-logo-text">与W3C教程类似，但是内容更加丰富一些</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://css.doyoe.com/?spm=5176.100239.blogcont71256.25.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/css.jpg" alt="Image">
                                        <span>CSS参考手册</span>
                                    </div>
                                    <div class="front-logo-text">web前端开发参考手册系列</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://www.liaoxuefeng.com/">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/liao.jpg" alt="Image">
                                        <span>廖雪峰前端教程</span>
                                    </div>
                                    <div class="front-logo-text">大牛的教程你值得拥有</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://javascript.ruanyifeng.com/?spm=5176.100239.blogcont71256.29.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/ruan.jpg" alt="Image">
                                        <span>js标准参考教程</span>
                                    </div>
                                    <div class="front-logo-text">此教程为阮一峰编写，阮一峰的博客那也是相当精彩的</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://www.css88.com/jqapi-1.9/?spm=5176.100239.blogcont71256.34.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/J.jpg" alt="Image">
                                        <span>jQuery API 中文文档</span>
                                    </div>
                                    <div class="front-logo-text">适用于jQuery1.0-jQuery3.1</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://wiki.jikexueyuan.com/project/es6/?spm=5176.100239.blogcont71256.37.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/ECMA.jpg" alt="Image">
                                        <span>ECMAScript6 入门</span>
                                    </div>
                                    <div class="front-logo-text">可当作参考手册，查寻新增的语法点</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="editor">
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/webstorm-favicon.png" alt="Image">
                                        <span>WebStorm</span>
                                    </div>
                                    <div class="front-logo-text">真的很好用，已经推出学生免费版</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/sublime-favicon.png" alt="Image">
                                        <span>SublimeText</span>
                                    </div>
                                    <div class="front-logo-text">轻量级编辑器，但是有很多扩展插件，提高开发效率</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/atom.png" alt="Image">
                                        <span>Atom</span>
                                    </div>
                                    <div class="front-logo-text"> A hackable text editor for the 21st Century.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/vscode.jpg" alt="Image">
                                        <span>VScode</span>
                                    </div>
                                    <div class="front-logo-text">Code editing. Redefined.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/hb.png" alt="Image">
                                        <span>HBuilder</span>
                                    </div>
                                    <div class="front-logo-text">适合国人用的web开发神器</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="ui">
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/bootstrap-favicon.png" alt="Image">
                                        <span>Bootstrap</span>
                                    </div>
                                    <div class="front-logo-text">最受欢迎的 HTML、CSS 和 JS 框架</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/Ionic.jpg" alt="Image">
                                        <span>Ionic</span>
                                    </div>
                                    <div class="front-logo-text">一款接近原生的Html5移动App开发框架</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/Foundation.jpg" alt="Image">
                                        <span>Foundation</span>
                                    </div>
                                    <div class="front-logo-text">Foundation 中文网 迄今为止最好的响应式前端框架</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/FrozenUI.jpg" alt="Image">
                                        <span>FrozenUI</span>
                                    </div>
                                    <div class="front-logo-text">移动端服务的前端框架FrozenUI - 专注于移动web的UI框架</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/AntDesign.jpg" alt="Image">
                                        <span>AntDesign</span>
                                    </div>
                                    <div class="front-logo-text">与react配合的UI框架</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://amazeui.org/">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/amazeui.png" alt="Image">
                                        <span>Amaze UI</span>
                                    </div>
                                    <div class="front-logo-text">中国首个开源 HTML5 跨屏前端框架</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="js">
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/react-favicon.png" alt="Image">
                                        <span>ReactJs</span>
                                    </div>
                                    <div class="front-logo-text">用于构建用户界面的JavaScript库</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/angular.png" alt="Image">
                                        <span>AngularJs</span>
                                    </div>
                                    <div class="front-logo-text">
                                        一套框架，多种平台 移动端 & 桌面端</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/vue-favicon.png" alt="Image">
                                        <span>Vue.js</span>
                                    </div>
                                    <div class="front-logo-text">渐进式 JavaScript 框架 </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/Backbone.jpg" alt="Image">
                                        <span>Backbone.js</span>
                                    </div>
                                    <div class="front-logo-text">Backbone.js为复杂WEB应用程序提供结构</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/rxjs-favicon.png" alt="Image">
                                        <span>RxJs</span>
                                    </div>
                                    <div class="front-logo-text">提供强大的数据流组合的reactive编程库</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="package">
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/nolimits4web/Swiper?spm=5176.100239.blogcont71256.106.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/swiper.jpg" alt="Image">
                                        <span>Swiper</span>
                                    </div>
                                    <div class="front-logo-text">用于实现浏览器上的滑动切换效果，支持硬件加速</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/cubiq/iscroll?spm=5176.100239.blogcont71256.125.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/iscrool.jpg" alt="Image">
                                        <span>iscroll</span>
                                    </div>
                                    <div class="front-logo-text"> 高性能的滚动(scroll)处理库，功能强大，</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/totorojs/totoro?spm=5176.100239.blogcont71256.41.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/totoro.jpg" alt="Image">
                                        <span>totoro</span>
                                    </div>
                                    <div class="front-logo-text">稳定的跨浏览器测试工具</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/Mango/slideout?spm=5176.100239.blogcont71256.144.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/slideout.jpg" alt="Image">
                                        <span>slideout</span>
                                    </div>
                                    <div class="front-logo-text">一个非常美观的侧滑菜单</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/maciejczyzewski/hyhyhy?spm=5176.100239.blogcont71256.102.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/hyhyhy.jpg" alt="Image">
                                        <span>hyhyhy</span>
                                    </div>
                                    <div class="front-logo-text">用于创建 基于 HTML5 的 演示文稿</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/ecomfe/echarts?spm=5176.100239.blogcont71256.111.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/echarts.jpg" alt="Image">
                                        <span>echarts</span>
                                    </div>
                                    <div class="front-logo-text">企业级图表库，百度开发</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/Voog/wysihtml?spm=5176.100239.blogcont71256.114.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/wysihtml.jpg" alt="Image">
                                        <span>wysihtml</span>
                                    </div>
                                    <div class="front-logo-text">富文本编辑器，适用于现代浏览器</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="build">
                        <div class="col-md-3">
                            <a target="_blank" href="https://gruntjs.com/">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/grunt.jpg" alt="Image">
                                        <span>Grunt</span>
                                    </div>
                                    <div class="front-logo-text">JavaScript世界的构建工具</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://www.gulpjs.com.cn/?spm=5176.100239.blogcont71256.198.tjoYI2">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/gulp.jpg" alt="Image">
                                        <span>Gulp</span>
                                    </div>
                                    <div class="front-logo-text">基于流的自动化构建工具</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://webpack.github.io">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/webpack.jpg" alt="Image">
                                        <span>Webpack</span>
                                    </div>
                                    <div class="front-logo-text">一款模块加载器兼打包工具</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://requirejs.org">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/requirejs.jpg" alt="Image">
                                        <span>RequireJS</span>
                                    </div>
                                    <div class="front-logo-text">它非常适合在浏览器中使用，但它也可以用在其他脚本环境</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="developer">
                        <div class="col-md-3">
                            <a target="_blank" href="https://juejin.im/">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/gold-favicon.png" alt="Image">
                                        <span>掘金</span>
                                    </div>
                                    <div class="front-logo-text">只有高手分享的中文技术社区</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://stackoverflow.com">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/stackoverflow-favicon.png" alt="Image">
                                        <span>Stack Overflow </span>
                                    </div>
                                    <div class="front-logo-text">编程相关的IT技术问答网站</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://github.com/">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/github-favicon.png" alt="Image">
                                        <span>GitHub</span>
                                    </div>
                                    <div class="front-logo-text">面向开源及私有软件项目的git托管平台</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://segmentfault.com">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/segmentfault-favicon.png" alt="Image">
                                        <span>SegmentFault</span>
                                    </div>
                                    <div class="front-logo-text">一个专注于解决编程问题，提高开发技能的社区。</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://www.v2ex.com">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/v2ex-favicon.png" alt="Image">
                                        <span>V2EX</span>
                                    </div>
                                    <div class="front-logo-text">一个关于分享和探索的地方</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://www.smashingmagazine.com">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/smashingmagazine-favicon.png" alt="Image">
                                        <span>Smashingmagazine</span>
                                    </div>
                                    <div class="front-logo-text">一个web技术类的博客杂志站点</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="https://cnodejs.org">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/cnodejs-favicon.png" alt="Image">
                                        <span>CNode</span>
                                    </div>
                                    <div class="front-logo-text">Node.js专业中文社区</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a target="_blank" href="http://www.jstips.co/">
                                <div class="item">
                                    <div class="front-logo">
                                        <img src="<?php bloginfo('template_url'); ?>/icon/jstips-favicon.png" alt="Image">
                                        <span>JS Tips</span>
                                    </div>
                                    <div class="front-logo-text">每天推出一个JS技巧的网站</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--侧边导航结束-->
<!--前端导航结束-->
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
<!--页脚结束-->
<?php get_footer(); ?>