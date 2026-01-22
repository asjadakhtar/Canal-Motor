<?php 
/*
 * Template Name: Container Template Canal
 */
get_header(); ?>

<main id="container-template" class="<?php echo esc_attr(get_post_field('post_name', get_post())); ?>">
 <div id="fullpage">
     <div class="section h-screen bg-amber-400"></div>
     <div class="section h-screen bg-green-500"></div>
     <div class="section h-screen bg-red-500"></div>
     <div class="section h-screen bg-blue-500"></div>
  </div>
</main>

<?php get_footer(); ?>