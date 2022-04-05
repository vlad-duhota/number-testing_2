<?php 
    $page_id = get_the_ID();
    $select_1 = carbon_get_post_meta($page_id, 'hero_select_1');
    $select_2 = carbon_get_post_meta($page_id, 'hero_select_2');
    $hero_tests = carbon_get_post_meta($page_id, 'hero_tests');
?>

            <section class="hero">
            <div class="hero-main">
                   <div class="container">
                       <div class="hero-main__cols">
                            <div class="hero-main__col wow animate__animated animate__fadeInLeft">
                                <h1 class="hero-main__title section-title">
                                <?php echo carbon_get_post_meta($page_id, 'hero_big_title')?>
                                <span><?php echo carbon_get_post_meta($page_id, 'hero_big_title_span')?></span>
                                </h1>
                            </div>
                            <div class="hero-main__col hero-main-tests wow animate__animated animate__fadeInRight">
                                <h3 class="hero-main-tests__title"><?php echo carbon_get_post_meta($page_id, 'hero_tests_title') ?> <span><?php echo carbon_get_post_meta($page_id, 'hero_tests_title_span') ?></span></h3>
                                <?php if(! empty($hero_tests)) : ?>
                                <ul class="hero-main-tests__list">
                                <?php foreach($hero_tests as $hero_test) : ?>
                                    <li class="hero-main-tests__item"><?php echo $hero_test['hero_tests_test'] ?></li>
                                <?php endforeach ?>
                                </ul>
                                <?php endif ?>
                            </div>
                        </div>
                        <form action="#" class="hero-main__form wow animate__animated animate__fadeInLeft">
                        <?php $select_1_index ?>
                        <?php if(! empty($select_1)) : ?>
                            <select>
                            <?php foreach($select_1 as $select_1_option) : ?>
                            <?php $select_1_index++?>
                            <option value="<?php echo $select_1_index?>"><?php echo $select_1_option['hero_select_1_option'] ?></option>
                            <?php endforeach ?>
                            </select>
                            <?php endif ?>
                            <?php $select_2_index ?>
                            <?php if(! empty($select_2)) : ?>
                            <select>    
                            <?php foreach($select_2 as $select_2_option) : ?>
                            <?php $select_2_index++?>
                            <option value="<?php echo $select_2_index?>"><?php echo $select_2_option['hero_select_2_option'] ?></option>
                            <?php endforeach ?>
                            </select>
                        <?php endif ?>
                        <button type="submit" class="book"><?php echo carbon_get_post_meta($page_id, 'hero_btn_1')?></button>
                        </form>
                    </div>
                    </div>
                <div class="hero-bottom" style="background-image: url(<?php echo carbon_get_post_meta($page_id, 'hero_bg') ?>);">
                    <div class="container">
                        <h2 class="section-title section-title_light wow animate__animated animate__fadeInLeft"
                            data-wow-duration="1.5s">
                            <?php echo carbon_get_post_meta($page_id, 'hero_title')?>
                            <span><?php echo carbon_get_post_meta($page_id, 'hero_title_span')?></span>
                        </h2>
                        <button class="book book_light wow animate__animated animate__fadeInLeft"><?php echo carbon_get_post_meta($page_id, 'hero_btn_2')?></button>
                    </div>
                </div>     
            </section>