<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pro Shoe store</title>
    <?php wp_head() ?>
</head>
<body>
<section class="menu">
    <div class="logo">
        <a href="#" class="logo-item">pro.Shoe</a>
    </div>
    <div class="menu-list">
        <a href="#" class="menu-item">Мужские</a>
        <a href="#" class="menu-item">Женские</a>
        <a href="#" class="menu-item">Детские</a>
        <a href="#" class="menu-item">Спортивные</a>
        <a href="#" class="menu-item">Бренды</a>
    </div>
    <div class="set-of-social-buttons">
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/header/fb.png" alt="fb"></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/header/tw.png" alt="tw"></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/header/g+.png" alt="g+"></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/header/insta.png" alt="insta"></a>
    </div>
    <div class="shop-button">
        <a href="#"><img src="<?php echo get_template_directory_uri() . '/' ?>img/header/cart.png" alt=""></a>
    </div>
    <div class="search-button">
        <a href="#"><img src="<?php echo get_template_directory_uri() . '/' ?>img/header/search.png" alt=""></a>
    </div>
</section>