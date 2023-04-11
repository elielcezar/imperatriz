
<?php
/*
Template Name: Search Page
*/

//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>


<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>


<?php 
      $allsearch = new WP_Query("s=$s&showposts=-1"); 
      $key = wp_specialchars($s, 1); 
      $count = $allsearch->post_count; 
?>

<section id="principal">

  <div class="container">  
    
    <div class="conteudo">
      
        <h2><?php echo $key; ?></h2>
        <p class="pagetitle">
          <strong><?php echo $count; ?></strong> resultados entre notícias, receitas e outros conteúdos do site.
        </p> 
      
    </div>

  </div>

</section>


<?php get_footer(); ?>

