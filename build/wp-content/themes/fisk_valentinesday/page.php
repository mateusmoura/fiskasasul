<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage fisk_valentinesDay
 * @since Fisk Valentines Day 1.0
 */

get_header(); ?>

		<!--<div id="container">-->
			<div id="conteudo" role="main">
				<?php
                	$idpage = get_the_ID();
					
					if( $idpage == 49 )
						"1";//get_template_part( "loop", "posts" );
					else if( $idpage == 216 )
						get_template_part( "loop", "home" );
					else if( $idpage == 47 )
						get_template_part( "loop", "events" );
					else if( $idpage == 17 || $idpage <= 336 && $idpage >= 279 || $idpage == 860 )
						get_template_part( "loop", "courses" );
					else if( $idpage == 68 )
						get_template_part( "loop", "contact" );
					else if( $idpage == 229 || $idpage == 231 || $idpage == 39 )
						get_template_part( "loop", "content_big" );
					else
                		get_template_part( 'loop', 'page' );
                ?>
                
				
                
			</div><!-- #content -->
		<!--</div>< #container -->
<?php /*?><?php get_sidebar(); ?><?php */?>        
<?php get_footer(); ?>
