<?php

$google_map = array(
    'key' => 'layout_6565a99d1e876',
    'name' => 'google_map',
    'label' => 'Google Map',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_6565a9b31e878',
            'label' => 'Api Key',
            'name' => 'api_key',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6565a9bb1e879',
            'label' => 'Custom JSON Style',
            'name' => 'custom_json_style',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => 'Please add valid JSON: https://jsonlint.com/',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'maxlength' => '',
            'rows' => 12,
            'placeholder' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_6565a9f31e87a',
            'label' => 'Locations',
            'name' => 'locations',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'layout' => 'table',
            'min' => 1,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_6565aa6a1e87d',
                    'label' => 'Title',
                    'name' => 'title',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'show_in_graphql' => 1,
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_6565a9f31e87a',
                ),
                array(
                    'key' => 'field_6565aa2c1e87b',
                    'label' => 'Latitude',
                    'name' => 'lat',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => 'https://www.latlong.net/',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'show_in_graphql' => 1,
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_6565a9f31e87a',
                ),
                array(
                    'key' => 'field_6565aa5e1e87c',
                    'label' => 'Longitude',
                    'name' => 'long',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => 'https://www.latlong.net/',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'show_in_graphql' => 1,
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_6565a9f31e87a',
                ),
            ),
        ),
        array(
            'key' => 'field_6565aa871e87e',
            'label' => 'Icon',
            'name' => 'icon',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'return_format' => 'url',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'png',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_6565aaa81e87f',
            'label' => 'Zoom',
            'name' => 'zoom',
            'aria-label' => '',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'min' => '',
            'max' => '',
            'placeholder' => '',
            'step' => '',
            'prepend' => '',
            'append' => '',
        ),
    ),
    'min' => '',
    'max' => '1',
);