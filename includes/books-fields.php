<?php
// Add custom fields related to books

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group(array(
        'key' => 'group_5a4ea844362af',
        'title' => 'Book',
        'fields' => array(
            array(
                'key' => 'field_5a4ea84fed78d',
                'label' => 'Author',
                'name' => 'author',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
}