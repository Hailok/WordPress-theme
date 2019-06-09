<?php

//добавляем поддержку миниатюр
add_theme_support( 'post-thumbnails', ['product']);

//добавляем необходимые стили с скрипты в шапке
add_action( 'wp_enqueue_scripts', 'smurov_theme_scripts' );

function smurov_theme_scripts() {
    wp_enqueue_style( 'smurov_theme-style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script('cookie-functions', get_template_directory_uri() . '/js/cookie.js' );
}

//регистрируем меню
register_nav_menus([
    'header' => 'Меню в шапке',
    'filters' => 'Фильтры',
    'designers' => 'Дизайнеры'
]);

//добавляем новые типы записей "Товар", "О нас"
add_action('init', 'add_post_types');

function add_post_types() {
    register_post_type('about-us', [
        'labels' => [
            'name' => 'Про нас',
            'add_new' => 'Додати опис',
            'add_new_item' => 'Додавання опису',
            'edit_item' => 'Редагування опису',
            'view_item' => 'Всі описи',
            'menu_name' => 'Опис'
        ],

        'public' => true,
        'supports' => array('title', 'editor'),
    ]);

    register_post_type('product', [
        'labels' => [
            'name' => 'Товар',
            'add_new' => 'Додати товар',
            'add_new_item' => 'Додавання товару',
            'edit_item' => 'Редагування товару',
            'view_item' => 'Усі товари',
            'menu_name' => 'Товари'
        ],

        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => ['category'],
    ]);
}

//добавляем дополнительные мета-поля для типа записи "Товар"
add_action('add_meta_boxes', 'add_extra_fields');
add_action('save_post', 'save_extra_field');

function add_extra_fields() { //добавляем поле в админ-панель
    add_meta_box('price', 'Ціна', 'price_field', 'product');
}

function price_field($post) { //описываем внешний вид поля в админ-панеле
    ?>
        <label><input type="text" name="price" value="<?php echo get_post_meta($post->ID, 'price', true) ?>"> ₴</label>
    <?php
}

function save_extra_field($post_id) { //добавляем мета-значение к посту при сохранении
    update_post_meta($post_id, 'price', $_POST['price']);
}

/////////////////////////////////////////////////////////////////////