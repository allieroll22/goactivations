<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
  <!-- Hero Image Section -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div>

  <!-- About Text Section -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('home-text'); ?>
    </div>
  </div>



<?php get_footer(); ?>
