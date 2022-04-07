<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== HOME PAGE ===========

Container::make( 'post_meta', __( 'Перша секція' ) )
->show_on_template('front-page.php')       // page_id
->add_fields([
    Field::make( 'text', 'hero_big_title', 'Великий заголовок' ),
    Field::make( 'text', 'hero_big_title_span', 'Тонкий текст великого заголовка' ),
    Field::make( 'complex', 'hero_select_1', 'Селект 1')
    ->add_fields( array(
       Field::make( 'text', 'hero_select_1_option', 'Варіант' ),
    )),
    Field::make( 'complex', 'hero_select_2', 'Селект 2')
    ->add_fields( array(
       Field::make( 'text', 'hero_select_2_option', 'Варіант' ),
    )),
    Field::make( 'text', 'hero_tests_title', 'Заголовок блоку з тестами' ),
    Field::make( 'text', 'hero_tests_title_span', 'Сірий текст заголовока блоку з тестами' ),
    Field::make( 'complex', 'hero_tests', 'Тести ')
    ->set_max(3)
    ->add_fields( array(
       Field::make( 'text', 'hero_tests_test', 'Тест' ),
    )),
    Field::make( 'image', 'hero_bg', 'Фон' )
    ->set_value_type( 'url' ),
    Field::make( 'text', 'hero_title', 'Звичайний заголовок' ),
    Field::make( 'text', 'hero_title_span', 'Тонкий текст звичайного заголовка' ),
]);

Container::make( 'post_meta', __( 'Секція What' ) )
->show_on_template('front-page.php')       // page_id
->add_fields([
    Field::make( 'text', 'what_title', 'Заголовок' ),
    Field::make( 'text', 'what_title_span', 'Тонкий текст заголовка' ),
    Field::make( 'text', 'what_subtitle', 'Підзаголовок' ),
    Field::make( 'text', 'what_steps_title', 'Заголовок правої частини' ),
    Field::make( 'complex', 'what_steps', 'Елементи правої частини')
    ->set_max(3)
    ->add_fields( array(
       Field::make( 'text', 'what_steps_text', 'Текст Елемента' ),
    )),
    Field::make( 'text', 'what_bottom_title', 'Заголовок нижньої частини' ),
    Field::make( 'text', 'what_bottom_title_span', 'Сірий текст заголовока нижньої частини' ),
    Field::make( 'complex', 'what_list', 'Елементи нижньої частини')
    ->set_max(3)
    ->add_fields( array(
       Field::make( 'text', 'what_list_text', 'Текст Елемента' ),
    )),
]);

Container::make( 'post_meta', __( 'Віджет' ) )
->show_on_template('front-page.php')       // page_id
->add_fields([
   Field::make( 'text', 'widget_title_1', 'Перший заголовок' ),
   Field::make( 'text', 'widget_title_2', 'Другий заголовок' ),
   Field::make( 'text', 'widget_title_3', 'Третій заголовок' ),
   Field::make( 'text', 'widget_title_4', 'Четвертий заголовок' ),
   Field::make( 'rich_text', 'widget_4_text', 'Текст останього кроку' ),
   Field::make( 'complex', 'widget_1_list', 'Перший список локацій' )
    ->add_fields([
       Field::make( 'text', 'widget_1_text', 'Назва локації' ),
       Field::make( 'complex', 'widget_2_list', 'Другий список локацій' )
       ->add_fields([
         Field::make( 'text', 'widget_2_text', 'Назва локації' ),
         Field::make( 'complex', 'widget_2_spoilers', 'Спойлери Другого списку локацій' )
         ->add_fields([
           Field::make( 'text', 'widget_2_spoilers_text', 'Назва локації' ),
           Field::make( 'text', 'widget_2_spoilers_location', 'Місце локації' ),
           Field::make( 'complex', 'widget_3_tests', 'Список тестів' )
           ->add_fields([
            Field::make( 'image', 'widget_3_img', 'Картинка тесту' )
            ->set_value_type('url'),
             Field::make( 'text', 'widget_3_title', 'Назва тесту' ),
             Field::make( 'text', 'widget_3_title_short', 'Коротка назва тесту' ),
             Field::make( 'text', 'widget_4_uptitle', 'Надзаголок у останньому кроці' ),
             Field::make( 'text', 'widget_3_price', 'Ціна тесту' ),
             Field::make( 'text', 'widget_3_time', 'Час тесту' ),
            ]),
         ]),
      ]),
   ]),
]);