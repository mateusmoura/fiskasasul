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
                    <a class="btn btn-primary" href="<?php echo get_permalink( 49 ) ?>" title="Mais notícias">Mais notícias</a>
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>

<div id="conteudo_pagina_home">
  <div id="bloco_campanhas">
    
  </div>
  <div id="bloco_motivos">
    <h3><a href="<?php echo get_page_link( "1389" ); ?>" title="Curso rápido para adultos">
      <img src="<?php bloginfo( 'template_url' ); ?>/images/home/new-banner-2015.jpg" title="Curso rápido para adultos." width="339" height="90">
    </a></h3>
  </div>
  <div id="bloco_home">
    <div id="bloco_youtube">
      <!--<h2>Youtube</h2>-->
      <iframe width="340" height="255" src="http://www.youtube.com/embed/4BRkFyyo09M" frameborder="0" allowfullscreen></iframe>
      <iframe width="340" height="255" src="http://www.youtube.com/embed/WWZChcyEcGM" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <div id="bloco_noticias">
    <h2>Notícias</h2>
    <a href="<?php bloginfo('rss2_url'); ?>" id="assine_rss">RSS</a>
    
    <ul id="lista_materias" class="mat">
      <?php
        $args = array( 'numberposts' => 6 );
        $lastposts = get_posts( $args );
        foreach($lastposts as $post) : setup_postdata($post); ?>
          <li class="post">
            <p class="date"><?php /*?><?php the_date(); ?><?php */?><?php echo get_the_date(); ?> |</p>
            <?php the_category(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </li>
      <?php endforeach; ?>
    </ul>

    <div class="bottom"><p><a href="<?php echo get_permalink( 49 ) ?>" title="Mais notícias">Mais notícias</a></p></div>
  </div>
  <div id="bloco_aprender">
    <h2>O que você quer aprender?</h2>
    <ul>
      <li><a href="<?php echo get_page_link( "311" ) ?>" id="aprender_ing">Inglês</a></li>
      <li><a href="<?php echo get_page_link( "316" ) ?>" id="aprender_es">Espanhol</a></li>
      <li><a href="<?php echo get_page_link( "318" ) ?>" id="aprender_pt">Português</a></li>
      <li><a href="<?php echo get_page_link( "1070" ) ?>" id="aprender_fr">Francês</a></li>
      <li><a href="<?php echo get_page_link( "320" ) ?>" id="aprender_info">Informática</a></li>
    </ul>
  </div>
  <div id="bloco_duvidas">
    <h2>Vamos retomar o inglês agora?</h2>
    <p>Verifique seu nível de inglês, você pode continuar de onde parou.</p>
    <a href="http://fisk.com.br/teste-online/" target="_blank">Help-Out Online</a>
  </div>
  <div id="bloco_facebook" class="face">
    <?php /*?><?php
      //the_widget( "FacebookLikeBoxWidget" );
      facebook_like_box('211185032242755', '', '', '', '', '', 'pt_BR');
    ?><?php */?>
    
    <div class="fb-page" data-href="https://www.facebook.com/fiskbrasilia1/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
    
    
    
    <!--<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Fisk-Bras%C3%ADlia/211185032242755" width="292" show_faces="true" border_color="" stream="false" header="true"></fb:like-box>
    
     <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFisk-Bras%25C3%25ADlia%2F211185032242755&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>-->
     <!--<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Fisk-Bras%C3%ADlia/211185032242755" width="292" show_faces="true" stream="false" header="true"></fb:like-box>-->
     <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:427px;" allowTransparency="true"></iframe>-->
    <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFisk-Bras%C3%ADlia%2F211185032242755&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>-->
  </div>
  <div id="bloco_twitter">
    <?php /*?><?php
      the_widget( "WP_Widget_Twitter_Pro" );
    ?><?php */?>
      <!-- <h2>Twitter</h2> -->
      <!-- <h3 class="widgettitle"><a href="http://twitter.com/statuses/user_timeline/fiskbrasilia.rss" title="Syndicate this content" target="_blank" class="twitterwidget twitterwidget-rss"><img width="14" height="14" alt="RSS" src="http://www.fiskasasul.com.br/wp-includes/images/rss.png" style="background: none repeat scroll 0% 0% orange; color: white; border: medium none;"></a><a href="http://twitter.com/fiskbrasilia" target="_blank" title="Twitter: fiskbrasilia" class="twitterwidget twitterwidget-title">Twitter: fiskbrasilia</a></h3> -->
      <!-- <div class="twitter-avatar"><a target="blank" title="Fisk Brasília" href="http://twitter.com/fiskbrasilia"><img src="https://pbs.twimg.com/profile_images/650719258/avatar-fisk_normal.gif" alt="Fisk Brasília"></a></div>
      <?php /* ?><?php twitter_messages("fiskbrasilia", 4, true); ?> <?php */ ?>
      <a class="twitter-timeline"  href="https://twitter.com/fiskbrasilia"  data-widget-id="312388409522003969">Tweets de @fiskbrasilia</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->
  </div>

  <div id="bloco_met">
    <a href="<?php echo get_page_link( "1185" ) ?>">
      <img src="<?php bloginfo( 'template_url' ); ?>/images/home/banner-met.png" alt="MET - Michigan English Test">
    </a>
  </div>
  <!-- <div id="bloco_dictionary">
    <script src="http://www.gmodules.com/ig/ifr?url=http://www.ldoceonline.com/widgets/igoogle_dictionary_search.xml&amp;synd=open&amp;w=150&amp;h=75&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
  </div> -->
  <div class="clear"></div>
</div>