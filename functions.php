<?php
//Adds featured images to posts
  add_theme_support('post-thumbnails');

//Adds widget areas
function blank_widgets_init(){

  //Header
  register_sidebar( array(
    'name'          =>  ('Hero Image'),
    'id'            =>  'hero-image',
    'description'   =>  'Hero Image on Home Page',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));


  //Hero Image Widget
  register_sidebar( array(
    'name'          =>  ('Hero Image'),
    'id'            =>  'hero-image',
    'description'   =>  'Hero Image on Home Page',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //About Us Text Block Widget
  register_sidebar( array(
    'name'          =>  ('Home Text Block'),
    'id'            =>  'home-text',
    'description'   =>  'Widget area for Home Text section',
    'before_widget' =>  '<div class="home-text">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  
  //FOOTER
  //Left Footer
  register_sidebar( array(
    'name'          =>  ('Left Footer'),
    'id'            =>  'left-footer',
    'description'   =>  'Left widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-left">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Middle Footer
  register_sidebar( array(
    'name'          =>  ('Middle Footer'),
    'id'            =>  'middle-footer',
    'description'   =>  'Middle widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-middle">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Right Footer
  register_sidebar( array(
    'name'          =>  ('Right Footer'),
    'id'            =>  'right-footer',
    'description'   =>  'Right widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-right">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

}
add_action('widgets_init','blank_widgets_init');


?>
