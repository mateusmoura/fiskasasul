<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-home.php.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2018
 * @since Fisk Brasilia 2018 2.0
 */
?>

  <div>
    <!-- BANNER SLIDER CAROUSEL -->
    <section class="banner">
      <div class="rev_slider_wrapper fullwidthbanner-container">

        <!-- the ID here will be used in the JavaScript below to initialize the slider -->
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
          <ul>
            <!-- *********************** -->
            <!-- Slides to be added here -->
            <!-- *********************** -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/slider/Banner_Ingles.jpg" alt="Curso de Inglês" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
              data-bgparallax="10" class="rev-slidebg" data-no-retina>
            </li>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/slider/Banner_espanhol.jpg" alt="Curso de Espanhol" class="rev-slidebg">
            </li>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/slider/Banner_infantil.jpg" alt="Curso Infantil" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
              data-bgparallax="10" class="rev-slidebg" data-no-retina>
            </li>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/slider/Banner_informatica.jpg" alt="Curso de Informatica" class="rev-slidebg">
            </li>
          </ul>
          <!-- Example Progress Bar, with a height and background color added to its style attribute -->
          <div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.25);"></div>
        </div>

      </div>
    </section>

     <div class="container home-blocos">
      <div class="row">
        <div class="col-md-6">
          <!-- <?php if(function_exists( 'wp_bannerize' )) wp_bannerize( "random=1" ); ?> -->

          <div class="display-single_element">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title title-ex1">
                  <h2 class="title-text">Fisk Asa Sul</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="section-title title-ex1">
                  <h2 class="title-text">Fisk Taguatinga Norte</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="section-title title-ex1">
                  <h2 class="title-text">Fisk Asa Norte</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-lg-4">
                <div class="card mb-4">
                  <div class="card_img">
                    <a href="<?php echo get_page_link( "19" ); ?>">
                      <img class="img-full" alt="Asa Sul" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09_mini.jpg" />
                      <div class="hover-overlay effect-scale">
                        <div class="overlay-content">
                          <a href="<?php echo get_page_link( "19" ); ?>" class="icon icon-circle">
                            <i class="fa fa-link" aria-hidden="true"></i>
                          </a>
                          <a href="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul/09.jpg" data-fancybox="images" class="icon icon-circle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <section class="home-about home-video">
            <div class="col-md-12">
              <div class="promo-video bg-image" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/youtube/video1.png');">
                <div class="video-button video-box">
                  <a href="javascript:void(0)">
                    <i class="fa fa-play play-icon" aria-hidden="true" data-video="http://www.youtube.com/embed/4BRkFyyo09M?autoplay=1"></i>
                    <span class="hide"></span>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <section class="home-about home-video">
            <div class="col-md-12">
              <div class="promo-video bg-image" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/youtube/video2.png');">
                <div class="video-button video-box">
                  <a href="javascript:void(0)">
                    <i class="fa fa-play play-icon" aria-hidden="true" data-video="http://www.youtube.com/embed/WWZChcyEcGM?autoplay=1"></i>
                    <span class="hide"></span>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <div class="col-md-12 align-center">
            <!-- <div class="fb-page" data-href="https://www.facebook.com/fiskbrasilia1/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fiskbrasilia1/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fiskbrasilia1/?fref=ts">Fisk Brasília</a></blockquote></div> -->
            <?php echo do_shortcode("[instagram-feed]"); ?>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box-content cyber">
            <div class="bg">
              <img src="http://www.fisk.com.br/assets/images/samples/casal-fogueira.jpg" alt="">
            </div>
            <div class="padding">
              <div class="title">
                <h2>Cyber Fisk</h2>
              </div>
              <div class="content white">
                Plataforma virtual com <span class="break-line"></span>
                conteúdo exclusivo para <span class="break-line"></span>
                os alunos dos cursos de <span class="break-line"></span>
                inglês, espanhol e <span class="break-line"></span>
                português praticarem onde <span class="break-line"></span>
                e quando quiserem. <span class="break-line"></span>
                  <span class="break-line"></span>
                <span class="break-line"></span>
              </div>
              <div class="link">
                <a href="http://www.fisk.com.br/cyber" target="_blank" title="">
                  <button class="btn btn-white">Conheça</button>
                </a>
              </div>
            </div>
          </div>

          <section class="home-blog">
            <div class="row">
              <div class="col-md-12">
                <!-- section title -->
                <div class="row justify-content-md-center">
                  <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title text-center title-ex1">
                      <h2>Ultimas notícias</h2>
                      <a href="<?php bloginfo('rss2_url'); ?>" id="assine_rss">RSS</a>
                    </div>
                  </div>
                </div>
                <!-- section title ends -->
                <div class="row ">
                  <?php
                    $args = array( 'numberposts' => 6 );
                    $lastposts = get_posts( $args );
                    foreach($lastposts as $post) : setup_postdata($post);
                      $postID = get_the_ID();
                      $day = get_the_date('d', $postID);
                      $month = get_the_date('M', $postID);
                      $postType = get_post_type($postID);
                  ?>


                      <div class="col-md-6">
                        <div class="media blog-media">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                          </a>

                          <div class="circle">
                            <h5 class="day"><?php echo $day; ?></h5>
                            <span class="month"><?php echo $month; ?></span>
                          </div>

                          <div class="media-body">
                            <a href="<?php the_permalink(); ?>">
                              <h5 class="mt-0"><?php the_title(); ?></h5>
                            </a>
                            <?php the_excerpt(); ?>
                            <ul>
                              <li>por: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="btn btn-link"><strong><?php the_author(); ?></strong></a></li>
                              <li class="text-right">
                                <a href="<?php bloginfo('url'); ?>/<?php echo $postType; ?>"><?php echo get_comments_number($postID); ?> Coment.</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  <?php endforeach; ?>
                </div>

                <div class="bottom">
                  <p>
                    <a href="<?php echo get_permalink( 49 ) ?>" title="Mais notícias">
                      <button class="btn btn-primary">Mais notícias</button>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <section class="newsletter">
            <?php if (class_exists('ajaxNewsletter')): ?>
              <label for="usuario_email_newsletter">Crie seu cadastro e fique por dentro de novidades, promoções, oportunidades e muito mais:</label>
              <!-- place your HTML code here -->
              <?php ajaxNewsletter::newsletterForm(); ?>
              <!-- place your HTML code here -->
              <?php endif; ?>
          </section>
        </div>
      </div>
    </div>
  </div>