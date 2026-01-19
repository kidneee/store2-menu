<!-- Header -->
<?php get_header(); ?>

<main class="l-main p-products">
    <div class="l-inner">
        <div class="c-page-heading">
            <h1 class="c-page-title">Products</h1>
        </div><!-- /.c-page-heading -->
        <div class="p-products__content">
            <ul class="p-products__product-list">
                <!-- ループ処理 -->
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <li class="p-top__product-item">
                            <?php get_template_part('components/product-card'); ?>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>

            <nav class="c-pagination" aria-label="ページナビゲーション">
                <!-- Pagination -->
                <ol class="c-pagination__list">
                    <li class="c-pagination__item c-pagination__item--current">
                        <a href="" class="c-pagination__link" aria-label="前のページ">1</a>
                    </li>
                    <li class="c-pagination__item c-pagination__item--next">
                        <a href="#" class="c-pagination__link" aria-label="次のページ">2</a>
                    </li>
                </ol>

            </nav>
        </div><!-- /.p-products__content -->
    </div><!-- /.l-inner -->
</main><!-- /.l-main -->

<!-- Footer -->
<?php get_footer(); ?>
