<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-contact.php.
 *
 * @package WordPress
 * @subpackage fisk_thanksgiving
 * @since Twenty Ten 1.2
 */
?>

<div id="conteudo_pagina">
    <h1 id="pagina_titulo" class="title-68">Contatos</h1>
    <div id="telefones">
        <div class="unidade" id="unidade_asasul">
            <div class="endereco_unidade">
                <h1>FISK Asa Sul</h1>
                <p><a href="mailto:contato@fiskasasul.com.br">contato@fiskasasul.com.br</a></p>
                <p class="telefone">(61) 3345-0083 / 3345-0087</p>
                <p class="cep">EQS 114/115 Conj.A BL.1 Lojas 1/2/17, Brasília - DF, 70377-400</p>
            </div>
            <div class="iframe_unidade" id="iframe_asasul">
                <iframe width="420" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=fisk+taguatinga+norte&amp;sll=-15.811517,-48.067723&amp;sspn=0.003427,0.003809&amp;ie=UTF8&amp;hq=fisk+taguatinga+norte&amp;hnear=&amp;ll=-15.815791,-47.916698&amp;spn=0.013708,0.015235&amp;t=h&amp;z=14&amp;iwloc=A&amp;cid=17794833991437097202&amp;output=embed"></iframe>
                <p><a id="mapa_asasul" class="ampliar_mapa" href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=FISK+asa+sul&amp;sll=-15.832182,-47.919896&amp;sspn=0.013707,0.02341&amp;ie=UTF8&amp;hq=FISK+asa+sul&amp;hnear=&amp;ll=-15.815791,-47.916698&amp;spn=0.027415,0.046821&amp;t=h&amp;z=14&amp;iwloc=A&amp;cid=17794833991437097202">Ampliar mapa da FISK Asa Sul</a></p>
            </div>
        </div>
        <div class="unidade" id="unidade_tagua">
            <div class="endereco_unidade">
                <h1>FISK Taguatinga Norte</h1>
                <p><a href="mailto:contato@fisktaguatinganorte.com.br"></a></p>
                <p class="telefone">(61) 3355-1191 / 3355-1192</p>
                <p class="cep">Av. Samdu Norte QNE 24 Casa 05, Taguatinga Norte, Brasília - DF, 72125-240</p>
            </div>
            <div class="iframe_unidade" id="iframe_tagua">
                <iframe width="420" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=fisk+taguatinga+norte&amp;sll=-15.811517,-48.067723&amp;sspn=0.003427,0.003809&amp;ie=UTF8&amp;hq=fisk+taguatinga+norte&amp;hnear=&amp;ll=-15.797292,-48.064156&amp;spn=0.013709,0.015235&amp;t=h&amp;z=14&amp;iwloc=A&amp;cid=5613554592190533086&amp;output=embed"></iframe>
                <p><a id="mapa_tagua" class="ampliar_mapa" href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=FISK&amp;sll=-15.811156,-48.066999&amp;sspn=0.006854,0.007617&amp;ie=UTF8&amp;hq=FISK&amp;hnear=&amp;ll=-15.797292,-48.064156&amp;spn=0.001714,0.001904&amp;t=h&amp;z=14&amp;iwloc=A&amp;cid=5613554592190533086">Ampliar mapa da FISK Taguatinga Norte</a></p>
            </div>
        </div>
        <script type="text/javascript" charset="utf-8">
        $(function(){
            $('div.endereco_unidade').click(function(){
                alvo = $(this).children('p').children('a').attr('href');
                location.href = alvo;
            });
            $('a.ampliar_mapa').click(function(){
                id = $(this).attr('id');
                if(id=='mapa_tagua'){
                    $('div#unidade_asasul').hide();
                    $('div#iframe_tagua').addClass('wide_frame');
                    $('div#iframe_tagua iframe').attr('width','860');
                } else {
                    $('div#unidade_tagua').hide();
                    $('div#iframe_asasul').addClass('wide_frame');
                    $('div#iframe_asasul iframe').attr('width','860');
                }
                return false;
            });
        });
        </script>
        <span class="clear block">&nbsp;</span>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        	<p>Para enviar sua mensagem, preencha <strong>todos</strong> os campos abaixo.</p>
        	<?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div>
</div>
<div id="navegador">
	<p><a href="<?php echo home_url( '/' ); ?>">Página Inicial</a> : <a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a> : <?php the_title(); ?></p>
</div>