<?php
/**
 * The template for displaying attachments.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2012
 * @since Fisk Brasilia 2012 1.0
 */

get_header(); ?>

		<div id="container" class="single-attachment">
			<div id="content" role="main">
				<h1>Arquivo attachment.php</h1>
			<?php
			/* Run the loop to output the attachment.
			 * If you want to overload this in a child theme then include a file
			 * called loop-attachment.php and that will be used instead.
			 */
			get_template_part( 'loop', 'attachment' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
