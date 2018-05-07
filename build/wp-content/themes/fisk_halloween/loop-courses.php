<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-courses.php.
 *
 * @package WordPress
 * @subpackage fisk_halloween
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="conteudo_pagina">
				<!--<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>-->
						<?php
							$idP = get_the_ID();
							$classC = "";
							if( $idP <= 336 && $idP >= 328 || $idP == 320 )
								$classC = "turquesa";
							else if( $idP <= 324 && $idP >= 316 && $idP != 320 && $idP != 318 )
								$classC = "laranja";
							else if( $idP < 315 && $idP > 279 || $idP == 860 )
								$classC = "azul"; 
							else if( $idP == 318 )
								$classC = "verde";
						?>
					<!--<div class="entry-content">-->
						<?php /*?><?php the_content(); ?><?php */?>
                        <?php if( $idP == 17 )
							{ ?>
                            <h1 class="title-<?php the_ID(); ?>" id="pagina_titulo"><?php the_title(); ?></h1>
                            <div id="quadro_cursos">
                                <div class="bloco_curso" id="bloco_ingles">
                                    <img class="alignleft size-full wp-image-254" title="ingles" src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/ingles.gif" alt="" width="80" height="90" />
                                    <h2>Inglês</h2>
                                    <p>Na FISK, crianças a partir de 4 anos já começam a se comunicar em inglês. Veja quais as opções que a FISK oferece para crianças, jovens e adultos. </p>
                                    <p><a href="<?php echo get_page_link( "311" ) ?>">Veja os Cursos de Inglês</a></p>
                                </div>
                                <div class="bloco_curso" id="bloco_espanhol">
                                    <img src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/espanhol.gif" alt="" title="espanhol" width="80" height="90" class="alignleft size-full wp-image-262" />
                                    <h2>Espanhol</h2>
                                    <p>Na FISK, Espanhol agora começa mais cedo. Confira abaixo as opções que a FISK oferece para adolescentes, jovens e adultos:</p>
                                    <p><a href="<?php echo get_page_link( "316" ) ?>">Veja os Cursos de Espanhol</a></p>
                                </div>
                                <div class="bloco_curso" id="bloco_portugues">
                                    <img src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/portugues.gif" alt="" title="portugues" width="80" height="90" class="alignleft size-full wp-image-263" />
                                    <h2>Português para Brasileiros</h2>
                                    <p>Não tropece mais! Aprimore suas habilidades de escrita e fala com a FISK.</p>
                                    <p><a href="<?php echo get_page_link( "318" ) ?>">Veja os Cursos de Português</a></p>
                                </div>
                                <div class="bloco_curso" id="bloco_informatica">
                                    <img src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/informatica.gif" alt="" title="informatica" width="80" height="90" class="alignleft size-full wp-image-264" />
                                    <h2>Informática</h2>
                                    <p>Mantenha-se atualizado e profissionalize-se com nossos diversos cursos de Informática!</p>
                                    <p><a href="<?php echo get_page_link( "320" ) ?>">Veja os Cursos de Informática</a></p>
                                </div>
                            </div>
                        <?php }
						else { ?>
                        	<p id="bt_voltar" class="<?php echo $classC; ?>"><a href="<?php echo get_page_link( "17" ); ?>" title="Voltar para os Cursos">Voltar para os Cursos</a></p>
                            <h1 class="title-<?php the_ID(); ?>" id="pagina_titulo"><?php the_title(); ?></h1>
                        	<?php the_content(); ?>
                            <?php if( $idP < 315 && $idP > 279 || $idP == 860 ) { ?>
                            	<h3 id="lista_niveis_titulo">Cursos:</h3>
								<?php wp_nav_menu( array('menu' => 'cursos_ingles', 'menu_class' => 'menuCourses' )); ?>
                                
							<?php }
								else if( $idP <= 324 && $idP >= 316 && $idP != 320 && $idP != 318 ) { ?>
                                <h3 id="lista_niveis_titulo">Cursos:</h3>
                                <?php wp_nav_menu( array('menu' => 'cursos_espanhol', 'menu_class' => 'menuCourses' )); ?>
                            <?php }
								else if( $idP <= 336 && $idP >= 328 || $idP == 320 ) { ?>
                                <h3 id="lista_niveis_titulo">Cursos:</h3>
                            	<?php wp_nav_menu( array('menu' => 'cursos_informatica', 'menu_class' => 'menuCourses' )); ?>
                            <?php } ?>
                        <?php } ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskhalloween' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'fiskhalloween' ), '<span class="edit-link">', '</span>' ); ?>
					<!--</div> .entry-content -->
				<!--</div> #post-## -->
			</div>
            <div id="navegador">
                <p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
            </div>
            <div id="auxiliar">
                <span id="predios"></span>
                <div id="submenu" class="<?php echo $classC ?>">
                    <?php wp_nav_menu( array('menu' => 'queroserfisk' )); ?>
                </div>
                <div id="banner_institucional">
                    	<?php 
							$idPageNow = get_the_ID();
							if( $idPageNow == 280 || $idPageNow == 282 || $idPageNow == 285 )
							{
								if(function_exists( 'wp_bannerize' )) wp_bannerize( "group=Banner Kids" );
							}
							else if( $idPageNow >= 287 && $idPageNow <= 298 || $idPageNow == 311 )
							{
								if(function_exists( 'wp_bannerize' )) wp_bannerize( "group=Banner Institucional" );
							}
							else if( $idPageNow == 316 || $idPageNow == 322 || $idPageNow == 324 )
							{
								if(function_exists( 'wp_bannerize' )) wp_bannerize( "group=Banner Espanhol" );
							}
							else if( $idPageNow == 318 )
							{
								if(function_exists( 'wp_bannerize' )) wp_bannerize( "group=Banner Portugues" );
							}
							else if( $idPageNow == 320 || $idPageNow >= 328 && $idPageNow <= 336 )
							{
								if(function_exists( 'wp_bannerize' )) wp_bannerize( "group=Banner Informatica" );
							}
							else
							{
								if(function_exists( 'wp_bannerize' )) wp_bannerize( "random=1" );
							}
						?>
                </div>
           </div>
				<?php /*?><?php comments_template( '', true ); ?><?php */?>

<?php endwhile; // end of the loop. ?>