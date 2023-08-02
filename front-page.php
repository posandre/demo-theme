<?php
/**
 * The template for displaying Front page
 *
 * Template Name: Front page
 *
 */

get_header();
?>

    <main class="demo-theme__container">
        <?php get_template_part('template-parts/front-page/content', 'section1'); ?>
        <?php get_template_part('template-parts/front-page/content', 'section2'); ?>
        <?php get_template_part('template-parts/front-page/content', 'section3'); ?>
        <?php get_template_part('template-parts/front-page/content', 'section4'); ?>
    </main><!-- #main -->

<?php
get_footer();