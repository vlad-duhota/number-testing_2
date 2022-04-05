
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php echo wp_site_icon(); ?>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header wow animate__animated animate__fadeInDown" id="header">
            <div class="container">
                    <!-- <a href="#" class="logo">
                        <img src="img/logo.svg">
                    </a> -->
                    <?php echo get_custom_logo(); ?>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#" class="menu__link">Locations</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Why Us</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__phone">
                        <img src="<?php echo carbon_get_theme_option('phone_img')?>">
                        <span><?php echo carbon_get_theme_option('phone_number') ?></span>
                        <a href="tel:<?php echo carbon_get_theme_option('phone_number') ?>" class="header__phone-link"><?php echo carbon_get_theme_option('phone_link') ?></a>
                    </div>
                    <a class="menu-btn">
                        <span></span>
                    </a>
            </div>
        </header>