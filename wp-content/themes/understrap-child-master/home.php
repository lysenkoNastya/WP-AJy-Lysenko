<?php
/**
 * Template name: Blog
 * The template for displaying portfolio.
 *
 * @package understrap
 */
get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<section class="blog-section">
   <div class="container-fluid">
       <header class="blog-section-header text-center">
           <div class="container">
               <h2 class="general-title blog-section-header-title "><?php esc_html_e('Blog Posts', 'understrap'); ?></h2>
           </div>
       </header>
   </div>
</section>

<?php if ( is_front_page() && is_home() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

<div class="blog-section-main row">
    <div class="blog-section-main-content col-lg-9 col-sm-6">
        <ul class="blog-section-list align-content-center d-flex flex-wrap grid">
             <?php while ( have_posts() ) : the_post(); ?>
                <li class="blog-section-list-item col-12 col-md-12 col-lg-5 grid-item">
                    <div class="blog-section-list-item blog-section-wrapper list-item-text-block text-justify">
                        <a href="<?php the_permalink(); ?>" class="list-item-text-block-link d-inline-block"><i class="fa fa-share fa-3x arrow-style" aria-hidden="true"></i>
                           <?php the_post_thumbnail();?>
                        </a>
                        <div class="blog-info">
                            <h2 class="blog-text-block">
                                <a class="blog-section-list-item-title d-block text-left" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                             <?php the_excerpt(); ?>
                         </div>
                        <div class="about-post-wrapper blog-section-list-item-info text-center">
                            <span class="blog-section-list-item-info-like">
                                <i class="fal fa-clock"></i>
                            </span>
                            <span class="date"><?php the_date('m, d, y,'); ?></span>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <aside class="blog-section-aside col-lg-3 col-sm-5 col-12 d-inline-block text-center">
        <div>
            <?php dynamic_sidebar( 'Sidebar-single-search-sone' ); ?>
        </div>
    </aside>


<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
</div>


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
