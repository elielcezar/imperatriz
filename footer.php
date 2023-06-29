<footer>

  <div class="footer-1">
    <div class="container">
      <ul class="patrocinadores">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'fornecedor',
          'meta_key'      => 'tipo',
          'meta_value'    => 'fixo',
          'posts_per_page' => -1,
          'orderby' => 'rand'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post();
        ?>

        <?php
            $has_content = get_field('possui_conteudo');
            if ($has_content) { ?>
        <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a></li>
        <?php } else { ?>
        <li><a href="<?php the_field('link_vitrine'); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a></li>
        <?php } ?>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </ul>
    </div>
  </div>

  <div class="footer-2">
    <div class="container">
      <ul class="patrocinadores">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'fornecedor',
          'meta_key'      => 'tipo',
          'meta_value'    => 'randomico',
          'posts_per_page' => -1,
          'orderby' => 'rand'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>

        <?php
            $has_content = get_field('possui_conteudo');
            if ($has_content) { ?>
        <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo_branco'); ?>" alt=""></a></li>
        <?php } else { ?>
        <li><a href="<?php the_field('link_vitrine'); ?>"><img src="<?php the_field('logo_branco'); ?>" alt=""></a></li>
        <?php } ?>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </div>

  <div class="footer-3">
    <div class="container">
      <div class="row">
        <div class="col-1">

          <div class="row">
            <div class="col-1">
              <ul>
                <li><a href="http://estacoesimperatriz.com.br/blog/">Blog</a></li>
                <li><a href="http://estacoesimperatriz.com.br/receitas/">Receitas</a></li>
                <li><a href="http://estacoesimperatriz.com.br/vitrine-do-fornecedor/">Vitrine do Fornecedor</a></li>
                <li><a href="http://estacoesimperatriz.com.br/revista/">Revista</a></li>
                <li><a href="http://estacoesimperatriz.com.br/#main-wrapper">Cadastro</a></li>
                <li><a href="http://estacoesimperatriz.com.br/termos-e-condicoes-de-uso-do-site/">Política de Cookies</a></li>
                <li><a href="http://estacoesimperatriz.com.br/politica-geral-de-privacidade-e-protecao-de-dados/">Política Geral de Privacidade<br />e Proteção de Dados</a></li>
              </ul>
            </div>
            <div class="col-2">
              <div class="newsletter">
                <h3>Newsletter</h3>
                <p>Receba as novidades</p>
                <?php echo do_shortcode('[mc4wp_form id=105]'); ?>
              </div>
            </div>
          </div><!-- row -->

        </div><!-- col-1 -->

        <div class="col-2">

          <div class="row">
            <div class="col-1 social">
              <h4>Redes sociais</h4>
              <ul>
                <li><a href="https://www.instagram.com/super_imperatriz" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://pt-br.facebook.com/superimperatriz" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=554884048226" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="https://www.youtube.com/user/superimperatrizvideo" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="col-2">
              <a href="http://estacoesimperatriz.com.br/" class="logo">Imperatriz</a>
            </div>
          </div><!-- row -->

        </div><!-- col-1 -->

      </div>
    </div>
  </div>


</footer>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>