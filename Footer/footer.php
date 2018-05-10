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

<footer class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="row">
                        <div class="col-md-3">
                           <?php echo "connect <br> hello@mna.co" ;
                           ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            echo "visit" ;
                            ?>
                            <address>
								164 crosby st. floor 3, new york, ny 10012 
							</address>
						</div>
						<div class="col-md-5">
                            <?php 
                            echo "socialize" ;
                            ?>
                            <nav id="footer-social">
								<ul>
									<li class="twitter"><a href="https://twitter.com/theMMRF?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/twitter.svg" /></a></li>
									<li class="instagram"><a href="https://www.instagram.com/themmrf/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/instagram.svg" /></a></li>
								</ul>
							</nav>
                        <nav id="footer-main">
								<?php  
									if ( has_nav_menu( 'footer' ) ) { 
										wp_nav_menu(
											array(
												'theme_location'  => 'footer',
												'container_class' => '',
												'container_id'    => 'navbarNavDropdown',
												'menu_class'      => 'navbar-nav',
												'fallback_cb'     => '',
												'menu_id'         => 'main-menu',
												'walker'          => new understrap_WP_Bootstrap_Navwalker(),
											)
										);
									}
								?>
							</nav>
						</div>
						<div class="col-md-4">
                            <?php 
                                echo "minds + assembly llc <br>
                                all rights reserved ©2018" ;
                            ?>
						</div>
					</div>
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

