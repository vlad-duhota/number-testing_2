<?php
$page_id = get_the_ID();
?>
<section class="contact">
    <div class="container">
        <div class="contact__text wow animate__animated animate__fadeInLeft">
            <h2 class="section-title">
                <?php echo carbon_get_post_meta($page_id, 'contact_title') ?>
                <span><?php echo carbon_get_post_meta($page_id, 'contact_title_span') ?></span>
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]') ?>
        </div>
        <div class="contact__img wow animate__animated animate__fadeInRight">
            <img src="<?php echo carbon_get_post_meta($page_id, 'contact_img') ?>" alt="">
        </div>
    </div>
</section>