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