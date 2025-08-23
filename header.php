<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://unpkg.com/basscss@7.1.1/css/basscss.min.css" rel="stylesheet">
    <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="barba-wrapper">
    <div data-barba="container" data-barba-namespace="<?php echo is_front_page() ? 'home' : get_post_type(); ?>">
        <header>
            <div class="header-content flex flex-center flex-justify p2">
                <div class="logo">
                    <img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/img/masterbasic-logo.svg" alt="">
                </div>
                <nav>
                    <a href="" class="btn btn-outline mb1 black">Download now</a>
                </nav>
            </div>
        </header>
        <main>