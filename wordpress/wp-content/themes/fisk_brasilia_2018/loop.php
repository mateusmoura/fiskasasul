<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2018
 * @since Fisk Brasilia 2018 2.0
 */
?>

<div>
  <!-- BREDCRUMB -->
  <div class="bredcrumb bg-image text-center" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/bredcrumb.jpg');">
    <div class="row bredcrumb-inner">
      <div class="col-sm-12  align-self-center">
        <h2>Blog - <?php $cat = single_cat_title( '', false ); 
              if( $cat != "" )
              {
            ?>
              <?php printf( __( 'Category Archives: %s', 'fiskbrasilia2012' ), '<span>' . $cat . '</span>' ); ?>
              <?php
              }
            ?></h2>
        <ul class="">
          <li>
            <a href="<?php echo home_url( '/' ); ?>" class="bread_link">Home</a>
          </li>
          <li>Blog - <?php $cat = single_cat_title( '', false ); 
              if( $cat != "" )
              {
            ?>
              <?php printf( __( 'Category Archives: %s', 'fiskbrasilia2012' ), '<span>' . $cat . '</span>' ); ?>
              <?php
              }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- BLOG -->
  <section class="blog-post-contents">
    <div class="container">
      <!-- Blog post area starts -->
      <div class="row">
        <div class="col-lg-8">
          <!-- blog single column starts -->
          <div class="media blog-media flex-wrap">
            <div class="media-body page">
              <div class="section-title title-ex1">
                <h2 class="title-text">Blog</h2>
                <!-- <p class="description">Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p> -->
              </div>

              <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                <div id="nav-above" class="navigation">
                  <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'fiskbrasilia2012' ) ); ?></div>
                  <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'fiskbrasilia2012' ) ); ?></div>
                </div><!-- #nav-above -->
              <?php endif; ?>

              <?php /* If there are no posts to display, such as an empty archive page */ ?>
              <?php if ( ! have_posts() ) : ?>
                <div id="post-0" class="post error404 not-found">
                  <h1 class="entry-title"><?php _e( 'Not Found', 'fiskbrasilia2012' ); ?></h1>
                  <div class="entry-content">
                    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'fiskbrasilia2012' ); ?></p>
                    <?php get_search_form(); ?>
                  </div><!-- .entry-content -->
                </div><!-- #post-0 -->
              <?php endif; ?>

              <?php
                /* Start the Loop.
                *
                * In Twenty Ten we use the same loop in multiple contexts.
                * It is broken into three main parts: when we're displaying
                * posts that are in the gallery category, when we're displaying
                * posts in the asides category, and finally all other posts.
                *
                * Additionally, we sometimes check for whether we are on an
                * archive page, a search page, etc., allowing for small differences
                * in the loop on each template without actually duplicating
                * the rest of the loop that is shared.
                *
                * Without further ado, the loop:
                */ ?>
              <?php while ( have_posts() ) : the_post(); ?>

              <?php /* How to display posts of the Gallery format. The gallery category is the old way. */ ?>
                <?php if ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) || in_category( _x( 'gallery', 'gallery category slug', 'fiskbrasilia2012' ) ) ) : ?>
                    <!--<p>Mateus 1</p>-->
                  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'fiskbrasilia2012' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                    <div class="entry-meta">
                      <?php fiskbrasilia2012_posted_on(); ?>
                    </div><!-- .entry-meta -->

                    <div class="entry-content">
                      <?php if ( post_password_required() ) : ?>
                        <?php the_content(); ?>
                      <?php else : ?>
                        <?php
                          $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
                          if ( $images ) :
                            $total_images = count( $images );
                            $image = array_shift( $images );
                            $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
                        ?>
                          <div class="gallery-thumb">
                            <a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
                          </div><!-- .gallery-thumb -->
                          <p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'fiskbrasilia2012' ),
                              'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'fiskbrasilia2012' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
                              number_format_i18n( $total_images )
                            ); ?></em></p>
                        <?php endif; ?>
                        
                        <?php the_excerpt(); ?>
                      <?php endif; ?>
                    </div><!-- .entry-content -->

                    <div class="entry-utility">
                      <?php if ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) : ?>
                        <a href="<?php echo get_post_format_link( 'gallery' ); ?>" title="<?php esc_attr_e( 'View Galleries', 'fiskbrasilia2012' ); ?>"><?php _e( 'More Galleries', 'fiskbrasilia2012' ); ?></a>
                        <span class="meta-sep">|</span>
                      <?php elseif ( in_category( _x( 'gallery', 'gallery category slug', 'fiskbrasilia2012' ) ) ) : ?>
                        <a href="<?php echo get_term_link( _x( 'gallery', 'gallery category slug', 'fiskbrasilia2012' ), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'fiskbrasilia2012' ); ?>"><?php _e( 'More Galleries', 'fiskbrasilia2012' ); ?></a>
                        <span class="meta-sep">|</span>
                      <?php endif; ?>
                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fiskbrasilia2012' ), __( '1 Comment', 'fiskbrasilia2012' ), __( '% Comments', 'fiskbrasilia2012' ) ); ?></span>
                        <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
                    </div><!-- .entry-utility -->
                  </div><!-- #post-## -->

                <?php /* How to display posts of the Aside format. The asides category is the old way. */ ?>

                <?php elseif ( ( function_exists( 'get_post_format' ) && 'aside' == get_post_format( $post->ID ) ) || in_category( _x( 'asides', 'asides category slug', 'fiskbrasilia2012' ) )  ) : ?>
                    <!--<p>Mateus 2</p>-->
                  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
                      <div class="entry-summary">
                        <?php the_excerpt(); ?>
                      </div><!-- .entry-summary -->
                    <?php else : ?>
                      <div class="entry-content">
                        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fiskbrasilia2012' ) ); ?>
                      </div><!-- .entry-content -->
                    <?php endif; ?>

                    <div class="entry-utility">
                      <?php fiskbrasilia2012_posted_on(); ?>
                      <span class="meta-sep">|</span>
                      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fiskbrasilia2012' ), __( '1 Comment', 'fiskbrasilia2012' ), __( '% Comments', 'fiskbrasilia2012' ) ); ?></span>
                      <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
                    </div><!-- .entry-utility -->
                  </div><!-- #post-## -->

                <?php /* How to display all other posts. */ ?>

                <?php else : ?>
                  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'fiskbrasilia2012' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                    <div class="entry-meta">
                      <?php fiskbrasilia2012_posted_on(); ?>
                    </div><!-- .entry-meta -->

                    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                      <div class="entry-summary">
                        <?php the_excerpt(); ?>
                      </div><!-- .entry-summary -->
                    <?php else : ?>
                      <div class="entry-content">
                        <?php /*?><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fiskbrasilia2012' ) ); ?><?php */?>
                                <?php the_excerpt(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskbrasilia2012' ), 'after' => '</div>' ) ); ?>
                      </div><!-- .entry-content -->
                    <?php endif; ?>

                    <div class="entry-utility">
                      <?php if ( count( get_the_category() ) ) : ?>
                        <span class="cat-links">
                          <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'fiskbrasilia2012' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                        </span>
                        <span class="meta-sep">|</span>
                      <?php endif; ?>
                      <?php
                        $tags_list = get_the_tag_list( '', ', ' );
                        if ( $tags_list ):
                      ?>
                        <span class="tag-links">
                          <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'fiskbrasilia2012' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
                        </span>
                        <span class="meta-sep">|</span>
                      <?php endif; ?>
                      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fiskbrasilia2012' ), __( '1 Comment', 'fiskbrasilia2012' ), __( '% Comments', 'fiskbrasilia2012' ) ); ?></span>
                      <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
                    </div><!-- .entry-utility -->
                  </div><!-- #post-## -->

                  <?php comments_template( '', true ); ?>

                <?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>

              <?php endwhile; // End the loop. Whew. ?>

              <?php /* Display navigation to next/previous pages when applicable */ ?>
              <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                <div id="nav-below" class="navigation">
                  <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'fiskbrasilia2012' ) ); ?></div>
                  <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'fiskbrasilia2012' ) ); ?></div>
                </div><!-- #nav-below -->
              <?php endif; ?>
            </div>
          </div>
        </div>

        <!-- Leave a Comment ends -->
        <div class="col-lg-4 blog-sidebar sidebar">
          <form class="form_search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search...">
            <button class="btn-search btn-search my-sm-0" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
          
          <div class="list-group">
            <!-- <?php
              wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,9,11,15,17,19,21,23,25,62,64,66,216&sort_column=menu_order'); 
            ?> -->

            <?php wp_nav_menu( array('menu' => 'soufisk' )); ?>
          </div>

          <h4>Categorias no Blog:</h4>

          <div class="tags">
            <?php
              $categories=  get_categories(); 
              foreach ($categories as $category) {
                $li = '<a href="'.get_category_link( $category->term_id ).'" title="'.$category->name.'">';
                $li .= $category->name;
                $li .= '</a>';
                echo $li;
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
