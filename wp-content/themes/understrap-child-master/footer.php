<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
<footer class="site-footer" id="colophon">
    <section class="clients-section">
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="footer-clients text-center">
                <?php dynamic_sidebar( 'footer-clients' ); ?>
            </div>
        </div>
    </section>
    <section class="contact-us-section">
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="row">
                <div class="contact-us col-sm-6">
                    <span class="contact-us-text">
                        <?php dynamic_sidebar( 'Footer-contact-us' ); ?>
                    </span>
                    <ul class="footer-contact-us-list">
                        <li class="footer-contact-us-item phone">
                            <?php echo get_theme_mod('contact_phone', 'Текст копирайта еще не придумали'); ?>
                        </li>
                        <li class="footer-contact-us-item d-block address">
                            <?php echo get_theme_mod('contact_address', 'Текст копирайта еще не придумали'); ?>
                        </li>
                    </ul>
                     <iframe width="100%" height="300" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJf5dkYIZL0UAR2LXLqSPn3Pg&key=AIzaSyDgjee8eD-dd7lAcAzu_bK2iZSD--SVxdg" allowfullscreen></iframe>
                </div>
                <div class="contact-us-form col-sm-6">
                    <?php echo do_shortcode('[contact-form-7 id="115" title="Contact form"]'); ?>
                </div>
             </div>
        </div>
    </section>
    <section class="footer-logo-section">
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="footer-logo text-center">
            <!-- Your site create logo -->
                <?php if ( ! has_custom_logo() ) { ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="navbar-brand mb-0">
                            <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                    <?php else : ?>
                        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    <?php endif; ?>
                <?php } else {
                    the_custom_logo();
                } ?><!-- end custom logo -->
            </div>
        </div>
    </section>
    <section class="footer-copyright-section">
        <div class="<?php echo esc_attr( $container ); ?>">
            <?php dynamic_sidebar( 'Footer-copyright' ); ?>
         </div>
    </section>
</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<?php wp_footer(); ?>

</body>

</html>

