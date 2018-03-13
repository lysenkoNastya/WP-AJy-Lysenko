<?php
/**
 * The template for displaying all single posts.
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
               <h2 class="general-title blog-section-header-title "><?php esc_html_e('Best Phons Of all Time in the World', 'understrap'); ?></h2>
           </div>
       </header>
   </div>
</section>

<?php if ( is_front_page() && is_home() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

<div class="blog-section-main row">
    <div class=" col-lg-9 col-sm-6">
        <div class="single-main-content">
             <?php while ( have_posts() ) : the_post(); ?>
                <div class="single-wrapper list-item-text-block text-justify ">
                <div class="row single-posts">
                    <a href="<?php the_permalink(); ?>" class="d-inline-block col-sm-5">
                       <?php the_post_thumbnail();?>
                    </a>
                    <div class="col-sm-7 text-posts">
                        <h2 class="single-text-block d-inline-block">
                            <a class="single-list-item-title text-left" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_excerpt(); ?>
                    </div>
                    </div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php understrap_post_nav(); ?>
     </div>
    <aside class="blog-section-aside col-lg-3 col-sm-5 col-12 d-inline-block text-center">
        <div>
            <?php dynamic_sidebar( 'Sidebar-single-search-sone' ); ?>
        </div>
    </aside>
</div>
</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

