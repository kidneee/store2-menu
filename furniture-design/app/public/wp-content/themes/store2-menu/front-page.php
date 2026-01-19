<!-- Header -->
<?php get_header(); ?>

<main class="l-main p-top">
    <div class="l-inner">
        <div class="p-top__content">
            <ul class="p-top__product-list">
                <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                );

                $products_query = new WP_Query($args);

                if ($products_query->have_posts()) :
                    while ($products_query->have_posts()) :
                        $products_query->the_post();
                ?>
                        <li class="p-top__product-item">
                            <?php get_template_part('components/product-card'); ?>
                        </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>

            <a href="<?php echo home_url('/products/'); ?>" lang="en" class="p-top__link">View More</a>
        </div><!-- /.p-top__content -->
    </div><!-- /.l-inner -->
</main><!-- /.l-main -->

<!-- Footer -->
<?php get_footer(); ?>
