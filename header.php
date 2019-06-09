<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body>
<section class="menu">
    <div class="logo-menu-wrap">
        <div class="open-menu-button">
            <div class="open-menu-button-item">
                <div class="stripe"></div>
                <div class="stripe"></div>
                <div class="stripe"></div>
            </div>
        </div>
        <div class="logo">
            <a href="<?php echo home_url() ?>" class="logo-item"><?php bloginfo('name') ?></a>
        </div>
        
        <?php 
        wp_nav_menu([
            'menu'            => 'Главное меню',
            'theme_location'  => 'header',
            'container'       => '',          
            'container_class' => '',              
            'container_id'    => '',             
            'menu_class'      => 'menu-list',              
            'echo'            => true,
        ]);
        ?>
    </div>

    <div class="set-of-social-buttons">
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/fb.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/tw.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/g+.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/insta.png" alt=""></a>
    </div>
    <div class="func-button-wrap">
        <?php
        if (is_archive()) {
        ?>
        <div class="filter-button">
            <div class="filter-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/filter-icon.png" alt=""></div>
        </div>
            <?php
        }
        ?>
        <div class="shop-button">
            <div class="shop-button-item">
                <img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/cart.png" alt="">
                <div class="counterItems"></div>
            </div>
            <div class="shop-bukket">
                <div class="shop-bukket-items">
                </div>
                <div class="shop-button-confirm">
                    <?php echo do_shortcode('[contact-form-7 id="105" title="Заказ"]'); ?>
                </div>
            </div>
        </div>
        <?php get_search_form() ?>
    </div>
</section>