<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage fisk_thanksgiving
 * @since Twenty Ten 1.2
 */
?>
<div id="conteudo_pagina">
	<h1 id="pagina_titulo" class="title-47">EventosS</h1>
<?php
global $post;
$args = array( 'category' => 3 );
$myposts = get_posts( $args );
?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'fiskthanksgiving' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'fiskthanksgiving' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<?php
foreach( $myposts as $post ) :	setup_postdata($post); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'fiskthanksgiving' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

        <div class="entry-meta">
            <?php fiskthanksgiving_posted_on(); ?>
        </div><!-- .entry-meta -->

<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
<?php else : ?>
        <div class="entry-content">
            <?php /*?><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fiskthanksgiving' ) ); ?><?php */?>
            <?php the_excerpt(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskthanksgiving' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
<?php endif; ?>

        <div class="entry-utility">
            <?php if ( count( get_the_category() ) ) : ?>
                <span class="cat-links">
                    <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'fiskthanksgiving' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                </span>
                <span class="meta-sep">|</span>
            <?php endif; ?>
            <?php
                $tags_list = get_the_tag_list( '', ', ' );
                if ( $tags_list ):
            ?>
                <span class="tag-links">
                    <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'fiskthanksgiving' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
                </span>
                <span class="meta-sep">|</span>
            <?php endif; ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fiskthanksgiving' ), __( '1 Comment', 'fiskthanksgiving' ), __( '% Comments', 'fiskthanksgiving' ) ); ?></span>
            <?php edit_post_link( __( 'Edit', 'fiskthanksgiving' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-utility -->
    </div><!-- #post-## -->
<?php endforeach; ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'fiskthanksgiving' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'fiskthanksgiving' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
</div>
<div id="navegador">
	<p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link( "47" ) ?>">Eventos</a> : Eventos</p>
</div>
<div id="auxiliar">
	<span id="predios"></span>
	<div id="submenu">
		<!--<ul>
            <?php
				wp_list_pages('depth=0&title_li=&exclude=68,5,33,60,2,9,11,15,17,19,21,23,25,62,64,66,216&sort_column=menu_order'); 
			?>
        </ul>-->
        <?php wp_nav_menu( array('menu' => 'soufisk' )); ?>
    </div>
    <div class="lista_categorias">
        <h2>Categorias no Blog:</h2>
        <ul>
            <?php
			$categories=  get_categories(); 
			foreach ($categories as $category) {
				$li = '<li><a href="'.get_category_link( $category->term_id ).'" title="'.$category->name.'">';
				$li .= $category->name;
				$li .= '</a></li>';
				echo $li;
			}
			?>
        </ul>
	</div>
</div>