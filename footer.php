<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NinjaResto
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">

		<ul>
					<li>New York Restaurant</li>
					<li>3926 Anmore Road</li>
					<li>New York, Ny 10014</li>
					<li>718-749-1714</li>
				</ul>
				<ul>
					<li>France Restaurant</li>
					<li>68, rue de la Couronne</li>
					<li>75002 Paris</li>
					<li>02.94.23.69.56</li>
				</ul>
				<ul>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul>
					<li><img src="<?php echo(get_template_directory_uri()); ?>/img/white-logo.png" alt="white logo"></li>
					<li>&copy; All rights reserved 2016</li>
					<li><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ninjaresto' ), 'ninjaresto', '<a href="http://www.etiennebelanger.com" rel="designer">Etienne Belanger</a>' ); ?></li>
				</ul>

				<?php dynamic_sidebar('footer'); ?>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
