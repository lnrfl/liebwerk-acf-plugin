<?php 

$testimonials = array(
    'key' => 'layout_6548b67abad32',
    'name' => 'testimonial',
    'label' => 'Testimonial',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_6548b67abad33',
            'label' => 'Section Heading',
            'name' => 'heading',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
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
            'key' => 'field_6548b67abad34',
            'label' => 'Section Heading Tag',
            'name' => 'heading_tag',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
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
            'key' => 'field_6548b67abad36',
            'label' => 'Testimonials',
            'name' => 'testimonials',
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
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_6548b67abad37',
                    'label' => 'Testimonial',
                    'name' => 'testimonial',
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
                        0 => 'testimonials',
                    ),
                    'post_status' => '',
                    'taxonomy' => '',
                    'return_format' => 'object',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 1,
                    'parent_repeater' => 'field_6548b67abad36',
                ),
            ),
        ),
        array(
            'key' => 'field_6548b67abad39',
            'label' => 'Hintergrund',
            'name' => 'background',
            'aria-label' => '',
            'type' => 'radio',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'choices' => array(
                'none' => 'Weiß',
                'grey' => 'Grau',
            ),
            'default_value' => '',
            'return_format' => 'value',
            'allow_null' => 0,
            'other_choice' => 0,
            'layout' => 'vertical',
            'save_other_choice' => 0,
        ),
    ),
    'min' => '',
    'max' => '',
);