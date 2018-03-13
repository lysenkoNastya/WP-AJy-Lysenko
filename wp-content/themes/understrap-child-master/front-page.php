<?php
/**
 * Template Name: Home
 *
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<section class="home-block-why-us">
    <div class="container">
        <div class="row ">
            <a class="col-sm-6" href="#">
                <image class="create-section-list-item-img" src="<?php the_field('why_us_image'); ?>" alt="why_us_image">
            </a>
            <div class="why-us col-sm-6">
                <h3 class="why-us-title d-block">
                    <?php the_field('why_us_title'); ?>
                </h3>
                <span class="why-us-subtitle d-block">
                    <?php the_field('why_us_subtitle'); ?>
                </span>
                <span class="why-us-sub-subtitle d-block">
                    <?php the_field('why_us_sub_subtitle'); ?>
                </span>
                <p class="why-us-text d-block">
                    <?php the_field('why_us_text'); ?>
                </p>
            </div>
        </div>
        <div class="why-us-scroll text-center">
            <a class="why-us-scroll-link d-inline-block go-anchor" href="#">
                <i class="far fa-angle-down fa-3x why-us-scroll-link-icon"></i>
            </a>
        </div>
    </div>
</section>
<section class="home-block-welcome">
    <div class="container">
        <div class="row">
            <a class="col-sm-5" href="#">
                <image class="create-section-list-item-img" src="<?php the_field('welcome_image'); ?>" alt="welcome_image">
            </a>
            <div class="why-us col-sm-7">
                <h3 class="welcome-title d-block">
                    <?php the_field('welcome_title'); ?>
                </h3>
                 <?php the_field('welcome_text'); ?>
            </div>
        </div>
    </div>
</section>

<section class="home-block-offering">
    <div class="container">
        <header class="offering-header">
            <h2 class="offering-title d-block">
                <?php the_field('offering_title'); ?>
            </h2>
        </header>
        <p class="offering-text">
            <?php the_field('offering_subtitle'); ?>
        </p>
        <ul class="offering-list row">
            <li class="offering-list-item col-sm-4">
                <a class="offering-list-item-link" href="#">
                    <image class="offering-list-item-img" src="<?php the_field('offering_block_image1'); ?>" alt="offering_block_image1">
                </a>
                <h3 class="offering-list-item-title">
                    <?php the_field('offering_block_title1'); ?>
                </h3>
                <p class="offering-list-item-title">
                    <?php the_field('offering_block_subtitle1'); ?>
                </p>
            </li>
            <li class="offering-list-item col-sm-4">
               <a class="" href="#">
                   <image class="offering-list-item-img" src="<?php the_field('offering_block_image2'); ?>" alt="offering_block_image2">
               </a>
               <h3 class="offering-list-item-title">
                   <?php the_field('offering_block_title2'); ?>
               </h3>
               <p class="offering-list-item-title">
                    <?php the_field('offering_block_subtitle2'); ?>
               </p>
            </li>
            <li class="offering-list-item col-sm-4">
                <a class="" href="#">
                    <image class="offering-list-item-img" src="<?php the_field('offering_block_image3'); ?>" alt="offering_block_image3">
                </a>
                <h3 class="offering-list-item-title">
                    <?php the_field('offering_block_title3'); ?>
                </h3>
                <p class="offering-list-item-title">
                    <?php the_field('offering_block_subtitle3'); ?>
                </p>
            </li>
        </ul>
    </div>
</section>

<section class="home-block-work">
    <div class="container text-center">
        <header class="offering-header">
            <h2 class="work-title d-block">
                <?php the_field('latest_work_title'); ?>
            </h2>
        </header>
        <p class="work-text">
            <?php the_field('latest_work_subtitle'); ?>
        </P>
        <div id="options">
              <ul id="filters" class="work-list">
                <li class="work-list-item menu-list-link"><button class="button" data-filter="*"></button></li>
                <?php
                  $terms = get_terms( 'work' );

                  if( $terms && ! is_wp_error($terms) ){
                    foreach( $terms as $term ){
                      ?>
                      <li class="work-list-item work-menu-list-link d-inline-block"><button class="work-block-button" data-filter="<?='.' . $term->slug; ?>"><?= $term->name; ?> </button></li>
                      <?php
                    }
                  }
                ?>
              </ul>
            </div>
            <ul class="row mx-auto isotope grid">
              <?php
              $query = new WP_Query( array('post_type' => array( 'work' )) );
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
                  ?>
                  <li class="col-md-4 work-item-img grid-item <?php
                    $terms = get_the_terms(get_the_ID(), 'work');
                      if( $terms && ! is_wp_error($terms) ){
                        foreach( $terms as $term ){
                          echo $term->slug . ' ';
                        }
                      }
                  ?>">
                    <div class="work-img">
                      <?php the_post_thumbnail(); ?>
                      <div class="overlay">
                        <a href="<?php echo get_the_permalink(); ?>">
                        </a>
                      </div>
                    </div>
                  </li>
                  <?php
                }
              } else {
                // Постов не найдено
              }
              wp_reset_query();
              wp_reset_postdata();
              ?>
            </ul>
</div>
    </div>
</section>

<?php get_footer(); ?>
