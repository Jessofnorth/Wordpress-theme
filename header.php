<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicons -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri();?>/img/favicon.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <!-- header -->
        <header class="desktop">
            <!-- desktop nav -->
            <nav class="nav-grid">
            <button name="meny" class="hamburger" aria-label="hamburger-menu"><span class="bar"></span></button>
            <?php wp_nav_menu(array('theme_location' => 'main-menu-left'));?>
            <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri();?>/img/logo.png" alt="Logotyp"></a>
            <?php wp_nav_menu(array('theme_location' => 'main-menu-right'));?>
            </nav>
            <!-- mobile nav -->
            <nav class="mobile-nav">
            <?php wp_nav_menu(array('theme_location' => 'main-menu-left'));?>
            <?php wp_nav_menu(array('theme_location' => 'main-menu-right'));?>
            </nav>
        </header>
        <!-- main -->
        <main>