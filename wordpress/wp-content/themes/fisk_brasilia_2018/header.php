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
        <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
          <img src="" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
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

  <div class="main-wrapper hfeed">
