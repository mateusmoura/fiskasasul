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
  </div><!-- #main -->
</div><!-- #wrapper -->

  <div id="rodape" role="contentinfo">
      <div class="construtor">
          <div id="newsletter">
              <?php if (class_exists('ajaxNewsletter')): ?>
                <label for="usuario_email_newsletter">Crie seu cadastro e fique por dentro de novidades, promoções, oportunidades e muito mais:</label>
                <!-- place your HTML code here -->
                <?php ajaxNewsletter::newsletterForm(); ?>
                <!-- place your HTML code here -->
                <?php endif; ?>
            </div>
            <div id="auxiliar_rodape">
              <?php wp_nav_menu( array('menu' => 'queroserfisk' )); ?>
                <?php wp_nav_menu( array('menu' => 'soufisk' )); ?>
                <?php wp_nav_menu( array('menu' => 'servicos' )); ?>
                <!--<ul>
                    <?php /*?><?php wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,35,37,39,41,43,45,47,49,62,64,66,216&sort_column=menu_order'); ?><?php */?>
                </ul>
                <ul>
                    <?php /*?><?php wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,9,11,15,17,19,21,23,25,62,64,66,216&sort_column=menu_order'); ?><?php */?>
                </ul>
                <ul>
                    <?php /*?><?php wp_list_pages('depth=0&title_li=&exclude=229,231,68,5,33,60,2,35,37,39,41,43,45,47,49,9,11,15,17,19,21,23,25,216&sort_column=menu_order'); ?><?php */?>
                </ul>-->
            </div>

            <div class="banners-premios">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/branco/premios-banners.png" alt="Premios" width="250">
            </div>
            
            <ul id="lista_institucional">
                <li><a href="<?php echo get_page_link( "229" ); ?>" title="Privacidade">Privacidade</a></li>
                <li><a href="<?php echo get_page_link( "231" ); ?>" title="Termos de uso">Termos de Uso</a></li>
            </ul>

            <!-- <div class="falou-fisk">
                 <img src="<?php bloginfo( 'template_url' ); ?>/images/branco/falou-fisk.png" alt="Falou Fisk Falou Tudo" width="200">
            </div> -->
            
            <div class="developer">
              <p>Desenvolvido por: <a href="http://webfacetecnologia.com.br" target="_blank" title="Webface Tecnologia">Webface Tecnologia - Sua empresa na internet</a></p>
            </div>
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
         </div><!-- #footer -->
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
