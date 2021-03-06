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
    <?php
      $idP = get_the_ID();
      $curso = "";
      if( ($idP <= 336 && $idP >= 328 || $idP == 320) || $idP == 2066  || $idP == 2069 )
        $curso = "informatica";
      else if( ( $idP <= 324 && $idP >= 316 && $idP != 320 && $idP != 318 ) || $idP == 2044  || $idP == 2048 || $idP == 2052 )
        $curso = "espanhol";
      else if( ( $idP < 315 && $idP > 279 ) || $idP == 2026 || $idP == 2034 || $idP == 2039 )
        $curso = "ingles"; 
      else if( $idP == 318 || $idP == 2054  || $idP == 2057 )
        $curso = "portugues";
      else if ($idP == 1070)
        $cursos = "frances";
    ?>

    <!-- BREDCRUMB -->
    <div class="bredcrumb bg-image text-center"
      style="background-image: url('<?php bloginfo( 'template_url' ); ?><?php if ($curso == 'ingles') { echo '/img/headers/full-banner-ingles.jpg'; } else if ($curso == 'espanhol') { echo '/img/headers/full-banner-espanhol.jpg'; } else if ($curso == 'portugues') { echo '/img/headers/full-banner-portugues.jpg'; } else if ($curso == 'informatica') { echo '/img/headers/full-banner-informatica.jpg'; } else if ($curso == 'frances') { echo '/img/headers/banner-cursos.jpg'; } else { echo '/img/headers/banner-cursos.jpg'; } ?>');"
    >
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
            <!-- section title ends -->

            <?php if( $idP == 17 )
            { ?>
              <div class="row justify-content-md-center curso-<?php echo $curso; ?>">
                <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="section-title title-ex1 text-center">
                    <h2 class="title-text"><?php the_title(); ?></h2>
                    <!-- <p class="description">Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed curso-ingles">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Inglês</h5>
                      <div class="image_container">
                        <img title="ingles" src="http://localhost/fiskproducao/wp-content/uploads/2011/03/ingles.gif" alt="" />
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
                  <div class="info text-center info-boxed curso-espanhol">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Espanhol</h5>
                      <div class="image_container">
                        <img src="http://localhost/fiskproducao/wp-content/uploads/2011/03/espanhol.gif" alt="" title="espanhol" />
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
                <!-- <div class="col-md-12 col-lg-6">
                  <div class="info text-center info-boxed curso-frances">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Francês</h5>
                      <div class="image_container">
                        <img src="http://localhost/fiskproducao/wp-content/themes/fisk_brasilia_2013/images/badges/frances.png" alt="" title="Francês" />
                      </div>
                      <p class="description">Parlez Français! Agora na FISK você pode também aprender Francês! Conheça o curso de Francês para jovens e adultos.</p>

                      <a href="<?php echo get_page_link( "1070" ) ?>">
                        <button class="btn btn-primary-outlined">
                          Veja o curso de Francês
                        </button>
                      </a>
                    </div>
                  </div>
                </div> -->
                <div class="col-md-12 col-lg-6">
                  <!-- single info block -->
                  <div class="info text-center info-boxed curso-portugues">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Português para Brasileiros</h5>
                      <div class="image_container">
                        <img src="http://localhost/fiskproducao/wp-content/uploads/2011/03/portugues.gif" alt="" title="portugues" />
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
                  <div class="info text-center info-boxed curso-informatica">
                    <div class="icon icon-circle">
                      <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="description">
                      <h5 class="info-title">Informática</h5>
                      <div class="image_container">
                      <img src="http://localhost/fiskproducao/wp-content/uploads/2011/03/informatica.gif" alt="" title="informatica" />
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
              <div class="curso-<?php echo $curso; ?>">
                <a href="<?php echo get_page_link( "17" ); ?>" title="Voltar para os Cursos">
                  <button class="btn btn-primary-outlined btn-sm" type="submit">Voltar para os Cursos</button>
                </a>

                <section class="blog-post-contents">
                  <div class="media blog-media flex-wrap">
                    <div class="media-body page-courses">
                      <div class="row justify-content-md-center curso-<?php echo $curso; ?>">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                          <div class="section-title title-ex1 text-center">
                            <h2 class="title-text"><?php the_title(); ?></h2>
                            <!-- <p class="description">Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p> -->
                          </div>
                        </div>
                      </div>

                      <?php the_content(); ?>

                      <div class="divider divider-center divider-gradient divider-gradient-gray w50 mx-auto my-5">
                        <i class="fa fa-circle divider-icon bg-white text-primary"></i>
                      </div>

                      <h3 id="lista_niveis_titulo">Cursos:</h3>

                      <?php if( ($idP < 315 && $idP > 279) || $idP == 2026 || $idP == 2034 || $idP == 2039 ) { ?>
                      <div class="list-group">
                        <?php wp_nav_menu( array('menu' => 'cursos_ingles', 'menu_class' => 'menuCourses' )); ?>
                      </div>

                      <?php }
                        else if( ($idP <= 324 && $idP >= 316 && $idP != 320 && $idP != 318) || $idP == 2044  || $idP == 2048 || $idP == 2052 ) { ?>
                        <div class="list-group">
                          <?php wp_nav_menu( array('menu' => 'cursos_espanhol', 'menu_class' => 'menuCourses' )); ?>
                        </div>
                      <?php }
                        else if( ($idP <= 336 && $idP >= 328 || $idP == 320) || $idP == 2066  || $idP == 2069 ) { ?>
                        <div class="list-group">
                          <?php wp_nav_menu( array('menu' => 'cursos_informatica', 'menu_class' => 'menuCourses' )); ?>
                        </div>
                      <?php } else if( $idP == 1070 ){ ?>
                        <div class="list-group">
                          <?php wp_nav_menu( array('menu' => 'cursos_frances', 'menu_class' => 'menuCourses' )); ?>
                        </div>
                      <?php } else if ( $idP == 318 || $idP == 2054  || $idP == 2057 ) { ?>
                        <div class="list-group">
                          <?php wp_nav_menu( array('menu' => 'cursos_portugues', 'menu_class' => 'menuCourses' )); ?>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </section>
              </div>
            <?php } ?>

            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskbrasilia2012' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<button class="btn btn-primary-outlined">', '</button>' ); ?>

            <!-- <div id="navegador">
                <p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
            </div> -->
          </div>

          <div class="col-lg-4 blog-sidebar sidebar">
            <form class="form_search" name="search" action="<?php bloginfo('home'); ?>/" method="get">
              <input class="form-control mr-sm-2" type="text" name="s" id="s" placeholder="Buscando..." value="<?php echo wp_specialchars($s, 1); ?>">
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

      <section class="bg-sand hero-block home-about section-certifications" style="background: url('<?php bloginfo( 'template_url' ); ?>/img/cursos/banner-footer-certifications.jpg') no-repeat bottom right;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ">
              <div class="section-title title-ex1">
                <h2 class="title-text">Qual é o seu nível de conhecimento?</h2>
              </div>
              <p class="description">
              Realize nosso teste online e descubra o curso ideal para você.
              </p>
              <a href="http://www.fisk.com.br/teste-classificacao" target="_blank" class="btn btn-default btn-primary">Faça o teste agora</a>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
<?php endwhile; // end of the loop. ?>