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
    <div class="bredcrumb bg-image text-center" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/bredcrumb.jpg');">
      <div class="row bredcrumb-inner">
        <div class="col-sm-12  align-self-center">
          <h2><?php the_title(); ?></h2>
          <ul class="">
            <li>
              <a href="<?php echo home_url( '/' ); ?>" class="bread_link">Home</a>
            </li>
            <li><?php the_title(); ?></li>
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
                  <h2 class="title-text"><?php the_title(); ?></h2>
                  <!-- <p class="description">Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p> -->
                </div>

                <?php the_content(); ?>

                <?php 
                  if( get_the_ID() == 19 || get_the_ID() == 21 || get_the_ID() == 1013  ) 
                  {
                      $args = get_the_ID() == 99
                              ? array(
                          'numberposts'     => 5,
                          'offset'          => 0,
                          'category'        => 7,6,
                          'orderby'         => 'post_date',
                          'order'           => 'DESC',
                          'include'         => "",
                          'exclude'         => "",
                          'meta_key'        => "",
                          'meta_value'      => "",
                          'post_type'       => 'post',
                          'post_mime_type'  => "",
                          'post_parent'     => "",
                          'post_status'     => 'publish' )
                          : array(
                          'numberposts'     => 5,
                          'offset'          => 0,
                          'category'        => 7,5,
                          'orderby'         => 'post_date',
                          'order'           => 'DESC',
                          'include'         => "",
                          'exclude'         => "",
                          'meta_key'        => "",
                          'meta_value'      => "",
                          'post_type'       => 'post',
                          'post_mime_type'  => "",
                          'post_parent'     => "",
                          'post_status'     => 'publish' );
                          
                      global $post;
                      $tmp_post = $post;
                      $myposts = get_posts( $args );?>
                      <h3>Eventos</h3>
                      <ul id="eventos_unidade_local">
                      <?php foreach( $myposts as $post ) : setup_postdata($post); ?>
                          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?php the_date(); ?></span></li>
                      <?php endforeach; ?>
                      <?php $post = $tmp_post; ?>
                          </ul>
                <?php
                    }
                ?>

                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fiskbrasilia2012' ), 'after' => '</div>' ) ); ?>
                <?php edit_post_link( __( 'Edit', 'fiskbrasilia2012' ), '<button class="btn btn-primary-outlined">', '</button>' ); ?>

                <!-- <div id="navegador">
                    <p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
                </div> -->
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
              <?php
                $pageP = $post->post_parent;
                $pageId = $post->ID;
                
                if( $pageP != 0 )
                {
                  if( $pageP == 8 )
                      wp_nav_menu( array('menu' => 'queroserfisk' ));
                  else if( $pageP == 33 )
                      wp_nav_menu( array('menu' => 'soufisk' ));
                  else
                      wp_nav_menu( array('menu' => 'servicos' ));
                }
                else
                {
                  if( $pageId == 5 )
                      wp_nav_menu( array('menu' => 'queroserfisk' ));
                  else if( $pageId == 33 )
                      wp_nav_menu( array('menu' => 'soufisk' )); 
                  else if( $pageId == 66 )
                      wp_list_pages('depth=0&title_li=&exclude=68,5,33,60,2,35,37,39,41,43,45,47,49,9,11,15,17,19,21,23,25,216&sort_column=menu_order');
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php endwhile; // end of the loop. ?>