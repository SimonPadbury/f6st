<?php get_header(); ?>

<div class="row">
  
  <div class="medium-8 columns" id="content" role="main">
    <h1>Category: <?php echo single_cat_title(); ?></h1>
    <hr>
    <?php get_template_part('/includes/loops/content', get_post_format()); ?>
  </div>
  
  <div class="medium-4 columns" id="sidebar" role="navigation">
    <?php get_sidebar(); ?>
  </div>
  
</div>

<?php get_footer(); ?>