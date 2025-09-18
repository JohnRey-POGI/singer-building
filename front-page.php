<?
function child_add_meta_viewport() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}
add_action('wp_head', 'child_add_meta_viewport'); ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/hero'); ?>
<?php get_template_part('template-parts/why'); ?>
<?php get_template_part('template-parts/portfolio'); ?>
<?php get_template_part('template-parts/experience'); ?>
<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>
