<?php
add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key' => 'group_64ca2e2e397ac',
        'title' => 'Section 1',
        'fields' => array(
            array(
                'key' => 'field_64ca2e2e3406e',
                'label' => 'Title',
                'name' => 'section1_title',
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
                'default_value' => 'Reading Flow™',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3a7e3406f',
                'label' => 'Subtitle',
                'name' => 'section1_subtitle',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'A patented technology that improves reading speed and accuracy.
<span class="marker">Now on UserWay</span>.',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_64ca3add34070',
                'label' => 'Text',
                'name' => 'section1_text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'UserWay is proud to partner with Beeline Reader to offer <strong>Reading Flow™</strong>, a patented text display innovation that makes reading on-screen texts easier, faster, and more enjoyable.',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_64ca3b1034071',
                'label' => 'Video link',
                'name' => 'section1_video_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'google.com',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_64ca3b5934072',
                'label' => 'Button link',
                'name' => 'button_link',
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
                'default_value' => 'google.com',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3be034073',
                'label' => 'Bottom title',
                'name' => 'section1_bottom_title',
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
                'default_value' => 'Breeze Through Long Texts',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3bfd34074',
                'label' => 'Bottom text',
                'name' => 'section1_bottom_text',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '<strong>Reading Flow™</strong> works by using a simple cognitive trick — an eye-guiding color gradient — to pull your eyes through long blocks of text, helping improve focus, concentrating and reading speed.
The Intel-backed technology has won awards from the United Nations and Stanford University, and has been adopted by top US colleges and universities. The technology has also received widespread recognition by Scientific American, the United Nations and Google who hail BeeLine for its benefits to people with ADHD, Dyslexia and as a general tool to i<strong>mprove reading speed & comprehension</strong> for everyone.
<strong>Reading Flow™</strong> is the latest addition to the best-in-class accessibility functions offered by UserWay.',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );

    acf_add_local_field_group( array(
        'key' => 'group_64ca3ce60c772',
        'title' => 'Section 2',
        'fields' => array(
            array(
                'key' => 'field_64ca3ce6a9e50',
                'label' => 'Title',
                'name' => 'section2_title',
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
                'default_value' => 'A Better Way To Read',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3d0ca9e51',
                'label' => 'Subtitle',
                'name' => 'subtitle',
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
                'default_value' => 'Let the Gradients Guide Your Eyes',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3d21a9e52',
                'label' => 'Text',
                'name' => 'section2_text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'The technology behind <strong>Reading Flow™</strong> is ingeniously simple. It applies a color gradient to the main body text of the page that reduces confusion and inadvertent line skips. The patented gradients wrap from the end of one line to the beginning of the next. This color grouping technique helps your eyes quickly locate the next line, significantly impact reading accuracy, speed and comprehension for people who spend a lot of time reading online as well as those with visual processing challenges, visual impairments, dyslexia, and learning disabilities.',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_64ca3d57a9e53',
                'label' => 'Button link',
                'name' => 'section2_button_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'google.com',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );

    acf_add_local_field_group( array(
        'key' => 'group_64ca3d901db1b',
        'title' => 'Section 3',
        'fields' => array(
            array(
                'key' => 'field_64ca3da34b124',
                'label' => 'Title',
                'name' => 'section3_title',
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
                'default_value' => 'Reading Flow™ Increases User Engagement',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3dd94b125',
                'label' => 'Subtitle 1',
                'name' => 'section3_subtitle_1',
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
                'default_value' => 'Metrics that Matter',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3e214b126',
                'label' => 'Text 1',
                'name' => 'section3_text_1',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Experiments comparing Reading Flow™ to standard black text have demonstrated its power in making content more accessible for people with dyslexia, ADHD, and a variety of visual impairments. It also has a positive effect on website engagement metrics. Studies have found website visitors read nearly 50% further into articles than people reading traditional black text. They also visit about 45% more pages on sites that use UserWay’s Reading Flow™.',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_64ca3e404b127',
                'label' => 'Button 1 link',
                'name' => 'section3_button_1_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'google.com',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_64ca3e674b128',
                'label' => 'Subtitle 2',
                'name' => 'section3_subtitle_2',
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
                'default_value' => 'Customizable Colors Customizable Accessibility',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3e924b129',
                'label' => 'Text 2',
                'name' => 'section3_text_2',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_64ca3eb84b12a',
                'label' => 'Buttun 2 link',
                'name' => 'section3_buttun_2_link',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'google.com',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );

    acf_add_local_field_group( array(
        'key' => 'group_64ca3ee778fc9',
        'title' => 'Section 4',
        'fields' => array(
            array(
                'key' => 'field_64ca3ee7d17be',
                'label' => 'Title',
                'name' => 'section4_title',
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
                'default_value' => 'Get Reading Flow™ For Your Website Today',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3f14d17bf',
                'label' => 'Subtitle',
                'name' => 'section4_subtitle',
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
                'default_value' => 'Read more, Engage Longer',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_64ca3f2fd17c0',
                'label' => 'Text',
                'name' => 'section4_text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'The benefits of having Reading Flow™ on your website are many. Not only does it make your content accessible to a wider audience, but it also keeps readers engaged for longer. When combined with the AI-Powered UserWay Accessibility, your site becomes more readable, compliant, and overall more accessible — even as new content and pages are added to your site.',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_64ca3f51d17c1',
                'label' => 'Button link',
                'name' => 'section4_button_link',
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
                'default_value' => 'google.com',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );
} );

