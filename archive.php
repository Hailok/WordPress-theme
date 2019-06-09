<?php get_header(); ?>

<main id="archive">
    <aside class="filter-panel">
        <div class="filter-wrap">
            <div class="filter-item category">
                <p class="title">Категории</p>
                <?php 
                wp_nav_menu([
                    'menu'            => 'Меню фильтров',
                    'theme_location'  => 'filters',
                    'container'       => '',          
                    'container_class' => '',              
                    'container_id'    => '',             
                    'menu_class'      => 'menu-categories',            
                    'echo'            => true,
                ]);
                ?>
            </div>
            <div class="filter-item designers">
                <p class="title">Дизайнеры</p>
                <?php 
                wp_nav_menu([
                    'menu'            => 'Меню фильтров',
                    'theme_location'  => 'designers',
                    'container'       => '',          
                    'container_class' => '',              
                    'container_id'    => '',             
                    'menu_class'      => 'menu-designers',            
                    'echo'            => true,
                ]);
                ?>
            </div>
            <div class="filter-item orderby">
                <p class="title">Сортировка</p>
                <select class="orderby-item">
                    <option>сначала новые</option>
                    <option>от дешевых к дорогим</option>
                    <option>от дороших к дешевым</option>
                </select>
            </div>
        </div>

        <script src="<?php echo get_template_directory_uri() . '/' ?>js/setting-filter-menu.js"></script>
    </aside>

    <section class="regular-offers">
        <?php
        $slugPos = strpos($_SERVER['REQUEST_URI'], 'category') + 9;
        $slugEnd = strrpos($_SERVER['REQUEST_URI'], '/');
        $slugsStr = substr($_SERVER['REQUEST_URI'], $slugPos, $slugEnd - $slugPos);
        $slugs = explode('/', $slugsStr);
        $categories = [];

        for ($i = 0; $i < count($slugs); $i++) {
            array_push($categories, get_category_by_slug($slugs[$i])->cat_ID);
        }

        switch($orderby) {
            case 'from-new':
                $WP_Query_param = [
                    'posts_per_page'    => -1,
                    'category__and'     => $categories,
                    'post_type'         => 'product',
                    'order'             => 'DESC',
                    'orderby'           => 'date',
                    's'                 => $s,
                ];
                break;
            case 'from-cheap-to-expensive':
                $WP_Query_param = [
                    'posts_per_page'    => -1,
                    'category__and'     => $categories,
                    'post_type'         => 'product',
                    'order'             => 'ASC',
                    'orderby'           => 'meta_value_num',
                    'meta_query' => array(
                        array(
                            'key' => 'price',
                        ),
                    ),
                    's'                 => $s,
                ];
                break;  
            case 'from-expensive-to-cheap':
                $WP_Query_param = [
                    'posts_per_page'    => -1,
                    'category__and'     => $categories,
                    'post_type'         => 'product',
                    'order'             => 'DESC',
                    'orderby'           => 'meta_value_num',
                    'meta_query' => array(
                        array(
                            'key' => 'price',
                        ),
                    ),
                    's'                 => $s,
                ];
                break;  
            default:
                $WP_Query_param = [
                    'posts_per_page'    => -1,
                    'category__and'     => $categories,
                    'post_type'         => 'product',
                    'order'             => 'DESC',
                    'orderby'           => 'date',
                    's'                 => $s,
                ];
        }
        //print_r($WP_Query_param);
        $posts = new WP_Query($WP_Query_param);

        if ($posts->have_posts()) {
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
        } else {
            ?>
            <p class="search-error">Не удалось найти товар по заданным критериям</p>
            <?php
        }

        wp_reset_postdata();
        ?>

    </section>
</main>

<?php get_footer() ?>