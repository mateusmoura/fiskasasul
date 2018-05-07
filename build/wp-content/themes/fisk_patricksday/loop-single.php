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
 * @subpackage fisk_patricksday
 * @since Twenty Ten 1.2
 */
?>
<div id="conteudo_pagina">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'fiskpatricksday' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'fiskpatricksday' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><?php the_title(); ?></h2>

					<div class="entry-meta">
						<?php fiskpatricksday_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskpatricksday' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'fiskpatricksday_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'fiskpatricksday' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'fiskpatricksday' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

					<div class="entry-utility">
						<?php fiskpatricksday_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'fiskpatricksday' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'fiskpatricksday' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'fiskpatricksday' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
</div>
<div id="navegador">
	<p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link( "49" ) ?>">Blog</a> : Blog</p>
</div>
<div id="auxiliar">
	<span id="predios"></span>
	<div id="submenu">
		<!--<ul>
            <?php
				wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,9,11,15,17,19,21,23,25,62,64,66,216&sort_column=menu_order'); 
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