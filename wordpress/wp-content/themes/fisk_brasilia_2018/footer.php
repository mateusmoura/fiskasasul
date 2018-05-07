<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage fisk_brasilia_2012
 * @since Fisk Brasilia 2012 1.0
 */
?>
  <footer class="footer footer-classic bg-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <?php wp_nav_menu( array('menu' => 'queroserfisk' )); ?>
        </div>

        <div class="col-md-3">
          <?php wp_nav_menu( array('menu' => 'soufisk' )); ?>
        </div>

        <div class="col-md-3">
          <?php wp_nav_menu( array('menu' => 'servicos' )); ?>
        </div>

        <div class="col-md-3">
          <div class="banners-premios">
            <img src="<?php bloginfo( 'template_url' ); ?>/images/branco/premios-banners.png" alt="Premios" width="250">
          </div>

          <ul class="menu" id="lista_institucional">
            <li class="nav-item "><a class="nav-link" href="<?php echo get_page_link( "229" ); ?>" title="Privacidade">Privacidade</a></li>
            <li class="nav-item "><a class="nav-link" href="<?php echo get_page_link( "231" ); ?>" title="Termos de uso">Termos de Uso</a></li>
          </ul>

          <div id="colophon">
            <?php
              /* A sidebar in the footer? Yep. You can can customize
              * your footer with four columns of widgets.
              */
              get_sidebar( 'footer' );
            ?>

            <div id="site-info">
              <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                  <?php bloginfo( 'name' ); ?>
              </a>
            </div><!-- #site-info -->

            <div id="site-generator">
              <?php do_action( 'fiskbrasilia2012_credits' ); ?>
              <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fiskbrasilia2012' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'fiskbrasilia2012' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'fiskbrasilia2012' ), 'WordPress' ); ?></a>
            </div><!-- #site-generator -->
          </div><!-- #colophon -->
        </div>


        <div class="col-lg-7 col-md-8 ">
          <div class="text-center">
            <a class="brand" href="<?php echo home_url( '/' ); ?>">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/logo-fisk.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
            </a>
            <!-- <p>
              Mollit auctor eum, fames gravida deserunt senectus eius nonummy felis natus saepe accusantium arcu, ultricies eos pretium
              amet quia habitant pede.
            </p> -->
            <div class="social-icons">
              <a href="https://www.facebook.com/fiskbrasilia1" class="btn btn-social btn-social-o facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/fiskbrasilia" class="btn btn-social btn-social-o twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <!-- <a href="#" class="btn btn-social btn-social-o pinterest">
                <i class="fa fa-pinterest-p"></i>
              </a>
              <a href="#" class="btn btn-social btn-social-o google-plus">
                <i class="fa fa-google-plus"></i>
              </a>
              <a href="#" class="btn btn-social btn-social-o linkedin">
                <i class="fa fa-linkedin"></i>
              </a>
              <a href="#" class="btn btn-social btn-social-o vimeo">
                <i class="fa fa-vimeo"></i>
              </a>
              <a href="#" class="btn btn-social btn-social-o dribbble">
                <i class="fa fa-dribbble" aria-hidden="true"></i>
              </a> -->
            </div>

            <div class="address">
              <p><strong>Fisk Asa Sul</strong> - (61) 3345-0083 / 3345-0087 - CLS 115 Bloco B Loja 02, Brasília - DF, 70.385-520</p>
              <a href="mailto:secretaria@fiskasasul.com.br">secretaria@fiskasasul.com.br</a>
              <p><strong>Fisk Asa Norte</strong> - (61) 3041-8474 / 3041-8797 - SHCGN 714/715 Bloco E Lojas 22/24, Brasília - DF, 70.761-650 </p>
              <a href="mailto:secretaria@fiskasanorte.com.br">secretaria@fiskasanorte.com.br</a>
              <p><strong>Fisk Taguatinga Norte</strong> - (61) 3355-1191 / 3355-1192 - Av. Samdu Norte QNE 24 Casa 05, Taguatinga Norte, Brasília - DF, 72.125-240</p>
              <a href="mailto:secretaria@fisktaguatinganorte.com.br">secretaria@fisktaguatinganorte.com.br</a>
            </div>
          </div>
        </div>
        <!-- BACK TO TOP BUTTON -->
        <a href="#pageTop" class="backToTop">
          <i class="fa fa-chevron-up"></i>
        </a>
      </div>
      <!-- COPY RIGHT -->
      <div class="copyright">
        <hr>
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 ">
            <div class="copyRight_text text-center">
              <p> © 2010 Copyright Fisk Brasília by
              <a class="text-primary" href="https://www.linkedin.com/in/mateusmouraprofile/" target="_blank" title="Mateus Moura">Mateus Moura - Front-End Developer</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div><!-- .main-wrapper -->

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="bar-1"></span>
        <span class="bar-2"></span>
    </button>
    <form name="search" action="<?php bloginfo('home'); ?>/" method="get">
      <input type="text" autofocus name="s" id="s" placeholder="Buscando...">
    </form>
  </div>
  </div>
</div>

<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>

<!-- <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/functions.js?<?php echo $noCacheDt[0]; ?>"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsQdSlW4vj5RvXp2_pLnv1s1ErfxjM5_o"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/jquery/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/bootstrap/js/tether.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/slick/slick.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/circle-progress/jquery.appear.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/isotope/isotope.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/counterUp/waypoint.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/counterUp/jquery.counterup.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/plugins/smoothscroll/SmoothScroll.js"></script>

<script src="<?php bloginfo( 'template_url' ); ?>/plugins/syotimer/jquery.syotimer.min.js"></script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>


<script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>

<!--[if IE ]></div><![endif]-->
</body>
</html>
