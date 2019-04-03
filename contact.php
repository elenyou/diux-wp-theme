<?php
/* Template Name: Contact */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

	 <div id="contact" class="container-fluid pt-5 pb-4 text-white
          d-flex flex-column justify-content-center align-items-center"
          data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg-work.png">
        <div class="text-center pb-2 pt-5">
            <h4 class="letter-spacing text-uppercase">Contact us</h4>
        </div>
        <form class="d-flex pb-4 align-items-center justify-content-center">
            <div class="d-flex align-items-center flex-column justify-content-center">
                <div class="form-group">
                    <input type="name" class="input" id="name" placeholder="Full name">
                </div>
                <div class="form-group">
                    <input type="email" class="input" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="input" id="number" placeholder="Phone number">
                </div>
            </div>
            <div class="form-group">
                <textarea id="message" class="input input__textarea" placeholder="Message"></textarea>
            </div>
        </form>
        <button href="#" type="submit" class="button">Send</button>
     </div>


<?php get_footer();

?>