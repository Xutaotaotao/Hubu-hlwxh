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
    <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
    <!-- 添加pingback -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen" />
</head>

<body>
    <!-- 导航 -->
    <header class="header" id="wx-header">
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
                    <li <?php if (is_home()) { echo 'class="active"';} ?>><a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">首页</a></li>
                        <li class="active">
                            <a href="index.php ">首页</a>
                        </li>
                        <li>
                            <a href="frontEnd.php">前端导航</a>
                        </li>
                        <li>
                            <a href="source.php">资源下载</a>
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
    </header>