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
        <h2><?php the_title(); ?></h2>
        <ul class="">
          <li>
            <a href="<?php echo home_url( '/' ); ?>" class="bread_link">Home</a>
          </li>
          <li>Pré-Matricula</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- BLOG -->
  <section class="contact">
    <div class="container">
      <!-- Blog post area starts -->
      <div class="row">
        <div class="col-lg-12">
          <div class="media blog-media flex-wrap">
            <div class="media-body page">
              <div class="entry-content">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                  <p>Para enviar sua pré-matricula, preencha <strong>todos</strong> os campos abaixo.</p>

                  <div class="text_input">
                    <?php the_content(); ?>
                  </div>
                <?php endwhile; // end of the loop. ?>
              </div>
            </div>
          </div>
        </div>

        <div class="divider divider-center divider-gradient divider-gradient-gray w50 mx-auto my-5">
          <i class="fa fa-circle divider-icon bg-white text-primary"></i>
        </div>

        <div class="col-lg-12">
          <div class="section-title text-center title-ex1">
            <h2 class="title-text">Asa Sul</h2>

            <div class="text-center">
              <p><a href="mailto:contato@fiskasasul.com.br">contato@fiskasasul.com.br</a></p>
              <p class=" telefone">(61) 3345-0083 / 3345-0087</p>
              <p class=" cep">CLS 115 Bloco B Loja 02, Brasília - DF, 70385-520</p>

              <br /><br />
            </div>

            <div class="contact-google">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5342.891300909032!2d-47.926070284331566!3d-15.831078028077702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2555ea80001d%3A0x1932d20900ee462a!2sFisk-Asa+Sul!5e1!3m2!1spt-BR!2sbr!4v1521153473415" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p><a id="mapa_asasul" class="ampliar_mapa" href="https://www.google.com.br/maps/place/Fisk-Asa+Sul/@-15.831078,-47.9260703,1227m/data=!3m2!1e3!4b1!4m5!3m4!1s0x935a2555ea80001d:0x1932d20900ee462a!8m2!3d-15.8310832!4d-47.9238816?hl=pt-BR">Ampliar mapa da FISK Asa Sul</a></p>
            </div>
            <br /><br /><br />
          </div>
        </div>

        <div class="col-lg-12">
          <div class="section-title text-center title-ex1">
            <h2 class="title-text">FISK Taguatinga Norte</h2>

            <div class="text-center">
              <p><a href="mailto:contato@fisktaguatinganorte.com.br">contato@fisktaguatinganorte.com.br</a></p>
              <p class="telefone">(61) 3355-1191 / 3355-1192</p>
              <p class="cep">Av. Samdu Norte QNE 24 Casa 05, Taguatinga Norte, Brasília - DF, 72125-240</p>

              <br /><br />
            </div>

            <div class="contact-google">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85489.21957517684!2d-48.030822177046474!3d-15.824083013238164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a333b021659e7%3A0xae02f16ca7871444!2sFisk+Ingl%C3%AAs+e+Espanhol!5e1!3m2!1spt-BR!2sbr!4v1521153663128" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p><a id="mapa_tagua" class="ampliar_mapa" href="https://goo.gl/maps/ZxvJnw8Q1vo" target="_blank">Ampliar mapa da FISK Taguatinga Norte</a></p>
            </div>

            <br /><br /><br />
          </div>
        </div>

        <div class="col-lg-12">
          <div class="section-title text-center title-ex1">
            <h2 class="title-text">FISK Asa Norte</h2>

            <div class="text-center">
              <p><a href="mailto:contato@fiskasanorte.com.br">contato@fiskasanorte.com.br</a></p>
              <p class="telefone">(61) 3041-8474 / 3041-8797</p>
              <p class="cep">SHCGN 714/715 Bloco E Lojas 22/24 - de frente para a Av. W-4 e também à Igreja São Francisco de Assis e ao Colégio Leonardo Da Vinci</p>

              <br /><br />
            </div>

            <div class="contact-google">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42761.19482586792!2d-47.899662000000006!3d-15.745462000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1534e15f9649378c!2sFisk+Centro+de+Ensino!5e1!3m2!1spt-BR!2sbr!4v1521153849192" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p><a id="mapa_asanorte" class="ampliar_mapa" href="https://goo.gl/maps/ydPKbH4inDJ2" target="_blank">Ampliar mapa da FISK Asa Norte</a></p>
            </div>

            <br /><br /><br />
          </div>
        </div>
      </div>
    </DIV>
  </section>
</div>