<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="<?php echo esc_attr( $container ); ?>">

        <footer class="site-footer" id="colophon">

            <div class="container">
                <div class="row align-items-center">

                    <div class="footer-nav col-md-4">
                        <ul>
                            <li><a href="/our-company">Our Company</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class='my-3'>Address</h5>
                        <p class="lead">123 Toronto, ON M2M 3B2</p>

                        <h5 class='my-3'>Phone</h5>
                        <p class="lead">123-456-7890</p>


                    </div>
                    <div class="col-md-4  text-left">
                        <h5 class='my-3'>Email</h5>
                        <p class="lead">madera@gmail.com</p>
                        <div class="social-nav mt-4">

                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                        </div>


                    </div>
                </div>



            </div>


        </footer><!-- #colophon -->


    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>