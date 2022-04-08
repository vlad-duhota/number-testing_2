<?php 
    $page_id = get_the_ID();
    $serve_list = carbon_get_post_meta($page_id, 'serve_list')
?>


<section class="serve">
                <div class="serve__columns">
                    <div class="serve__img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/serve-bg.jpg" alt="">
                    </div>
                    <div class="serve__text wow animate__animated animate__fadeInRight">
                        <h2 class="serve__title"><?php echo carbon_get_post_meta($page_id, 'serve_big_title')?><span><?php echo carbon_get_post_meta($page_id, 'serve_big_title_span')?></span></h2>
                        <?php if(! empty($serve_list)) : ?>
                            <ul class="serve__list">
                                <?php foreach($serve_list as $serv_item) : ?>
                                    <li class="serve__item"><?php echo $serv_item['serve_list_text']?></li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                        <button class="book"><?php echo carbon_get_theme_option('btn')?></button>
                    </div>
                </div>
            </section>