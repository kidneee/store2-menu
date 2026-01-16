<!-- Header -->
<?php get_header(); ?>

<main class="l-main p-product">
    <div class="l-inner">
        <article class="p-product__content">
            <div class="c-page-heading p-product__heading">
                <h1 class="c-page-title">プロダクトタイトル</h1>
            </div><!-- /.c-page-heading -->
            <div class="p-product__body">
                <div class="p-product__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item1.jpg" width="295" alt="" class="p-product__img">
                </div><!-- /.p-product__image -->
                <div class="p-product__text">
                    <p class="p-product__desc">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="p-product__desc">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <div class="p-product__meta">
                        <span class="p-product__price">&yen;99,999 +tax</span>
                        <dl class="p-product__detail-list">
                            <!-- Size -->
                            <div class="p-product__detail-item">
                                <dt lang="en" class="p-product__detail-item-label">Size</dt>
                                <dd lang="en" class="p-product__detail-item-value">W999 × D999 × H999</dd>
                            </div>
                            <!-- Color -->
                            <div class="p-product__detail-item">
                                <dt lang="en" class="p-product__detail-item-label">Color</dt>
                                <dd class="p-product__detail-item-value">テキスト</dd>
                            </div>
                            <!-- Material -->
                            <div class="p-product__detail-item">
                                <dt lang="en" class="p-product__detail-item-label">Material</dt>
                                <dd class="p-product__detail-item-value">テキストテキストテキスト</dd>
                            </div>
                        </dl>
                    </div>
                </div><!-- /.p-product__text -->
            </div><!-- /.p-product__body -->
            <a href="./archive-products.php" lang="en" class="p-product__link">Back To Products</a>
        </article><!-- /.p-product__content -->
    </div><!-- /.l-inner -->
</main><!-- /.l-main -->

<!-- Footer -->
<?php get_footer(); ?>
