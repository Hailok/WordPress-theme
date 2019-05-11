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
    <!-- <div class="menu-list">
        <a href="#" class="menu-item">Мужские</a>
        <a href="#" class="menu-item">Женские</a>
        <a href="#" class="menu-item">Детские</a>
        <a href="#" class="menu-item">Спортивные</a>
        <a href="#" class="menu-item">Бренды</a>
    </div> -->

    <?php 
    wp_nav_menu([
        'menu'            => 'Главное меню',
        'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
        'container_class' => '',              // (string) class контейнера (div тега)
        'container_id'    => '',              // (string) id контейнера (div тега)
        'menu_class'      => 'menu-list',          // (string) class самого меню (ul тега)
        'menu_id'         => '',              // (string) id самого меню (ul тега)
        'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
        'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
        'before'          => '',              // (string) Текст перед <a> каждой ссылки
        'after'           => '',              // (string) Текст после </a> каждой ссылки
        'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
        'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
        'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
        'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
        'theme_location'  => ''               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
    ]);
    ?>

    <div class="set-of-social-buttons">
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/fb.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/tw.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/g+.png" alt=""></a>
        <a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/insta.png" alt=""></a>
    </div>
    <div class="shop-button">
        <div class="shop-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/cart.png" alt=""></div>
        <div class="shop-bukket">
            <div class="shop-bukket-items">
            </div>
            <div class="shop-button-confirm">
                <div class="shop-now shop-button-confirm-item">Оформить</div>
            </div>
        </div>
    </div>
    <div class="search">
        <input class="search-field" type="text" name="search-request">
        <div class="search-button search-button-disabled"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/search.png" alt=""></div>
        <a href="#" class="search-button search-button-enabled"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/search.png" alt=""></a>
    </div>
</section>