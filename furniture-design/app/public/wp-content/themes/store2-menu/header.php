<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Furniture Design</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <!-- JS -->
    <script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/60b0ddfc92.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="l-header">
        <div class="l-header__inner">
            <div class="l-header__top">
                <h1 class="l-header__logo">
                    <a href="./" class="l-haeder__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Furniture Design" width="180" height="20" class="l-header__logo-image">
                    </a>
                </h1>
                <!-- Hamburger Menu Icon -->
                <button id="hamburgerMenu" class="hamburger-menu" aria-label="メニュー" aria-expanded="false">
                    <span class="hamburger-menu__line"></span>
                </button><!-- /.hamburger-menu -->
            </div><!-- /.l-header__top -->
            <!-- Drawer Menu -->
            <div id="drawerMenu" class="drawer-menu">
                <div class="drawer-menu__content">
                    <nav class="g-nav">
                        <ul class="g-nav__list">
                            <li class="g-nav__item">
                                <a href="<?php echo home_url('/products/'); ?>" lang="en" class="g-nav__link">Products</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="<?php echo home_url('/about/'); ?>" lang="en" class="g-nav__link">About</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="<?php echo home_url('/company/'); ?>" lang="en" class="g-nav__link">Company</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="<?php echo home_url('/contact/'); ?>" lang="en" class="g-nav__link">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- /.drawer-menu__content -->
            </div><!-- /#drawerMenu -->

        </div><!-- /.l-header__inner -->
    </header><!-- /.l-header -->
