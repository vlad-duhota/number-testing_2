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
    Field::make( 'text', 'hero_btn_1', 'Текст темної кнопки' ),
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
    Field::make( 'text', 'hero_btn_2', 'Текст світлої Кнопки' ),
]);