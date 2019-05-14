<?php get_header() ?>

<?php the_post() ?>
<main id="category">
    <section class="regular-offers">

        <?php
        //echo get_cat_ID(single_cat_title('', 0));
        //$posts = get_posts([
        //    'numberposts' => -1,
        //    'category' => get_cat_ID(single_cat_title('', 0)),
        //    'post_type' => 'product'
        //]);

        $posts = new WP_Query([
            'posts_per_page' => 5,
            'post_type' => 'product',
            's' => $s,
        ]);

        while($posts->have_posts()) {
            $posts->the_post();
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
</main>

<?php get_footer() ?>