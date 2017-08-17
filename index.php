<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="徐涛焘">
    <meta name="copyright" content="湖北大学互联网协会">
    <meta name="keywords" content="湖北大学互联网协会,湖北大学，互联网协会">
    <meta name="description" content="湖北大学互联网协会">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" > 

    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" >
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <!-- CSS -->
    <link href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
</head>

<body>
    <!-- 导航 -->
    <header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url');?>"><?php bloginfo(name);?></a>
                </div>
                <?php wp_nav_menu( 
                array( 'menu' => 'mymenu', 
                       'container' => 'div',
                       'container_class' => 'collapse navbar-collapse',
                       'menu_class' => 'nav navbar-nav navbar-right',
                        'depth' => 1) );?>
            </div>
        </nav>
            
    </header>
    <!-- <header class="header" id="wx-header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">互联网协会</a>
                </div>
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="index.html ">首页</a>
                        </li>
                        <li>
                            <a href="frontEnd.html">前端导航</a>
                        </li>
                        <li>
                            <a href="source.html">资源下载</a>
                        </li>
                        <li>
                            <a href="">相册</a>
                        </li>
                        <li>
                            <a href="">博客</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->
    <!-- 导航结束 -->
    <!-- 首页背景-->
    <section id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(<?php bloginfo('template_url'); ?>/img/bg-1.jpg);"></div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInLeftBig">欢迎来互联网协会</h2>
                    <p class="animated fadeInRightBig">Welcome to the Internet Society of Hubu.</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(<?php bloginfo('template_url'); ?>/img/bg-2.jpg);"></div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInDownBig">技术 & 实践</h2>
                    <p class="animated fadeInUpBig">You can get skills and practice.</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(<?php bloginfo('template_url'); ?>/img/bg-3.jpg);"></div>
                <div class="carousel-caption">
                    <h2 class="animated rollIn">网络 + 应用</h2>
                    <p class="animated rotateInUpRight">Do something interesting on the internet.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 首页背景结束-->
    <!--关于我们-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center wow fadeInDownBig">关于我们</h2>
                </div>
                <div class="col-md-6 wow fadeInLeftBig">
                    <img src="<?php bloginfo('template_url'); ?>/img/about.jpg" alt="logo">
                </div>
                <div class="col-md-6 wow fadeInRightBig">
                    <p>湖北大学互联网应用协会，简称湖北大学互联网协会，成立于2005年，原隶属于湖北大学数学与计算机科学学院，现属于计算机与信息工程学院。 协会致力于服务同学，为同学解决困难，增强会员对计算机软件操作及互联网应用的能力，本协会为努力创建湖北大学的特色社团奋斗。
                    </p>
                    <p>我们因兴趣而生，我们为互联网技术而聚。协会秉承着“交流，服务，应用，创新”的宗旨，在校团委的引导下开展了一系列特色活动，旨 在推广互联网思维，传播互联网技术于师生之间。
                    </p>
                    <p>协会成立以来，不断开拓进取，建设了本协会的官方网站以及公众微信号,举行了很多的精品活动，开设了一些技术专题讲座以及培训， 为同学们增添和丰富了校园生活。我们坚信通过全体会员的不懈努力，互联网协会的明天一定会更加美好。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--关于我们结束-->
    <!--组织结构-->
    <section id="organization">
        <div class="organization">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center wow fadeInDownBig">组织结构</h2>
                    </div>
                    <diV class="col-md-4 ">
                        <ul>
                            <li>
                                <div class="image-hover effect-1">
                                    <div class="image-box">
                                        <img src="<?php bloginfo('template_url'); ?>/img/president.png" alt="会长">
                                        <h2>会长</h2>
                                    </div>
                                    <div class="text-desc">
                                        <h3>会长</h3>
                                        <p>会长负责做好社联和社团的关系纽带，正确引导协会发展，主管活动部和技术部。</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </diV>
                    <diV class="col-md-4 ">
                        <ul>
                            <li>
                                <div class="image-hover effect-1">
                                    <div class="image-box">
                                        <img src="<?php bloginfo('template_url'); ?>/img/activity.png" alt="活动部">
                                        <h2>活动部</h2>
                                    </div>
                                    <div class="text-desc">
                                        <h3>活动部</h3>
                                        <p>活动部主要负责协会各项活动的策划,包括活动背景，活动目的，活动形式，活动主题，活动时间、地点， 活动执行细则，活动工作分工，活动执行进度表，活动赞助拉取，活动经费预算等。
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </diV>
                    <diV class="col-md-4 ">
                        <ul>
                            <li>
                                <div class="image-hover effect-1">
                                    <div class="image-box">
                                        <img src="<?php bloginfo('template_url'); ?>/img/technical.png" alt="技术部">
                                        <h2>技术部</h2>
                                    </div>
                                    <div class="text-desc">
                                        <h3>技术部</h3>
                                        <p>技术部主要负责对会员技术能力的培训，同时自身也应该提升技术能力。技术部成员需要有较强的学习能力， 能够熟练使用各类软件，office以及Adobe的系列软件，具有基本的编写网页代码的能力。
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </diV>
                    <diV class="col-md-4 ">
                        <ul>
                            <li>
                                <div class="image-hover effect-1">
                                    <div class="image-box">
                                        <img src="<?php bloginfo('template_url'); ?>/img/vice-president.png" alt="副会长">
                                        <h2>副会长</h2>
                                    </div>
                                    <div class="text-desc">
                                        <h3>副会长</h3>
                                        <P>副会长负责协助会长完成协会的日常工作，协调好各部门的工作，主管秘书部、宣传部。</P>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </diV>
                    <diV class="col-md-4 ">
                        <ul>
                            <li>
                                <div class="image-hover effect-1">
                                    <div class="image-box">
                                        <img src="<?php bloginfo('template_url'); ?>/img/secretary.png" alt="秘书部">
                                        <h2>秘书部</h2>
                                    </div>
                                    <div class="text-desc">
                                        <h3>秘书部</h3>
                                        <p>秘书部主要负责对协会各部门的工作协调安排。组织人员分配与调动，负责各部门的工作检查与评估，整理协会会员档案， 整理各部工作流程并打印存档，还要有效联系各部门，沟通部门间的工作。
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </diV>
                    <diV class="col-md-4 ">
                        <ul>
                            <li>
                                <div class="image-hover effect-1">
                                    <div class="image-box">
                                        <img src="<?php bloginfo('template_url'); ?>/img/propaganda.png" alt="宣传部">
                                        <h2>宣传部</h2>
                                    </div>
                                    <div class="text-desc">
                                        <h3>宣传部</h3>
                                        <p>宣传部主要负责对活动的宣传，通过线上如QQ,微博，公众微信平台以及各类线上宣传途径在活动前期，中期， 后期对活动进行实时的更新和报道。线下宣传主要通过设计活动宣传海报，进行摆点宣传。
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </diV>
                </div>
            </div>
        </div>
    </section>
    <!--组织结构结束-->
    <!--技能-->
    <section id="skill">
        <div class="skill">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInDownBig">
                        <h2>我们涉及的技术</h2>
                    </div>
                    <div class="row text-center wow fadeInRightBig">
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <div class="image-hover effect-2">
                                        <div class="image-box">
                                            <img src="<?php bloginfo('template_url'); ?>/img/web.png" alt="WEB前端开发">
                                            <h2>WEB前端开发</h2>
                                        </div>
                                        <div class="text-desc">
                                            <h3>WEB前端开发</h3>
                                            <p>WEB前端开发方向主要涉及网页制作技术培训,研究和学习HTML，CSS，JavaScript以及一些热门的前端框架。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <div class="image-hover effect-2">
                                        <div class="image-box">
                                            <img src="<?php bloginfo('template_url'); ?>/img/adobe.png" alt="多媒体软件应用">
                                            <h2>多媒体软件应用</h2>
                                        </div>
                                        <div class="text-desc">
                                            <h3>多媒体软件应用</h3>
                                            <p>多媒体视频制作方向主要致力于协会各种活动视频制作及会员的视频制作培训，主要为Premiere、AfterEffects的应用。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <div class="image-hover effect-2">
                                        <div class="image-box">
                                            <img src="<?php bloginfo('template_url'); ?>/img/office.png" alt="Office应用">
                                            <h2>Office应用</h2>
                                        </div>
                                        <div class="text-desc">
                                            <h3>office应用</h3>
                                            <p>Office办公软件应用方向主要致力于PowerPoint设计、Word应用论文排版以及其应用方法。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row text-center wow fadeInLeftBig">
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <div class="image-hover effect-2">
                                        <div class="image-box">
                                            <img src="<?php bloginfo('template_url'); ?>/img/weixin.png" alt="微信公众平台的运营维护">
                                            <h2>微信公众平台的运营维护</h2>
                                        </div>
                                        <div class="text-desc">
                                            <h3>微信公众平台的运营维护</h3>
                                            <p>微信公众号运营维护主要涉及公众号的后台开发和微信图文的制作以及H5页面的制作。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <div class="image-hover effect-2">
                                        <div class="image-box">
                                            <img src="<?php bloginfo('template_url'); ?>/img/system.png" alt="操作系统的安装和维护">
                                            <h2>操作系统的安装和维护</h2>
                                        </div>
                                        <div class="text-desc">
                                            <h3>操作系统的安装和维护</h3>
                                            <p>教授常用系统安装方法，如：安装WinXP、Win7 、Win10、Deepin、Android、双系统的安装等，并解决常见电脑问题。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <div class="image-hover effect-2">
                                        <div class="image-box">
                                            <img src="<?php bloginfo('template_url'); ?>/img/net.png" alt="网络设备维护">
                                            <h2>网络设备维护</h2>
                                        </div>
                                        <div class="text-desc">
                                            <h3>网络设备维护</h3>
                                            <p>网络设备维护主要涉及如何用命令行配置交换机和路由器，用模拟器来模拟网络设备的安装和维护。</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--技能结束-->
    <!--软件-->
    <section id="software">
        <div class="software">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="wow fadeInDownBig">我们的实力</h2>
                    </div>
                    <div class="col-md-6 wow fadeInLeftBig">
                        <p>HTML+CSS</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                80%
                            </div>
                        </div>
                        <p>JavaScript</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                50%
                            </div>
                        </div>
                        <p>Photoshop</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                80%
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRightBig">
                        <p>AfterEffect</p>
                        <div class="progress ">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>
                        <p>Office</p>
                        <div class="progress ">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                70%
                            </div>
                        </div>
                        <p>Premiere</p>
                        <div class="progress ">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--软件结束-->
    <section id="news">
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUpBig">
                        <h2>最近动态</h2>
                    </div>
                    <div class="col-sm-6 col-md-4 wow rollIn">
                        <div class="thumbnail">
                            <img src="#" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow rollIn">
                        <div class="thumbnail">
                            <img src="#" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow rollIn">
                        <div class="thumbnail">
                            <img src="#" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--页脚-->
    <footer id="wx-footer">
        <div class="container wow fadeInUpBig">
            <div class="row">
                <div class="foot-left ">
                    <div class="col-md-4">
                        <div class="col-xs-4">
                            <img src="<?php bloginfo('template_url'); ?>/img/qq-group.jpg" alt="QQ交流群">
                            <p class="text-center">QQ群:
                                <br>423186527</p>
                        </div>
                        <div class="col-xs-4">
                            <img src="<?php bloginfo('template_url'); ?>/img/qq.jpg" class="img-responsive" alt="官方QQ">
                            <p class="text-center">官方QQ：
                                <br>2284036801</p>
                        </div>
                        <div class="col-xs-4">
                            <img src="<?php bloginfo('template_url'); ?>/img/Wechat.jpg" alt="官方微信公众号">
                            <p class="text-center">微信公众号：
                                <br>网小蓝</p>
                        </div>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="col-md-4">
                        <p>友情链接</p>
                        <ul>
                            <li><a href="">官网旧版</a></li>
                            <li><a href="">湖北大学</a></li>
                            <li><a href="">湖北大学学生社团联合会</a></li>
                            <li><a href="">湖北大学计算机与信息工程学院</a></li>
                            <li><a href="">湖北大学计算机与信息工程学院学生社团联合会</a></li>
                            <li><a href="">官网维护者博客</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-right ">
                    <div class="col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/img/Hubu-hlwxh.jpg" alt="foot-log" class="img-circle">
                        <strong>湖北大学互联网协会</strong>
                        <p>成为最有趣的互联网团队</p>
                        <p>Copyright<span>©</span>湖北大学互联网协会.All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--页脚结束-->
    <!-- jQuery -->
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.js"></script>
    <!-- js -->
    <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/myJs.js"></script>
    <script>
    new WOW().init();
    </script>
    <!-- banner的js -->
    <script>
    $('.carousel').carousel({
        interval: 4000
    })
    </script>
</body>

</html>