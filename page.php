<?php
/**
 * The template for displaying all pages.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>


      <?php 
        while ( have_posts() ) : the_post(); 
      
        the_content();

        endwhile;
        
        wp_reset_query();
        ?>


<?php get_footer();

?>