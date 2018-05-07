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
 * @subpackage fisk_brasilia_2018
 * @since Fisk Brasilia 2018 2.0
 */

get_header(); ?>

    <!--<div id="container">-->
      <main class="main-content">
        <?php
                  $idpage = get_the_ID();
          
          if( $idpage == 49 )
            "1";//get_template_part( "loop", "posts" );
          else if( $idpage == 216 )
            get_template_part( "loop", "home" );
          else if( $idpage == 47 )
            get_template_part( "loop", "events" );
          else if( $idpage == 17 || $idpage <= 336 && $idpage >= 279 || $idpage == 860
           || $idpage == 1070 || $idpage == 1389
           || $idpage == 2026 || $idpage == 2034 || $idpage == 2039
           || $idpage == 2044  || $idpage == 2048 || $idpage == 2052
           || $idpage == 2054  || $idpage == 2057
           || $idpage == 2066  || $idpage == 2069 )
            get_template_part( "loop", "courses" );
          else if( $idpage == 68 )
            get_template_part( "loop", "contact" );
          else if( $idpage == 229 || $idpage == 231 || $idpage == 39 )
            get_template_part( "loop", "content_big" );
          else
                    get_template_part( 'loop', 'page' );
                ?>
                
        
                
      </main><!-- #content -->
    <!--</div>< #container -->
<?php /*?><?php get_sidebar(); ?><?php */?>        
<?php get_footer(); ?>
