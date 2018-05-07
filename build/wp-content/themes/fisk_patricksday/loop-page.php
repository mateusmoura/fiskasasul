<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage fisk_patricksday
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="conteudo_pagina">
				<!--<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>-->
					<?php if ( is_front_page() ) { ?>
						<h2 class="title-<?php the_ID(); ?>" id="pagina_titulo"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="title-<?php the_ID(); ?>" id="pagina_titulo"><?php the_title(); ?></h1>
					<?php } ?>

					<!--<div class="entry-content">-->
						<?php the_content(); ?>
                        
                        <?php 
							if( get_the_ID() == 19 || get_the_ID() == 21  ) 
							{
								$args = get_the_ID() == 99
										? array(
									'numberposts'     => 5,
									'offset'          => 0,
									'category'        => 7,6,
									'orderby'         => 'post_date',
									'order'           => 'DESC',
									'include'         => "",
									'exclude'         => "",
									'meta_key'        => "",
									'meta_value'      => "",
									'post_type'       => 'post',
									'post_mime_type'  => "",
									'post_parent'     => "",
									'post_status'     => 'publish' )
									: array(
									'numberposts'     => 5,
									'offset'          => 0,
									'category'        => 7,5,
									'orderby'         => 'post_date',
									'order'           => 'DESC',
									'include'         => "",
									'exclude'         => "",
									'meta_key'        => "",
									'meta_value'      => "",
									'post_type'       => 'post',
									'post_mime_type'  => "",
									'post_parent'     => "",
									'post_status'     => 'publish' );
									
								global $post;
								$tmp_post = $post;
								$myposts = get_posts( $args );?>
                                <h3>Eventos</h3>
                                <ul id="eventos_unidade_local">
								<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?php the_date(); ?></span></li>
								<?php endforeach; ?>
                                <?php $post = $tmp_post; ?>
                               	</ul>
						<?php
                        	 }
						?>
                        
                        
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskpatricksday' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'fiskpatricksday' ), '<span class="edit-link">', '</span>' ); ?>
					<!--</div> .entry-content -->
				<!--</div> #post-## -->
			</div>
            <div id="navegador">
                <p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
            </div>
            <div id="auxiliar">
                <span id="predios"></span>
                <div id="submenu">
					<?php
                        $pageP = $post->post_parent;
                        $pageId = $post->ID;
                        
                        if( $pageP != 0 )
                        {
                            if( $pageP == 8 )
                                //wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,35,37,39,41,43,45,47,49,62,64,66,216&sort_column=menu_order');
                                wp_nav_menu( array('menu' => 'queroserfisk' ));
                            else if( $pageP == 33 )
                                //wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,9,11,15,17,19,21,23,25,62,64,66,216&sort_column=menu_order');
                                wp_nav_menu( array('menu' => 'soufisk' ));
                            else
                                //wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,35,37,39,41,43,45,47,49,9,11,15,17,19,21,23,25,216&sort_column=menu_order');
                                wp_nav_menu( array('menu' => 'servicos' ));
                        }
                        else
                        {
                            if( $pageId == 5 )
                                //wp_list_pages('depth=0&title_li=&exclude=68,5,33,60,2,35,37,39,41,43,45,47,49,62,64,66,216&sort_column=menu_order');
                                wp_nav_menu( array('menu' => 'queroserfisk' ));
                            else if( $pageId == 33 )
                                //wp_list_pages('depth=0&title_li=&exclude=68,5,33,60,2,9,11,15,17,19,21,23,25,62,64,66,216&sort_column=menu_order');
                                wp_nav_menu( array('menu' => 'soufisk' )); 
                            else if( $pageId == 66 )
                                wp_list_pages('depth=0&title_li=&exclude=68,5,33,60,2,35,37,39,41,43,45,47,49,9,11,15,17,19,21,23,25,216&sort_column=menu_order');
                        }
                    ?>
                </div>
                <div id="banner_institucional">
                    <?php if(function_exists( 'wp_bannerize' )) wp_bannerize( "random=1" ); ?>
                </div>
           </div>
				<?php /*?><?php comments_template( '', true ); ?><?php */?>

<?php endwhile; // end of the loop. ?>