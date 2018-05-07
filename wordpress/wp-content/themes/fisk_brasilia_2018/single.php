<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2012
 * @since Fisk Brasilia 2012 1.0
 */

get_header(); ?>

		<!--<div id="container">-->
			<main class="main-content">
			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</main><!-- #content -->
		<!--</div> #container -->

<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
