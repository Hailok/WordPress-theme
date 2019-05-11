<?php

//добавляем поддержку миниатюр
add_theme_support( 'post-thumbnails', ['product']);

//добавляем необходимые стили с скрипты в шапке
add_action( 'wp_enqueue_scripts', 'smurov_theme_scripts' );

function smurov_theme_scripts() {
	wp_enqueue_style( 'smurov_theme-style', get_template_directory_uri() . '/css/style.css' );
}

//регистрируем меню
register_nav_menus([
    'header' => 'Меню в шапке',
]);

//добавляем новый тип записи "Товар"
add_action('init', 'add_post_types');

function add_post_types() {
    register_post_type('product', [
        'labels' => [
            'name' => 'Товар',
            'add_new' => 'Добавить товар',
            'add_new_item' => 'Добавление товара',
            'edit_item' => 'Редактирование товара',
            'view_item' => 'Все товары',
            'menu_name' => 'Товары'
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
    add_meta_box('price', 'Цена', 'price_field', 'product');
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
