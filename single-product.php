<?php get_header() ?>

<?php the_post(); ?>
<main id="single">
    <div class="product">
        <div class="img">
            <div class="img-content" style="background: url('<?php the_post_thumbnail_url() ?>') center center / cover;"></div>
            <div class="buy-box">
                <div class="price"><?php echo get_post_meta($post->ID, 'price', true) ?> ₴</div>
                <div class="shop-now">Купить</div>
                <!-- <form action="<?php //echo get_template_directory_uri() . '/' ?>action.php" method="post">
                    <input type="text" name="item-name" value="<?php //the_title() ?>" style="display: none;">
                    <input class="shop-now" type="submit" value="qqqq">
                </form> -->
            </div>
        </div>
        <div class="info">
            <h1 class="title"><?php the_title(); ?></h1>
            <p class="describe"><?php the_content(); ?></p>
        </div>
    </div>
</main>

<?php get_footer() ?>
