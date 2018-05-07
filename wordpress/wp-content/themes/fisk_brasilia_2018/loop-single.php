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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div>
    <!-- BREDCRUMB -->
    <div class="bredcrumb bg-image text-center" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/headers/banner-blog.jpg');">
      <div class="row bredcrumb-inner">
        <div class="col-sm-12  align-self-center">
          <!-- <h2><?php the_title(); ?></h2> -->
          <!-- <ul class="">
            <li>
              <a href="<?php echo home_url( '/' ); ?>" class="bread_link">Home</a>
            </li>
            <li><?php the_title(); ?></li>
          </ul> -->
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
                <div id="nav-above" class="navigation">
                  <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'fiskbrasilia2012' ) . '</span> %title' ); ?></div>
                  <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'fiskbrasilia2012' ) . '</span>' ); ?></div>
                </div><!-- #nav-above -->

                <div class="section-title title-ex1">
                  <h2 class="title-text"><?php the_title(); ?></h2>
                  <!-- <p class="description">Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p> -->
                </div>

                <div class="entry-meta">
                  <?php fiskbrasilia2012_posted_on(); ?>
                </div><!-- .entry-meta -->

                <div class="entry-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskbrasilia2012' ), 'after' => '</div>' ) ); ?>
                </div><!-- .entry-content -->

                <?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
                  <div id="entry-author-info">
                    <div id="author-avatar">
                      <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'fiskbrasilia2012_author_bio_avatar_size', 60 ) ); ?>
                    </div><!-- #author-avatar -->
                    <div id="author-description">
                      <h2><?php printf( esc_attr__( 'About %s', 'fiskbrasilia2012' ), get_the_author() ); ?></h2>
                      <?php the_author_meta( 'description' ); ?>
                      <div id="author-link">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                          <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'fiskbrasilia2012' ), get_the_author() ); ?>
                        </a>
                      </div><!-- #author-link	-->
                    </div><!-- #author-description -->
                  </div><!-- #entry-author-info -->
                <?php endif; ?>

                <div class="entry-utility">
                  <?php fiskbrasilia2012_posted_in(); ?>
                  <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<span class="edit-link">', '</span>' ); ?>
                </div><!-- .entry-utility -->

                <div id="nav-below" class="navigation">
                  <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'fiskbrasilia2012' ) . '</span> %title' ); ?></div>
                  <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'fiskbrasilia2012' ) . '</span>' ); ?></div>
                </div><!-- #nav-below -->

                <?php comments_template( '', true ); ?>
              </div>
            </div>
          </div>

          <div class="col-lg-4 blog-sidebar sidebar">
            <form class="form_search" name="search" action="<?php bloginfo('home'); ?>/" method="get">
              <input class="form-control mr-sm-2" type="text" name="s" id="s" placeholder="Buscando..." value="<?php echo wp_specialchars($s, 1); ?>">
              <button class="btn-search btn-search my-sm-0" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
            
            <div class="list-group">
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
<?php endwhile; // end of the loop. ?>