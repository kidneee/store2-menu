<?php

/**
 * Product Card Component
 * 画像パスをデバッグ・検証するバージョン
 */
?>
<article class="c-product-card">
    <a href="<?php the_permalink(); ?>" class="c-product-card__link">
        <div class="c-product-card__image">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array(
                    'class'  => 'c-product-card__img',
                    'width'  => '138',
                    'height' => '138'
                ));
            } else {
                // フォールバック画像
                $post_slug = get_post_field('post_name', get_the_ID());
                $fallback_image = get_template_directory_uri() . '/assets/images/item' . $post_slug . '.jpg';

                echo '<img src="' . esc_url($fallback_image) . '"
                       width="138"
                       height="138"
                       alt="' . esc_attr(get_the_title()) . '"
                       class="c-product-card__img">';
            }
            ?>
        </div><!-- /.c-product-card__image -->
        <div class="c-product-card__meta">
            <h3 class="c-product-card__name"><?php the_title(); ?></h3>
            <span class="c-product-card__price">&yen;<?php the_field('price'); ?> +tax</span>
        </div><!-- /.c-product-card__meta -->
    </a>
</article>
