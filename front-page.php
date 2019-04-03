<?php
/**
 * The template for home page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>
    <?php $image2 = get_field('background_image_main');
        if( !empty($image2) ):
            $url2 = $image2['url'];
        endif;
    ?>

     <div id="home" class="container-fluid text-uppercase text-white
            d-flex flex-column justify-content-center align-items-center"
            data-parallax="scroll" data-image-src="<?php echo $url2; ?>">
        <div class="d-flex hero">
            <div class="hero-image">

            <?php $image3 = get_field('image-main');
                if( !empty($image3) ):
                    $url3 = $image3['url'];
                endif;
            ?>

                <img src="<?php echo $url3; ?>" alt="<?php the_field('image-main-alt'); ?>">
            </div>
            <div class="hero-text d-flex flex-column justify-content-center">
                <h5 class="letter-spacing-big"><?php the_field('text_main_line_one'); ?></h5>
                <h1><?php the_field('text_main_line_two'); ?></h1>
                <p><?php the_field('text_main_line_three'); ?></p>
                <p><?php the_field('text_main_line_four'); ?></h4>
            </div>
        </div>
        <a href="/#about" class="more">
            <button class="button"><?php the_field('main_button_text'); ?></button>
        </a>
     </div>

     <?php $image4 = get_field('background_image_home_about');
        if( !empty($image4) ):
            $url4 = $image4['url'];
        endif;
    ?>

     <div id="about" class="container-fluid  pb-5 pt-5
          d-flex flex-column justify-content-center align-items-center"
          data-parallax="scroll" data-image-src="<?php echo $url4; ?>">
        <div class="text-center">
            <h4 class="second-font font-weight-bold"><?php the_field('home_about_title_one'); ?></h4>
            <p><?php the_field('home_about_title_two'); ?></p>
        </div>

        <?php if( have_rows('about_item') ):
            while ( have_rows('about_item') ) : the_row();
            $image5 = get_sub_field('about_block_image');
            if( !empty($image5) ):
                $url5 = $image5['url'];
            endif;
        ?>

        <div class="about-block pt-5 d-flex">
            <div class="block-image d-flex flex-column justify-content-center align-items-center">
                <img src="<?php echo $url5; ?>" alt="<?php the_sub_field('about_block_image_alt'); ?>">
                <p class="second-font font-weight-bold"><?php the_sub_field('about_block_image_text_one'); ?></p>
                <p><?php the_sub_field('about_block_image_text_two'); ?></p>
            </div>
            <div class="block-text pt-5">
                <h5 class="text-uppercase letter-spacing"><?php the_sub_field('about_block_title'); ?></h5>
                <p><?php the_sub_field('about_block_text'); ?></p>
            </div>
        </div>

        <?php   endwhile;
            else :
            endif;
          ?>
     </div>

     <?php $image6 = get_field('home_work_background_image');
        if( !empty($image6) ):
            $url6 = $image6['url'];
        endif;
    ?>
     <div id="work" class="container-fluid pt-5 pb-5 text-white
          d-flex flex-column justify-content-center align-items-center"
          data-parallax="scroll" data-image-src="<?php echo $url6; ?>">
        <div class="text-center pb-3">
            <h4 class="letter-spacing text-uppercase"><?php the_field('home_work_title'); ?></h4>
        </div>
        <div class="work-block mb-2 d-flex align-items-center">
            <div class="block-big d-flex flex-column justify-content-center align-items-center">
                <a href="/works">
                    <div class="block-item d-flex flex-column justify-content-center align-items-center">

                    <?php $image7 = get_field('home_work_one_image');
                        if( !empty($image7) ):
                            $url7 = $image7['url'];
                        endif;
                    ?>

                        <img class="block-item--image" src="<?php echo $url7; ?>" alt="<?php the_field('home_work_one_image_alt'); ?>">
                        <div class="block-item--name align-self-start">
                            <h4 class="letter-spacing"><?php the_field('home_work_title_one'); ?></h4>
                            <h4 class="second-font font-weight-bold"><?php the_field('home_work_one_title_description'); ?></h4>
                        </div>
                    </div>
                </a>
                <div class="block-big__text font-weight-light pt-2">
                    <p><?php the_field('home_work_text'); ?></p>
                </div>
            </div>
            <div class="block-small d-flex flex-column justify-content-center align-items-center">
                <a href="/works">

                <?php $image8 = get_field('home_work_two_image');
                    if( !empty($image8) ):
                        $url8 = $image8['url'];
                    endif;
                ?>

                    <div class="block-item d-flex flex-column justify-content-center align-items-center">
                        <img class="block-item--image" src="<?php echo $url8; ?>" alt="<?php the_field('home_work_two_image_alt'); ?>">
                        <div class="block-item--name align-self-start">
                            <h4 class="letter-spacing"><?php the_field('home_work_title_two'); ?></h4>
                            <h4 class="second-font font-weight-bold"><?php the_field('home_work_two_title_description'); ?></h4>
                        </div>
                    </div>
                </a>
                <a href="/works">
                    <div class="block-item d-flex flex-column justify-content-center align-items-center">

                    <?php $image9 = get_field('home_work_three_image');
                        if( !empty($image9) ):
                            $url9 = $image9['url'];
                        endif;
                    ?>
                        <img class="block-item--image" src="<?php echo $url9; ?>" alt="<?php the_field('home_work_two_image_alt'); ?>">
                        <div class="block-item--name align-self-start">
                            <h4 class="letter-spacing"><?php the_field('home_work_title_three'); ?></h4>
                            <h4 class="second-font font-weight-bold"><?php the_field('home_work_three_title_description'); ?></h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a href="/work">
            <button class="button">See more</button>
        </a>
     </div>



<?php get_footer();

?>