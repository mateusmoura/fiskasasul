<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-content_big.php.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2012
 * @since Twenty Ten 1.2
 */
?>

<div id="conteudo_pagina">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<h1 id="pagina_titulo" class="title-<?php echo the_ID() ?>"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>
<div id="navegador">
	<p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
</div>