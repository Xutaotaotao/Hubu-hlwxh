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
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
    <title>
        <?php bloginfo('name'); ?>
        <?php wp_title(); ?>
    </title>
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
    <header class="header" id="wx-header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url');?>">
                        <?php bloginfo(name);?>
                    </a>
                </div>
                <?php wp_nav_menu( 
                array( 'menu' => 'mymenu', 
                       'container' => 'div',
                       'container_class' => 'collapse navbar-collapse',
                       'container_id' => 'bs-example-navbar-collapse-1',
                       'menu_class' => 'nav navbar-nav navbar-right',
                        'depth' => 1) );?>
            </div>
        </nav>
    </header>