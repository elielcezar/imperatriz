<?php
/*
Template Name: Fornecedores
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>


<div id="masthead">
  <div class="container">
    <h2><?php the_title(); ?></h2>
  </div>
</div>



<div id="principal">
  <div class="container">

    <ul class="fornecedores">

      <?php
      $loop = new WP_Query(array(
        'post_type' => 'fornecedor',
        'meta_key'      => 'tipo',
        'meta_value'    => 'fixo',
        'posts_per_page' => -1,
        'orderby' => 'rand'
      ));
      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>

      <!--li><img src="<?php the_field('logo'); ?>" alt=""></li-->

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
    <ul class="fornecedores">
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

      <!--li><img src="<?php the_field('logo'); ?>" alt=""></li-->

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





<?php get_footer(); ?>