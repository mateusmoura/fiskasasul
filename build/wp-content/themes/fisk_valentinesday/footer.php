<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage fisk_valentinesDay
 * @since Fisk Valentines Day 1.0
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
            <ul id="lista_institucional">
                <li><a href="<?php echo get_page_link( "229" ); ?>" title="Privacidade">Privacidade</a></li>
                <li><a href="<?php echo get_page_link( "231" ); ?>" title="Termos de uso">Termos de Uso</a></li>
            </ul>
            
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
                    <?php do_action( 'fiskvalentinesday_credits' ); ?>
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fiskvalentinesday' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'fiskvalentinesday' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'fiskvalentinesday' ), 'WordPress' ); ?></a>
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
</div>
<!--[if IE ]></div><![endif]-->
</body>
</html>
