<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-inner">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo('name'); ?> Logo">
            </div>
            <div class="site-title">
                <h1><?php bloginfo('name'); ?></h1>
            </div>
            <div class="menu-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>