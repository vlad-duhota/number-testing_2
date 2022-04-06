<?php 
    $page_id = get_the_ID();
    $location_1 = carbon_get_post_meta($page_id, 'widget_1_list');
?>

<div class="pop-up">
    <div class="pop-up__body">
        <div class="pop-up__header">
            <?php echo get_custom_logo(); ?>
            <a href="#" class="pop-up__close-btn">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/cross.svg" alt="">
            </a>
        </div>
        <div class="pop-up__main">
            <ul class="pop-up__dots">
                <li class="pop-up__dot"><a class="active" data-dot=".pop-up-step-1"></a></li>
                <li class="pop-up__dot"><a data-dot=".pop-up-step-2"></a></li>
                <li class="pop-up__dot"><a data-dot=".pop-up-step-3"></a></li>
                <li class="pop-up__dot"><a data-dot=".pop-up-step-4"></a></li>
            </ul>
            <div class="pop-up-step pop-up-step-1 active">
                <div class="pop-up-step__cols"> 
                    <h3 class="pop-up-step__title"><?php echo carbon_get_post_meta($page_id, 'widget_title_1')?></h3>
                    <form action="#" class="pop-up-step__find">
                        <input type="text" placeholder="Find by ZIP">
                        <button type="submit">
                           <img src="<?php echo get_template_directory_uri()?>/assets/img/search.svg" alt="">
                        </button>
                    </form>
                    </div>
                    <?php if(! empty($location_1)) : ?>
                        <ul class="pop-up-step-1__list">
                        <?php $iterator1?>
                        <?php foreach($location_1 as $loc1) : ?>
                            <?php $iterator1++?>
                            <li class="pop-up-step-1__item" data-step-1-item="<?php echo $iterator1?>">
                                <h3 class="pop-up-step-1__text"><?php echo $loc1['widget_1_text']?>a</h3>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/right-arrow.svg" alt="">
                            </li>
                        <?php endforeach ?>
                        </ul>
                    <?php endif ?>  
                </div>
                <div class="pop-up-step pop-up-step-2">
                <div class="pop-up-step__cols"> 
                <h3 class="pop-up-step__title"><?php echo carbon_get_post_meta($page_id, 'widget_title_2')?></h3>
                   <form action="#" class="pop-up-step__find">
                        <input type="text" placeholder="Find by ZIP">
                       <button type="submit">
                           <img src="<?php echo get_template_directory_uri()?>/assets/img/search.svg" alt="">
                       </button>
                   </form>
                </div>
                <?php if(! empty($location_1)) : ?>
                    <?php $iterator2?>
                    <?php foreach($location_1 as $loc1) : ?>
                        <?php $iterator2++?>
                        <ul class="pop-up-step-2__list" data-step-2-list="<?php echo $iterator2?>">
                        <?php $iterator3?>
                        <?php foreach($loc1['widget_2_list'] as $loc2) : ?>
                        <li class="spoiler pop-up-step-2__item">
                        <h3 class="spoiler__title"><?php echo $loc2['widget_2_text']?></h3>
                        <div class="spoiler__content pop-up-spoiler-content">
                            <ul class="pop-up-spoiler-content__list">
                            <?php foreach($loc2['widget_2_spoilers'] as $loc3) : ?>
                                <?php $iterator3++?>
                                <li class="pop-up-spoiler-content__item" data-step-2-item="<?php echo $iterator3?>">
                                    <h4><?php echo $loc3['widget_2_spoilers_text']?></h4>
                                    <p class="pop-up-spoiler-content__subtitle"><?php echo $loc3['widget_2_spoilers_location']?></p>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </li>
                    <?php endforeach ?>
                </ul>
                <?php endforeach ?>
                <?php endif ?>  
            </div>
            <div class="pop-up-step pop-up-step-3">
                <div class="pop-up-step__cols"> 
                <h3 class="pop-up-step__title"><?php echo carbon_get_post_meta($page_id, 'widget_title_3')?></h3>
                   <form action="#" class="pop-up-step__find">
                        <input type="text" placeholder="Find by ZIP">
                       <button type="submit">
                           <img src="<?php echo get_template_directory_uri()?>/assets/img/search.svg" alt="">
                       </button>
                   </form>
                </div>
                <?php if(! empty($location_1)) : ?>
                    <?php foreach($location_1 as $loc1) : ?>
                        <?php foreach($loc1['widget_2_list'] as $loc2) : ?>
                            <?php $iterator4?>
                            <?php foreach($loc2['widget_2_spoilers'] as $loc3) : ?>
                                <?php $iterator4++?>
                                <ul class="pop-up-step-3__list" data-step-3="<?php echo $iterator4?>">
                                <?php foreach($loc3['widget_3_tests'] as $loc4) : ?>
                                    <li class="pop-up-step-3__item" data-up="<?php echo $loc4['widget_4_uptitle']?>" data-test="<?php echo $loc4['widget_3_title_short']?>">
                                        <img src="<?php echo $loc4['widget_3_img']?>" alt="">
                                        <div class="pop-up-step-3__col">
                                            <h4 class="pop-up-step-3__test-title"><?php echo $loc4['widget_3_title']?></h4>
                                            <div class="pop-up-step-3__cols">
                                                <p class="pop-up-step-3__price"><?php echo $loc4['widget_3_price']?></p>
                                                <p class="pop-up-step-3__time"><?php echo $loc4['widget_3_time']?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endforeach ?>
                        <?php endforeach ?>
                    <?php endforeach ?>
                <?php endif ?>  
            </div>
            <div class="pop-up-step pop-up-step-4">
            <div class="pop-up-step__cols"> 
                    <h3 class="pop-up-step__title"><?php echo carbon_get_post_meta($page_id, 'widget_title_4')?></h3>
                   <form action="#" class="pop-up-step__find">
                        <input type="text" placeholder="Find by ZIP">
                       <button type="submit">
                           <img src="<?php echo get_template_directory_uri()?>/assets/img/search.svg" alt="">
                       </button>
                   </form>
                </div>
                <p class="pop-up-step-4__uptitle"></p>
                <h3 class="pop-up-step-4__title"></h3>
                <ul class="pop-up-step-4__location-list">
                    <li class="pop-up-step-4__location-item pop-up-step-4__location-item_1"></li>
                    <li class="pop-up-step-4__location-item pop-up-step-4__location-item_2"></li>
                    <li class="pop-up-step-4__location-item pop-up-step-4__location-item_3"></li>
                </ul>

                <p class="pop-up-step-4__list">
                    <span class="pop-up-step-4__item_1"></span>
                    <?php echo carbon_get_post_meta($page_id, 'widget_4_text')?>
                </p>
                <button type="submit" class="pop-up-step-4__btn">
                Book an appoinment
                </button>
            </div>
     </div>
    </div>
</div>