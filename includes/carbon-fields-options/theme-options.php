<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme options', 'crb') )
->add_fields([
	Field::make( 'image', 'phone_img', 'Phone Image' )
        ->set_width(20)
        ->set_value_type( 'url' ),
	Field::make( 'text', 'phone_number', 'Phone Number' )
        ->set_width(40),
        Field::make( 'text', 'phone_link', 'Phone Text' )
        ->set_width(40),
        Field::make( 'text', 'btn', 'Текст кнопок' )
        ->set_width(20),
]);
Container::make( 'theme_options', __('Footer options', 'crb') )
->add_fields([
        Field::make( 'text', 'footer_btn', "Текст кнопки зв'язування" ), 
        Field::make( 'complex', 'footer_socials', "Соціальні мережі" )
        ->add_fields([
                Field::make( 'image', 'footer_socials_img', "Картинка" )
                ->set_width(50)
                ->set_value_type('url'),
                Field::make( 'text', 'footer_socials_link', "Посилання" )
                ->set_width(50),
        ]),
        Field::make( 'text', 'footer_email', "Пошта" )
        ->set_width(50), 
        Field::make( 'image', 'footer_email_img', "іконка пошти" )
        ->set_value_type('url')
        ->set_width(50), 
        Field::make( 'text', 'footer_phone', "Телефон" )
        ->set_width(50), 
        Field::make( 'image', 'footer_phone_img', "іконка телефону" )
        ->set_value_type('url')
        ->set_width(50), 
        Field::make( 'image', 'footer_scroll', "іконка скролу вверх" )
        ->set_value_type('url'),
        Field::make( 'complex', 'footer_locations', "Локації" )
        ->add_fields([
                Field::make( 'text', 'footer_locations_title', "Заголовок(не обов'язково)" ),
                Field::make( 'complex', 'footer_locations_list', "Локації в середині" )
                ->add_fields([
                        Field::make( 'text', 'footer_locations_item', "Назва локації" )
                        ->set_width(50),
                        Field::make( 'text', 'footer_locations_link', "Посилання на локацію" )
                        ->set_width(50),
                ]),
        ]),
        Field::make( 'text', 'footer_copy', "Текст копірайту" )
        ->set_width(80),
        Field::make( 'text', 'footer_copy_symbol', "Знак копірайту" )
        ->set_width(20), 
        Field::make( 'image', 'footer_company_logo', "Лого студії дизайну" )
        ->set_value_type('url')
        ->set_width(50), 
        Field::make( 'text', 'footer_company_text', "текст логотипу студії дизайну" )
        ->set_width(50),  
]);