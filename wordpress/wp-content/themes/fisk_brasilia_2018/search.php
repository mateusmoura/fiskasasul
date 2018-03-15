 <?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2012
 * @since Fisk Brasilia 2012 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
  <!--<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'fiskbrasilia2012' ), '<span>' . get_search_query() . '</span>' ); ?></h1>-->
  <?php
  /* Run the loop for the search to output the results.
  * If you want to overload this in a child theme then include a file
  * called loop-search.php and that will be used instead.
  */
    get_template_part( 'loop', 'search' );
  ?>
<?php else : ?>
<div class="page-error">
  <!-- ERROR SECTION-->
  <section class="error">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center align-self-center">
          <div class="img-text">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/font.png" alt="font img">
          </div>
          <h2><?php _e( 'Nothing Found', 'fiskbrasilia2012' ); ?></h2>
          <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'fiskbrasilia2012' ); ?></p>

          <form class="form_search text-center" name="search" action="<?php bloginfo('home'); ?>/" method="get">
            <input class="form-control mr-sm-2" type="text" name="s" id="s" placeholder="Buscar novamente" />
            <button class="btn-search btn-search my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
          </form>

          <a href="<?php bloginfo('home'); ?>" class="btn btn-default btn-primary">Ir para Home</a>
        </div>
      </div>
      </div>
  </section>
</div>
<?php endif; ?>

<?php get_footer(); ?>