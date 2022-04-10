        <?php
        $footer_socials = carbon_get_theme_option('footer_socials');
        $footer_cols = carbon_get_theme_option('footer_locations');
        ?>
        <!-- Insert here the markdown of your footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <button type="submit" class="book"><?php echo carbon_get_theme_option('btn') ?></button>
                    <button type="submit" class="book book_light"><?php echo carbon_get_theme_option('footer_btn') ?></button>
                    <?php if (!empty($footer_socials)) : ?>
                        <ul class="footer-socials">
                            <?php foreach ($footer_socials as $social_item) : ?>
                                <li class="footer-socials__item">
                                    <a href="<?php echo $social_item['footer_socials_link'] ?>" class="footer-socials__link">
                                        <img src="<?php echo $social_item['footer_socials_img'] ?>" class="footer-socials__img">
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                    <a href="mailto:<?php echo carbon_get_theme_option('footer_email') ?>" class="footer-link footer__mail">
                        <span>
                            <img src="<?php echo carbon_get_theme_option('footer_email_img') ?>" alt="">
                        </span>
                        <?php echo carbon_get_theme_option('footer_email') ?>
                    </a>
                    <a href="tel:<?php echo carbon_get_theme_option('footer_phone') ?>" class="footer-link footer__phone">
                        <span>
                            <img src="<?php echo carbon_get_theme_option('footer_phone_img') ?>" alt="">
                        </span>
                        <?php echo carbon_get_theme_option('footer_phone') ?>
                    </a>
                    <a href="#header" class="footer__scroll-btn">
                        <img src="<?php echo carbon_get_theme_option('footer_scroll') ?>">
                    </a>
                </div>
                <?php if (!empty($footer_cols)) : ?>
                    <div class="footer-main">
                        <?php foreach ($footer_cols as $footer_col) : ?>
                            <div class="footer-main__col">
                                <h3 class="footer-main__title"><?php echo $footer_col['footer_locations_title']?></h3>
                                <ul class="footer-main__list">
                                    <?php foreach($footer_col['footer_locations_list'] as $footer_item) : ?>
                                        <li class="footer-main__item"><a href="<?php echo $footer_item['footer_locations_link']?>" class="footer-main__link"><?php echo $footer_item['footer_locations_item']?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <div class="footer__mobile-btns">
                    <button class="book"><?php echo carbon_get_theme_option('btn') ?></button>
                    <button class="book book_light"><?php echo carbon_get_theme_option('footer_btn') ?></button>
                </div>
                <div class="footer-bottom">
                    <a href="#" class="footer-bottom__privacy">Privacy policy</a>
                    <p class="footer-bottom__copy"><span><?php echo carbon_get_theme_option('footer_copy_symbol')?></span><?php echo carbon_get_theme_option('footer_copy')?></p>
                    <a href="#" class="footer-bottom__company"><?php echo carbon_get_theme_option('footer_company_text')?>
                        <img src="<?php echo carbon_get_theme_option('footer_company_logo')?>" alt="logo"></a>
                </div>

            </div>
        </footer>
        </div> <!-- end .wrapper -->
        <!-- WIDGET -->
        <?php get_template_part('template-parts/widget'); ?>

        <?php wp_footer(); ?>

        </body>

        </html>