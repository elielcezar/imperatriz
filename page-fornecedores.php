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

        <li><img src="<?php the_field('logo'); ?>" alt=""></li>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      <!--li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/bubaloo-3.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/cocacola.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/lacta.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/concha.png" alt=""></a></li-->
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

        <li><img src="<?php the_field('logo'); ?>" alt=""></li>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </ul>

  </div>
</div>





<?php get_footer(); ?>