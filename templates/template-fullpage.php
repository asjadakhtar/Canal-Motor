<?php 
/*
 * Template Name: Fullpage Template
 *
 */
get_header(); ?>

<main id="fullpage-template" class="main-content overflow-hidden <?php echo esc_attr(get_post_field('post_name', get_post())); ?>">
    <div id="fullpage">
        <?php the_content(); ?>
        </div>
    </main>

<?php get_footer(); ?>