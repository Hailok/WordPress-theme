<?php //get_header(); ?>

        <section class="regular-offers">

            <?php
            $posts = get_posts([
                'numberposts' => -1,
                'post_type' => 'product'
            ]);

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <a href="<?php the_permalink() ?>" class="offer">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="offer-image">
                    <h4 class="offer-title"><?php the_title(); ?></h4>
                    <p class="offer-price"><?php echo get_post_meta($post->ID, 'price', true) ?> ₴</p>
                </a>
            <?php
            }

            wp_reset_postdata();
            ?>

        </section>

<?php
get_footer();
