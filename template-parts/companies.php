<?php
$page_id = get_the_ID();
$companies_slider = carbon_get_post_meta($page_id, 'companies_slider');
$companies_list = carbon_get_post_meta($page_id, 'companies_list');
?>

<section class="companies">
    <div class="container">
        <h2 class="section-title wow animate__animated animate__fadeInLeft">
            <?php echo carbon_get_post_meta($page_id, 'companies_title') ?><span><?php echo carbon_get_post_meta($page_id, 'companies_title_span') ?></span>
        </h2>
        <?php if (!empty($companies_slider)) : ?>
            <ul class="companies__slider wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s">
                <?php foreach ($companies_slider as $company_slide) : ?>
                    <li class="company-item">
                        <div class="company-item__info">
                            <img src="<?php echo $company_slide['companies_slider_img'] ?>" class="company-item__img">
                            <div class="company-item__info-right">
                                <p class="company-item__date"><?php echo $company_slide['companies_slider_date'] ?></p>
                                <h3 class="company-item__title"><?php echo $company_slide['companies_slider_name'] ?></h3>
                            </div>
                        </div>
                        <p class="company-item__text">
                            <?php echo $company_slide['companies_slider_text'] ?>
                        </p>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
        <button class="book wow animate__animated animate__fadeInLeft"><?php echo carbon_get_theme_option('btn') ?></button>
        <?php if (!empty($companies_list)) : ?>
            <ul class="companies__list">
                <?php foreach ($companies_list as $companies_item) : ?>
                    <li class="companies__item">
                        <a href="<?php echo $companies_item['companies__list_link'] ?>" class="companies__link">
                            <img src="<?php echo $companies_item['companies_list_img'] ?>" alt="">
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
</section>