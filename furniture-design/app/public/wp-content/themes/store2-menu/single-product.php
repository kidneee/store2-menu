<!-- Header -->
<?php get_header(); ?>

<main class="l-main p-product">
    <div class="l-inner">
        <article class="p-product__content">
            <div class="c-page-heading p-product__heading">
                <h1 class="c-page-title"><?php the_title(); ?></h1>
            </div><!-- /.c-page-heading -->
            <div class="p-product__body">
                <div class="p-product__image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full', array('class' => 'p-product__img', 'width' => '295'));
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/item' . get_post_field('post_name') . '.jpg" width="295" alt="' . get_the_title() . '" class="p-product__img">';
                    }
                    ?>
                </div><!-- /.p-product__image -->
                <div class="p-product__text">
                    <p class="p-product__desc">
                        <?php the_field('description'); ?>
                    </p>
                    <div class="p-product__meta">
                        <span class="p-product__price">&yen;<?php the_field('price'); ?> +tax</span>
                        <dl class="p-product__detail-list">
                            <!-- Size -->
                            <div class="p-product__detail-item">
                                <dt lang="en" class="p-product__detail-item-label">Size</dt>
                                <dd lang="en" class="p-product__detail-item-value"><?php the_field('size'); ?></dd>
                            </div>
                            <!-- Color -->
                            <div class="p-product__detail-item">
                                <dt lang="en" class="p-product__detail-item-label">Color</dt>
                                <dd class="p-product__detail-item-value"><?php the_field('color'); ?></dd>
                            </div>
                            <!-- Material -->
                            <div class="p-product__detail-item">
                                <dt lang="en" class="p-product__detail-item-label">Material</dt>
                                <dd class="p-product__detail-item-value"><?php the_field('material'); ?></dd>
                            </div>
                        </dl>
                    </div>
                </div><!-- /.p-product__text -->
            </div><!-- /.p-product__body -->
            <a href="<?php echo home_url('/products/'); ?>" lang="en" class="p-product__link">Back To Products</a>
        </article><!-- /.p-product__content -->
    </div><!-- /.l-inner -->
</main><!-- /.l-main -->

<!-- Footer -->
<?php get_footer(); ?>
