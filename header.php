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
        <a href="<?php echo home_url() ?>" class="logo-item"><?php bloginfo('name') ?></a>
    </div>
    <div class="menu-list">
        <a href="#" class="menu-item">Мужские</a>
        <a href="#" class="menu-item">Женские</a>
        <a href="#" class="menu-item">Детские</a>
        <a href="#" class="menu-item">Спортивные</a>
        <a href="#" class="menu-item">Бренды</a>
    </div>
    <div class="set-of-social-buttons">
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/fb.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/tw.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/g+.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/insta.png" alt=""></a>
    </div>
    <div class="shop-button">
        <div class="shop-bukket">
            <div class="shop-bukket-items">
                <div class="shop-bukket-item">
                    <div class="item-name">Кроссовки1</div>
                    <div class="item-price">54 грн</div>
                </div>
                <div class="shop-bukket-item">
                    <div class="item-name">Кроссовки2</div>
                    <div class="item-price">743 грн</div>
                </div>
                <div class="shop-bukket-item">
                    <div class="item-name">Кроссовки3</div>
                    <div class="item-price">56 грн</div>
                </div>
            </div>
            <div class="shop-button-confirm">
                <div class="shop-now shop-button-confirm-item">Оформить</div>
            </div>
        </div>
        <a href="#" class="shop-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/cart.png" alt=""></a>
    </div>
    <div class="search">
        <input class="search-field" type="text" name="search-request">
        <div class="search-button search-button-disabled"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/search.png" alt=""></div>
        <a href="#" class="search-button search-button-enabled"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/search.png" alt=""></a>
    </div>
</section>