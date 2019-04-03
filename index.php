<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php $image12 = get_field('work_background_image');
    if( !empty($image12) ):
      $url12 = $image12['url'];
    endif;
  ?>

<div id="work-list" class="container-fluid pt-5 pb-5 text-white
          d-flex flex-column justify-content-center align-items-center"
          data-parallax="scroll" data-image-src="<?php echo $url12; ?>">
		<div class="text-center pb-4 pt-5">
			<h4 class="letter-spacing text-uppercase">Work</h4>
		</div>
		<div class="work-list d-flex flex-column justify-content-center align-items-center">

      <?php $loop = new WP_Query( array('post_type' => 'Works', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC') );

        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="item pb-2 d-flex justify-content-center align-items-center">
          <div class="left">

          <?php $image1 = get_field('work_image');
            if( !empty($image1) ):
              $url = $image1['url'];
            endif;
          ?>
            <img class="item-image" src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
            <div class="item-name">
              <h4 class="letter-spacing"> <?php the_field('work_name'); ?></h4>
              <h4 class="second-font font-weight-bold"> <?php the_field('work_short_description'); ?></h4>
              <div class="line-white"></div>
              <p> <?php the_field('work_long_description'); ?></p>
            </div>
          </div>
          <div class="right letter-spacing">
            <h5 class="font-weight-bold second-font"><?php the_field('title_short'); ?></h5>
            <div class="line-blue"></div>
            <p><?php the_field('work_text'); ?></p>
            <div class="share pt-3">
              <p>share</p>
              <div class="share-link font-weight-light">
                  <a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank">Tw</a>
                  <a href="https://www.facebook.com/sharer?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank">Fb</a>
                  <a href="#" target="_blank">In</a>
                  <a href="https://www.linkedin.com/cws/share?url=.<?php the_permalink(); ?>." target="_blank">Ln</a>
              </div>
            </div>
          </div>
        </div>

      <?php
        endwhile;
        wp_reset_query();
      ?>
		</div>
</div>


<?php get_footer();?>