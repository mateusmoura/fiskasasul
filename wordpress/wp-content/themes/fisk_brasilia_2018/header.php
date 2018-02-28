<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2012
 * @since Fisk Brasilia 2012 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'fiskbrasilia2012' ), max( $paged, $page ) );

  ?></title>
    
<link href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" rel="icon" type="/images/x-icon" />

<meta name="description" content="Informações sobre os cursos FISK English, Español, Français, Português e Informática. Conheça a FISK, Cursos, Blog, Help-out Online, Nivelamento Online, Convênio, Notícias, Divirta-se, Contato" />
<meta name="keywords" content="FISK,fisk,Fisk,Inglês,ingles,Espanhol,español,espanhol,frances,francais,franca,português,portugues,informática,informatica,estude,intercâmbio,estudar,brasilia,taguatinga,asasul,taguá norte,asa sul,norte,sul,TOEFL,IBT" />
<meta name="author" content="WebFace Tecnologia" />
<meta name="generator" content="WebFace Tecnologia" />
<meta name="url" content="http://www.fisk.com.br" />
<?php $noCacheDt = getdate(); ?>
<meta name="company" content="Fundação Richard Hugh Fisk" />
<meta name="revisit-after" content="1" />


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- PLUGINS CSS STYLE -->
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"> -->
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/selectbox/select_option1.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/slick/slick.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/slick/slick-theme.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/prismjs/prism.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/plugins/fancybox/jquery.fancybox.min.css" />
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/selectbox/select_option1.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/isotope/isotope.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_url' ); ?>/plugins/animate.css" rel="stylesheet">

<!-- REVOLUTION SLIDER -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/plugins/revolution/css/settings.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/plugins/revolution/css/layers.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/plugins/revolution/css/navigation.css">

<!-- CUSTOM CSS -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/color-option4.css" id="option_color">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
  /*<?php get_page_link( "25" ) ?> Link das promoções*/
