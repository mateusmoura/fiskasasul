<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-home.php.
 *
 * @package WordPress
 * @subpackage fisk_valentinesDay
 * @since Twenty Ten 1.2
 */
?>


<div id="pagina_titulo">
    <span id="predios"></span>
</div>

<div id="conteudo_pagina_home">
    <div id="bloco_campanhas">
        <?php if(function_exists( 'wp_bannerize' )) wp_bannerize( "random=1" ); ?>
    </div>
    <div id="bloco_motivos">
		<a href="<?php echo get_page_link( "860" ); ?>" title="Com a qualidade FISK, prepare-se para a Copa do Mundo de 2014 e para as Olimpíadas de 2016.">
    		<img src="<?php bloginfo( 'template_url' ); ?>/images/home/new_banner_motivos.jpg" title="Com a qualidade FISK, prepare-se para a Copa do Mundo de 2014 e para as Olimpíadas de 2016." width="348" height="90">
		</a>
    </div>
    <div id="bloco_home">
        <h2 id="titulo_asasul">FISK Asa Sul</h2>
        <?php /*?><?php 
        $galleryID = "2"; 
        $Width = "150"; 
        $Height = "120"; 
        nggSlideshowWidget($galleryID,$Width,$Height); 
        ?> <?php */?>
        <ul id="imagens_asasul">
			<li class="primeira-img"><a href="<?php echo get_page_link( "19" ); ?>"><img alt="Taguatinga Norte" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul_1.jpg"></a></li>
			<li class="segunda-img"><a href="<?php echo get_page_link( "19" ); ?>"><img alt="Taguatinga Norte" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul_2.jpg"></a></li>
			<li class="terceira-img"><a href="<?php echo get_page_link( "19" ); ?>"><img alt="Taguatinga Norte" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/asasul_3.jpg"></a></li>
		</ul>
        <?php /*?><?php echo do_shortcode("[nggallery id=1 images=3]"); ?><?php */?>
        <h2 id="titulo_tagnorte">FISK Taguatinga Norte</h2>
        <ul id="imagens_tagua">
			<li class="primeira-img"><a href="<?php echo get_page_link( "21" ); ?>"><img alt="Taguatinga Norte" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/tagua_1.jpg"></a></li>
			<li class="segunda-img"><a href="<?php echo get_page_link( "21" ); ?>"><img alt="Taguatinga Norte" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/tagua_2.jpg"></a></li>
			<li class="terceira-img"><a href="<?php echo get_page_link( "21" ); ?>"><img alt="Taguatinga Norte" src="<?php bloginfo( 'template_url' ); ?>/images/unidades/tagua_3.jpg"></a></li>
		</ul>
        <?php /*?><?php echo do_shortcode("[nggallery id=3 images=3]"); ?><?php */?>
        
        <!--<img src="<?php bloginfo( 'template_url' ); ?>/images/selos.gif" alt="Excelência em Franchising" id="selos_home" />-->
        
        <div id="bloco_youtube">
            <!--<h2>Youtube</h2>-->
            <iframe title="YouTube video player" width="340" height="255" src="http://www.youtube.com/embed/SWjoD3s5S50" frameborder="0" allowfullscreen></iframe>
            <iframe title="YouTube video player" width="340" height="255" src="http://www.youtube.com/embed/BSPQcwXyqis" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="bloco_noticias">
        <h2>Notícias</h2>
        <a href="<?php bloginfo('rss2_url'); ?>" id="assine_rss">RSS</a>
        
        <ul id="lista_materias" class="mat">
            <?php
                $args = array( 'numberposts' => 6 );
                $lastposts = get_posts( $args );
                foreach($lastposts as $post) : setup_postdata($post); ?>
                    <li class="post">
                        <p class="date"><?php /*?><?php the_date(); ?><?php */?><?php echo get_the_date(); ?> |</p>
                        <?php the_category(); ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                    </li>
            <?php endforeach; ?>
        </ul>
        
        
        <div class="bottom"><p><a href="<?php echo get_permalink( 49 ) ?>" title="Mais notícias">Mais notícias</a></p></div>
    </div>
    <div id="bloco_aprender">
        <h2>O que você quer aprender?</h2>
        <ul>
            <li><a href="<?php echo get_page_link( "311" ) ?>" id="aprender_ing">Inglês</a></li>
            <li><a href="<?php echo get_page_link( "316" ) ?>" id="aprender_es">Espanhol</a></li>
            <li><a href="<?php echo get_page_link( "318" ) ?>" id="aprender_pt">Português</a></li>
            <li><a href="<?php echo get_page_link( "320" ) ?>" id="aprender_info">Informática</a></li>
        </ul>
    </div>
    <div id="bloco_duvidas">
        <h2>Tá com dúvida?</h2>
        <p>Envie sua pergunta para nossos Professores. Eles podem te ajudar!</p>
        <a href="<?php echo get_permalink( 45 ) ?>">Help-Out Online</a>
    </div>
    <div id="bloco_facebook" class="face">
    	<?php /*?><?php
			//the_widget( "FacebookLikeBoxWidget" );
			facebook_like_box('211185032242755', '', '', '', '', '', 'pt_BR');
		?><?php */?>
        
        <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Fisk-Bras%C3%ADlia/192649337453316" width="340" show_faces="true" border_color="" stream="false" header="true"></fb:like-box>
        
        
        
        <!--<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Fisk-Bras%C3%ADlia/211185032242755" width="292" show_faces="true" border_color="" stream="false" header="true"></fb:like-box>
        
         <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFisk-Bras%25C3%25ADlia%2F211185032242755&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>-->
         <!--<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Fisk-Bras%C3%ADlia/211185032242755" width="292" show_faces="true" stream="false" header="true"></fb:like-box>-->
       <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:427px;" allowTransparency="true"></iframe>-->
        <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFisk-Bras%C3%ADlia%2F211185032242755&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>-->
    </div>
    <div id="bloco_twitter">
        <?php /*?><?php
			the_widget( "WP_Widget_Twitter_Pro" );
		?><?php */?>
        	<h2>Twitter</h2>
            <h3 class="widgettitle"><a href="http://twitter.com/statuses/user_timeline/fiskbrasilia.rss" title="Syndicate this content" target="_blank" class="twitterwidget twitterwidget-rss"><img width="14" height="14" alt="RSS" src="http://www.fiskasasul.com.br/wp-includes/images/rss.png" style="background: none repeat scroll 0% 0% orange; color: white; border: medium none;"></a><a href="http://twitter.com/fiskbrasilia" target="_blank" title="Twitter: fiskbrasilia" class="twitterwidget twitterwidget-title">Twitter: fiskbrasilia</a></h3>
            <div class="twitter-avatar"><a target="blank" title="Fisk Brasília" href="http://twitter.com/fiskbrasilia"><img src="http://a2.twimg.com/profile_images/650719258/avatar-fisk_normal.gif" alt="Fisk Brasília"></a></div>
            <?php twitter_messages("fiskbrasilia", 4, true); ?>    
    </div>
    <div id="bloco_dictionary">
        <script src="http://www.gmodules.com/ig/ifr?url=http://www.ldoceonline.com/widgets/igoogle_dictionary_search.xml&amp;synd=open&amp;w=150&amp;h=75&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
    </div>
    <div class="clear"></div>
</div>