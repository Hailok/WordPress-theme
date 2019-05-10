<?php get_header(); ?>

<header id="header">
    <section class="actual-offer">
        <h1>Nike shoes</h1>
        <p>Купи сейчас и получите скидку 10%</p>
        <a href="#" class="shop-now">Покупать!</a>
    </section>

</header>

<main id="front-page">

<section class="about-us">
    <div class="about-us-item">
        <img src="<?php get_template_directory_uri() . '/' ?>img/front-page/body/about-us/about-us_example.png" alt="">
        <h3 class="about-us-item-title">Free Shipping</h3>
        <p class="about-us-item-text">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
    </div>
    <div class="about-us-item">
        <img src="<?php get_template_directory_uri() . '/' ?>img/front-page//body/about-us/about-us_example.png" alt="">
        <h3 class="about-us-item-title">Free Shipping</h3>
        <p class="about-us-item-text">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
    </div>
    <div class="about-us-item">
        <img src="<?php get_template_directory_uri() . '/' ?>img/front-page/body/about-us/about-us_example.png" alt="">
        <h3 class="about-us-item-title">Free Shipping</h3>
        <p class="about-us-item-text">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
    </div>
    <div class="about-us-item">
        <img src="<?php get_template_directory_uri() . '/' ?>img/front-page/body/about-us/about-us_example.png" alt="">
        <h3 class="about-us-item-title">Free Shipping</h3>
        <p class="about-us-item-text">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's</p>
    </div>
</section>

<section class="offer-of-the-month">
    <div class="offer">
        <h2 class="offer-name">Предложение месяца</h2>
        <h3 class="offer-title">Nike Air Max 270</h3>
        <p class="offer-text">Дизайн мужских кроссовок Nike Air Max 270 создан на основе двух легендарных моделей линейки Air: Air Max 180 и Air Max 93. Эта модель с самой большой вставкой Nike Air в области пятки обеспечивает воздушную легкость при каждом шаге.</p>
        <div class="price">
            <span class="new">400 ₴</span>
            <span class="old"><div class="line-through"></div> 40 ₴</span>
        </div>
        <div class="time-left">
            <div class="time-left-item days">
                <span class="value">99</span>
                <span class="value-name">Дней</span>
            </div>
            <div class="time-left-item hours">
                <span class="value">99</span>
                <span class="value-name">Часов</span>
            </div>
            <div class="time-left-item minutes">
                <span class="value">99</span>
                <span class="value-name">Минут</span>
            </div>
            <div class="time-left-item seconds">
                <span class="value">99</span>
                <span class="value-name">Секунд</span>
            </div>
        </div>
        <a href="#" class="shop-now">Купить!</a>
    </div>
    <div class="image"></div>
</section>

<section class="regular-offers">

    <?php
    $posts = get_posts([
        'numberposts' => -1,
        'post_type' => 'product'
    ]);

    foreach($posts as $post) {
        setup_postdata($post);
    ?>
    <a href="<?php the_permalink(); ?>" class="offer">
    <div class="offer-image" style="background: url('<?php the_post_thumbnail_url() ?>') center center / cover;"></div>
    <h4 class="offer-title"><?php the_title() ?></h4>
    <p class="offer-price"><?php echo get_post_meta($post->ID, 'price', true) ?> ₴</p>
    </a>
    <?php
    }

    wp_reset_postdata();
    ?>
    
</section>

<section class="categories">
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category1.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Фитнес</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category2.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Бег</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category3.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Бокс</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category4.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Футбол</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category5.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Американский футбол</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category6.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Скейтбординг</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category7.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Йога</h3>
        </div>
    </a>
    <a href="#" class="category">
        <div class="category-img" style="background: url('<?php echo get_template_directory_uri() . '/' ?>img/front-page/body/categories/category8.jpg') center center / cover;"></div>
        <div class="category-highlight">
            <h3 class="category-title">Танцы</h3>
        </div>
    </a>
</section>

<section class="brands">
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand1.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand2.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand3.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand4.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand5.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand6.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand7.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand8.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand9.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand10.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand11.png') no-repeat center center" alt=""></div></a>
    <a class="brand" href="#"><div class="brand-img" style="background: url('<?php echo get_template_directory_uri() . '/'?>img/front-page/body/brands/brand12.png') no-repeat center center" alt=""></div></a>
</section>

</main>

<?php
get_footer();
