<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image-home">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates featured-image-container">

  <h1 class="page-title contact-heading">CONTACT</h1>

     <div class="row contact">

       <div class="seven columns contact">
         <?php dynamic_sidebar(''); ?>
       </div>

      <div class="three columns contact-form">
       <?php
         if(have_posts()){
           while(have_posts()){
             the_post();?>
             <?php the_content();
           }//end while
         }//ends if
       ?>
     </div>

    </div>

</div>


<?php get_footer(); ?>
