<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5ffc51875a17b',
        'title' => 'Page Builder - Module - Raw Code',
        'fields' => array(
            array(
                'key' => 'field_6010089610206',
                'label' => 'Enabled',
                'name' => 'enabled',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'message' => '',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_6040a091892c1',
                'label' => 'Label',
                'name' => 'label',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '80',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ffc51b1bf53e',
                'label' => 'Raw Code',
                'name' => 'raw_code',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 12,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_600e9048cebf2',
                'label' => '<span class="mdi mdi-help"></span> Help',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_600e906ccebf3',
                'label' => '',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '<h1>List of special functionality in rawcode blocks.</h1>
    
    <h2>[[shortcodes]]</h2>
    <p>All shortcodes will be run and created as normal.</p>
    
    
    <h2>{{moustaches}}</h2>
    <p>Moustaches are custom functionality to implement into the code. Below is a list of those funcitons.</p>
    
    <h3><code>{{random_image_url:4,75,23,75}}</code></h3>
    <p>You can generate a random image URL by using this moustache and supplying the image IDs.</p>
    
    <h2>PHP CODE</h2>
    <p>PHP Code can also be passed through \'eval()\'. Remember to add the open/close php tags too! Since the code will run the code there and then, do not use <code>echo</code>, rather use <code>return</code> to place the result back in the place you called it.</p>
    <p>Note, that to use the PHP code in a taxonomy page, you can do do something like this:</p>
    <p>
    <code>$term = get_queried_object(); return $term->name;</code>
    </p>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => false,
        'description' => '',
    ));
    
    endif;
