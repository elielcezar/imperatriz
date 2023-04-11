<?php get_header(); ?>

<div id="masthead" style="background-image: url(<?php the_field('banner'); ?>);">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p class="chamada"><?php the_field('chamada'); ?></p>
  </div>
</div>

<div id="recentes">
    <div class="container">
        <h3>Mais recentes</h3>
        <div class="posts">
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/thumb-1.jpg" alt="">
                <h4>Lorem ipsum</h4>
                <p>lorem ispum</p>
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/thumb-2.jpg" alt="">
                <h4>Lorem ipsum</h4>
                <p>lorem ispum</p>
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/thumb-3.jpg" alt="">
                <h4>Lorem ipsum</h4>
                <p>lorem ispum</p>
            </div>
        </div>
    </div>
</div>

<div id="principal">
  <div class="container">
    <div class="conteudo">
      <?php
      $url_video = get_field('url_video');
      if (is_singular('conteudo') && $url_video) {
      ?>
      <div class="video">
        <?php echo get_field('url_video'); ?>
      </div>
      <?php } ?>
      <?php the_content(); ?>
    </div>
  </div>
</div><!-- principal -->

<div id="publicidade">
    <div class="container">
    <img src="<?php echo get_stylesheet_directory_uri()?>/img/banner.jpg" alt="">
    </div>
</div>


<?php get_footer(); ?>