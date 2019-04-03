<?php
/**
 * The template for displaying the footer.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

  <footer class="text-uppercase
                d-flex flex-column justify-content-center align-items-center"
                data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer.png">
    <form class="d-flex pb-4 align-items-center">
      <div class="form-group">
        <input type="email" class="input" id="email" placeholder="EMAIL">
      </div>
      <button href="#" type="submit" class="button">Subscribe</button>
    </form>
    <div class="footer-logo d-flex justify-content-center align-items-center">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="logo">
      <p class="p-4">© 2019 Lena</p>
    </div>
  </footer>

<?php wp_footer() ?>

</body>

</html>