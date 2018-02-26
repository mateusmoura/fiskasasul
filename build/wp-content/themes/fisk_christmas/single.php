<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage fisk_christmas
 * @since Fisk Christmas 1.0
 */

get_header(); ?>

		<!--<div id="container">-->
			<div id="conteudo" role="main">
			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
		<!--</div> #container -->

<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
