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
 * @subpackage fisk_brasilia_2018
 * @since Fisk Brasilia 2018 2.0
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div>
    <!-- BREDCRUMB -->
    <div class="bredcrumb bg-image text-center" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/bredcrumb.jpg');">
      <div class="row bredcrumb-inner">
        <div class="col-sm-12  align-self-center">
          <h2><?php the_title(); ?></h2>
          <ul class="">
            <li>
              <a href="<?php echo home_url( '/' ); ?>" class="bread_link">Home</a>
            </li>
            <li><?php the_title(); ?></li>
          </ul>
        </div>
      </div>
    </div>

    <section class="home-services">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <!-- section title -->
            <div class="row justify-content-md-center">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-title title-ex1 text-center">
                  <h2 class="title-text"><?php the_title(); ?></h2>
                  <!-- <p class="description">Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p> -->
                </div>
              </div>
            </div>
            <!-- section title ends -->
            
            <?php
              $idP = get_the_ID();
              $classC = "";
              if( $idP <= 336 && $idP >= 328 || $idP == 320 )
                $classC = "turquesa";
              else if( $idP <= 324 && $idP >= 316 && $idP != 320 && $idP != 318 )
                $classC = "laranja";
              else if( $idP < 315 && $idP > 279 )
                $classC = "azul"; 
              else if( $idP == 318 )
                $classC = "verde";
            ?>

            <?php if( $idP == 17 )
            { ?>
              <div class="row">
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Inglês</h5>
                      <div class="image_container">
                        <img title="ingles" src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/ingles.gif" alt="" />
                      </div>
                      <p class="description">Na FISK, crianças a partir de 4 anos já começam a se comunicar em inglês. Veja quais as opções que a FISK oferece para crianças, jovens e adultos.</p>

                      <a href="<?php echo get_page_link( "311" ) ?>">
                        <button class="btn btn-primary-outlined">
                          Veja os Cursos de Inglês
                        </button>
                      </a>
                    </div>
                  </div>
                  <!-- single info block ends -->
                </div>
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Espanhol</h5>
                      <div class="image_container">
                        <img src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/espanhol.gif" alt="" title="espanhol" />
                      </div>
                      <p class="description">Na FISK, Espanhol agora começa mais cedo. Confira abaixo as opções que a FISK oferece para adolescentes, jovens e adultos:</p>

                      <a href="<?php echo get_page_link( "316" ) ?>">
                        <button class="btn btn-primary-outlined">
                          Veja os Cursos de Espanhol
                        </button>
                      </a>
                    </div>
                  </div>
                  <!-- single info block ends -->
                </div>
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Francês</h5>
                      <div class="image_container">
                        <img src="http://www.fiskasasul.com.br/wp-content/themes/fisk_brasilia_2013/images/badges/frances.png" alt="" title="Francês" />
                      </div>
                      <p class="description">Parlez Français! Agora na FISK você pode também aprender Francês! Conheça o curso de Francês para jovens e adultos.</p>

                      <a href="<?php echo get_page_link( "1070" ) ?>">
                        <button class="btn btn-primary-outlined">
                          Veja o curso de Francês
                        </button>
                      </a>
                    </div>
                  </div>
                  <!-- single info block ends -->
                </div>
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Português para Brasileiros</h5>
                      <div class="image_container">
                        <img src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/portugues.gif" alt="" title="portugues" />
                      </div>
                      <p class="description">Não tropece mais! Aprimore suas habilidades de escrita e fala com a FISK.</p>

                      <a href="<?php echo get_page_link( "318" ) ?>">
                        <button class="btn btn-primary-outlined">
                          Veja os Cursos de Português
                        </button>
                      </a>
                    </div>
                  </div>
                  <!-- single info block ends -->
                </div>
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Informática</h5>
                      <div class="image_container">
                      <img src="http://www.fiskasasul.com.br/wp-content/uploads/2011/03/informatica.gif" alt="" title="informatica" />
                      </div>
                      <p class="description">Mantenha-se atualizado e profissionalize-se com nossos diversos cursos de Informática!</p>

                      <a href="<?php echo get_page_link( "320" ) ?>">
                        <button class="btn btn-primary-outlined">
                          Veja os Cursos de Informática
                        </button>
                      </a>
                    </div>
                  </div>
                  <!-- single info block ends -->
                </div>
              </div>
            <?php }
            else { ?>
              <a href="<?php echo get_page_link( "17" ); ?>" title="Voltar para os Cursos">
                <button class="btn btn-primary-outlined btn-sm" type="submit">Voltar para os Cursos</button>
              </a>

              <section class=".blog-post-contents">
                <div class="media blog-media flex-wrap">
                  <div class="media-body">
                    <?php the_content(); ?>

                    <div class="divider divider-center divider-gradient divider-gradient-gray w50 mx-auto my-5">
                      <i class="fa fa-circle divider-icon bg-white text-primary"></i>
                    </div>

                    <h3 id="lista_niveis_titulo">Cursos:</h3>

                    <?php if( $idP < 315 && $idP > 279 ) { ?>
                    <div class="list-group">
                      <?php wp_nav_menu( array('menu' => 'cursos_ingles', 'menu_class' => 'menuCourses' )); ?>
                    </div>

                    <?php }
                      else if( $idP <= 324 && $idP >= 316 && $idP != 320 && $idP != 318 ) { ?>
                      <div class="list-group">
                        <?php wp_nav_menu( array('menu' => 'cursos_espanhol', 'menu_class' => 'menuCourses' )); ?>
                      </div>
                    <?php }
                      else if( $idP <= 336 && $idP >= 328 || $idP == 320 ) { ?>
                      <div class="list-group">
                        <?php wp_nav_menu( array('menu' => 'cursos_informatica', 'menu_class' => 'menuCourses' )); ?>
                      </div>
                    <?php } else if( $idP == 1070 ){ ?>
                      <div class="list-group">
                        <?php wp_nav_menu( array('menu' => 'cursos_frances', 'menu_class' => 'menuCourses' )); ?>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </section>
            <?php } ?>

            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskbrasilia2012' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<button class="btn btn-primary-outlined">', '</button>' ); ?>

            <!-- <div id="navegador">
                <p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
            </div> -->
          </div>

          <div class="col-lg-4 blog-sidebar sidebar">
            <form class="form_search">
              <input class="form-control mr-sm-2" type="text" placeholder="Search...">
              <button class="btn-search btn-search my-sm-0" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>

            <div class="list-group">
              <?php wp_nav_menu( array('menu' => 'queroserfisk' )); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php endwhile; // end of the loop. ?>