?>
</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 7 ]><div class="ie6 ie"><![endif]-->
  <!--[if IE 7 ]><div class="ie7 ie"><![endif]-->
  <!--[if IE 8 ]><div class="ie8 ie"><![endif]-->
  <!--[if IE 9 ]><div class="ie9 ie"><![endif]-->

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=361222367380338";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Preloader -->
  <div id="preloader" class="smooth-loader-wrapper">
    <div class="smooth-loader">
      <div class="loader1">
        <div class="loader-target">
          <div class="loader-target-main"></div>
          <div class="loader-target-inner"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- <a href="<?php echo home_url( '/' ); ?>/quero-ser-fisk/promocoes/" title="Faça um Test Drive" id="bt_badge">Faça um Test Drive</a> -->

  <header id="pageTop" class="header">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md main-nav navbar-sticky header-transparent">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="burger-menu icon-toggle">
            <i class="icon-menu icons"></i>
            </i>
          </span>
        </button>
        <a class="navbar-brand" href="index.html">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="130px" height="30px">
            <path class="path-2" fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M126.882,23.180 L126.882,20.848 C125.362,22.622 123.234,23.508 120.497,23.508 C117.913,23.508 115.861,22.698 114.341,21.078 C112.951,19.547 112.256,17.576 112.256,15.168 C112.256,12.717 112.962,10.725 114.373,9.192 C115.893,7.551 117.978,6.730 120.628,6.730 C123.299,6.730 125.384,7.583 126.882,9.291 L126.882,6.796 L129.032,6.796 L129.032,23.180 L126.882,23.180 ZM125.237,10.440 C124.140,9.280 122.550,8.700 120.465,8.700 C118.532,8.700 117.012,9.335 115.904,10.605 C114.883,11.786 114.373,13.309 114.373,15.168 C114.373,17.051 114.883,18.562 115.904,19.700 C116.990,20.926 118.510,21.538 120.465,21.538 C122.397,21.538 123.950,20.930 125.123,19.715 C126.296,18.501 126.882,16.986 126.882,15.168 C126.882,13.177 126.333,11.600 125.237,10.440 ZM105.889,22.918 L99.673,16.332 L93.489,22.918 L90.734,22.918 L98.328,14.861 L91.407,7.317 L94.162,7.317 L99.673,13.391 L105.312,7.317 L108.004,7.317 L101.083,14.861 L108.645,22.918 L105.889,22.918 ZM79.217,21.538 C82.212,21.538 84.191,20.280 85.154,17.762 L87.335,17.762 C86.630,20.017 85.506,21.560 83.966,22.392 C82.597,23.137 80.993,23.508 79.153,23.508 C76.436,23.508 74.361,22.731 72.928,21.177 C71.602,19.733 70.939,17.730 70.939,15.168 C70.939,12.739 71.688,10.725 73.185,9.127 C74.682,7.529 76.725,6.730 79.314,6.730 C81.838,6.730 83.865,7.436 85.394,8.848 C86.923,10.259 87.689,12.169 87.689,14.578 L87.689,15.924 L73.025,15.956 C73.302,19.678 75.367,21.538 79.217,21.538 ZM85.378,13.986 C85.250,12.498 84.715,11.283 83.774,10.341 C82.683,9.248 81.196,8.700 79.314,8.700 C77.624,8.700 76.222,9.160 75.110,10.079 C73.998,10.999 73.324,12.302 73.089,13.986 L85.378,13.986 ZM62.307,12.654 C62.307,11.360 61.891,10.372 61.060,9.692 C60.229,9.013 59.078,8.672 57.608,8.672 C55.882,8.672 54.528,9.169 53.549,10.162 C52.568,11.155 52.078,12.461 52.078,14.079 L52.078,23.495 L49.969,23.495 L49.969,6.508 L52.078,6.508 L52.078,8.769 C53.378,7.410 55.211,6.730 57.576,6.730 C59.515,6.730 61.103,7.183 62.339,8.090 C63.724,9.104 64.416,10.529 64.416,12.363 L64.416,23.495 L62.307,23.495 L62.307,12.654 Z"
            />
            <path fill-rule="evenodd" class="path-1" fill="rgb(12, 198, 82)" d="M22.000,29.113 C20.270,27.358 9.000,15.934 9.000,15.934 L11.000,13.907 C11.000,13.907 21.939,24.996 23.000,26.071 C24.061,27.147 27.000,26.909 27.000,25.058 C27.000,23.206 27.000,8.001 27.000,5.797 C27.000,3.593 24.105,2.649 23.000,3.770 C21.895,4.890 20.000,6.999 20.000,6.999 L18.000,5.000 C18.000,5.000 20.503,2.126 22.000,0.729 C23.497,-0.670 30.000,-0.474 30.000,4.784 C30.000,10.041 30.000,19.883 30.000,25.058 C30.000,30.233 23.730,30.867 22.000,29.113 ZM19.000,16.093 C19.000,16.093 8.061,5.003 7.000,3.928 C5.939,2.852 3.000,3.090 3.000,4.941 C3.000,6.794 3.000,21.999 3.000,24.202 C3.000,26.406 5.895,27.351 7.000,26.230 C8.105,25.109 10.000,22.999 10.000,22.999 L12.000,24.999 C12.000,24.999 9.497,27.873 8.000,29.271 C6.503,30.669 -0.000,30.474 -0.000,25.216 C-0.000,19.959 -0.000,10.117 -0.000,4.941 C-0.000,-0.234 6.270,-0.867 8.000,0.887 C9.730,2.641 21.000,14.065 21.000,14.065 L19.000,16.093 Z"
            />
          </svg>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php wp_nav_menu(
            array(
              'menu_class' => 'navbar-nav ml-auto',
              'container_class' => 'navbar-nav ml-auto',
              'theme_location' => 'primary'
            )); ?>

          <!-- header search -->
          <div class="nav-item search_hook">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#searchModal" class="btn-search nav-link">
              <i class="fa fa-search"></i>
            </a>
            <form class="search_form">
              <input type="text" name="search" placeholder="Search...">
              <button class="no-bg btn-search" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
        </div>
        <!-- header search ends-->
      </div>
    </nav>
  </header>

  <div id="wrapper" class="hfeed">
    <div id="header">
        <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'h1'; ?>
          <<?php echo $heading_tag; ?> id="site-title">
                  <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="indent"><?php bloginfo( 'name' ); ?></a>
          </<?php echo $heading_tag; ?>>

          <p id="link_fisknet"><a href="<?php echo wp_login_url( home_url() ); ?>">Login</a> : <a target="_blank" href="http://www.fisk.com.br/cyber">CYBER FISK</a></p>


      <!--</div> #masthead -->
    </div><!-- #header -->
    
    <div id="main">
