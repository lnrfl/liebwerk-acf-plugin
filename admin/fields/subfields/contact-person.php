<?php 

$contact_person = array(
    'key' => 'layout_6527b78e37245',
    'name' => 'contact_person',
    'label' => 'Contact Person',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_6527b78e37246',
            'label' => 'Heading',
            'name' => 'heading',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '80',
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
            'key' => 'field_6527b78e37247',
            'label' => 'Heading Tag',
            'name' => 'heading_tag',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'choices' => array(
                'h1' => 'h1',
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
                'h5' => 'h5',
                'h6' => 'h6',
                'span' => 'Text',
            ),
            'default_value' => 'h2',
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_6527b7a43724b',
            'label' => 'Person',
            'name' => 'person',
            'aria-label' => '',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'post_type' => array(
                0 => 'persons',
            ),
            'post_status' => '',
            'taxonomy' => '',
            'return_format' => 'id',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 1,
        ),
        array(
            'key' => 'field_6527b8671c48c',
            'label' => 'Hintergrund',
            'name' => 'background',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'choices' => array(
                'white' => 'Weiß',
                'color' => 'Farbe',
            ),
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
    ),
    'min' => '',
    'max' => '',
);