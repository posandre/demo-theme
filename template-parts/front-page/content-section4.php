<?php
/**
 *  Content of the section4
 */
$post_id = get_the_ID();

$title = demo_theme_get_acf_field('section4_title', $post_id, __('Get Reading Flow™ For Your Website Today', 'demo-theme'));
$subtitle = demo_theme_get_acf_field('section4_subtitle', $post_id, __('Read more, Engage Longer', 'demo-theme'));
$text = demo_theme_get_acf_field('section4_text', $post_id, __('The benefits of having Reading Flow™ on your website are many. Not only does it make your content accessible to a wider audience, but it also keeps readers engaged for longer. When combined with the AI-Powered UserWay Accessibility, your site becomes more readable, compliant, and overall more accessible — even as new content and pages are added to your site.', 'demo-theme'));
$button_link = demo_theme_get_acf_field('section4_button_link', $post_id, __('https://google.com', 'demo-theme'));
?>

<section class="section section-4">
    <div class="section__title section-4__title"><?php echo $title; ?></div>
    <div class="section__two-colons section-4__two-colons">
        <div class="section__colon-left section-4__colon-left">
            <div class="section__subtitle section-1__colon-title"><?php echo $subtitle; ?></div>
            <div class="section__subtitle section-4__text"><?php echo apply_filters('the_content', $text); ?></div>
            <div class="section__button section-4__button">
                <span><?php _e('Get Reading Flow™', 'demo-theme'); ?></span>
                <a class="section__btn section-4__btn" rel="nofollow" target="_blank" href="<?php esc_attr_e($section4_video_link); ?>"><?php _e('Start Free Trial', 'domo-theme');?></a>
            </div>
        </div>
        <div class="section__colon-right section-4__colon-right">
            <div class="section__image section-4__image">
                <?php demo_theme_the_picture_section('big-image-4.png', 'big-image-4-mob.png', __('Big image 2', 'demo-theme'));?>
            </div>
        </div>
    </div>
</section>