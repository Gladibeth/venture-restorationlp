<?php
/**
 * Template Name: Home
 * Template Post Type: page
 * 
 * @package WordPress
 * @subpackage venture
 * @since 1.0.0
 */

// header
get_header();

//Section banner
get_template_part('template-parts/home/banner');

//Section about
get_template_part('template-parts/home/about');

//Section service
get_template_part('template-parts/home/service');

//Section project
get_template_part('template-parts/home/project');

//Section testimonial
get_template_part('template-parts/home/testimonial');

//Section contact
get_template_part('template-parts/home/contact');

//footer
get_footer(); 

?>