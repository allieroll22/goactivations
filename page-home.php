<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>


  <!-- Hero Image Section -->
<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image-home">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<h1 class="home-hero-text">Go Big. Go Forward.</h1>
<button class="quote">Get a Quote</button>
<div class="container">
  <!-- Home Text Section -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('home-text'); ?>
    </div>
  </div>



<?php get_footer(); ?>
