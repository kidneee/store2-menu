<!-- Header -->
<?php
include('./header.php');
?>

<main class="l-main p-top">
    <div class="l-inner">
        <div class="p-top__content">
            <ul class="p-top__product-list">
                <!-- ループ処理 -->
                <li class="p-top__product-item">
                    <?php
                    include('./components/product-card.php');
                    ?>
                </li>
            </ul>
            <a href="./archive-products.php" lang="en" class="p-top__link">View More</a>
        </div><!-- /.p-top__content -->
    </div><!-- /.l-inner -->
</main><!-- /.l-main -->

<!-- Footer -->
<?php
include('./footer.php');
?>
