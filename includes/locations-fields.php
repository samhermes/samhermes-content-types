<?php
// Add custom fields related to locations

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group(array(
        'key' => 'group_5b46bdd78ae40',
        'title' => 'Location',
        'fields' => array(
            array(
                'key' => 'field_5b46bf32df545',
                'label' => 'Coordinates',
                'name' => 'coordinates',
                'type' => 'google_map',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'center_lat' => '',
                'center_lng' => '',
                'zoom' => '10',
                'height' => '',
            ),
            array(
                'key' => 'field_5b6b30e3ebcb2',
                'label' => 'Number of Visits',
                'name' => 'number_of_visits',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 1,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'locations',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => 1,
        'description' => '',
    ));
}