<?php
/**
 * Template Name: Single Project
 * Template for displaying single project posts
 * Save this file as: single-projects.php in your theme directory
 */

get_header(); ?>

<section class="py-32 md:py-24 my-0 md:my-24">
        <?php 
    while (have_posts()) : the_post();
        $logo = get_field('project_logo');
        
        // Get project name - ACF field or post title
        $name = get_field('project_name');
        if (!$name) {
            $name = get_the_title();
        }
        
        $website = get_field('project_website');
        
        // Get project tags - ACF field or taxonomy
        $tags = get_field('project_tags');
        if (!$tags) {
            $taxonomy_tags = get_the_terms(get_the_ID(), 'project_category');
            if ($taxonomy_tags && !is_wp_error($taxonomy_tags)) {
                $tags = array();
                foreach ($taxonomy_tags as $tax_tag) {
                    $tags[] = array('tag' => $tax_tag->name);
                }
            }
        }
        
        // Get featured image or hero image
        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if (!$featured_image) {
            $hero_image_field = get_field('project_hero_image');
            $featured_image = $hero_image_field ? $hero_image_field['url'] : '';
        }
    ?>
    <?php endwhile; ?>

</section>

<?php get_footer(); ?>