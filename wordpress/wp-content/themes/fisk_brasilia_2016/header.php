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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/ac.base.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/fisk.site.css?<?php echo $noCacheDt[0]; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/fisk.home.css?<?php echo $noCacheDt[0]; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/fisk.queroserfisk.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/functions.js?<?php echo $noCacheDt[0]; ?>"></script>
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


<a href="<?php echo home_url( '/' ); ?>/quero-ser-fisk/promocoes/" title="Faça um Test Drive" id="bt_badge">Faça um Test Drive</a>
<div id="people_body"></div>
<div id="wrapper" class="hfeed">
	<div id="header">
    	<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'h1'; ?>
        <<?php echo $heading_tag; ?> id="site-title">
                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="indent"><?php bloginfo( 'name' ); ?></a>
        </<?php echo $heading_tag; ?>>
       	
        
        
        <p id="link_fisknet"><a href="<?php echo wp_login_url( home_url() ); ?>">Login</a> : <a target="_blank" href="http://www.fisk.com.br/cyber">CYBER FISK</a></p>
        
		<!--<div id="masthead">-->
			<!--<div id="branding" role="banner"> MOVER ESSE COMDIGO PARA A CONTENT POIS E ONDE CONTEM OS BANNERS
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>
			</div>--><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<!--<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'fiskbrasilia2012' ); ?>"><?php _e( 'Skip to content', 'fiskbrasilia2012' ); ?></a></div>-->
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
		<!--</div> #masthead -->
	</div><!-- #header -->
	
	<div id="main">
