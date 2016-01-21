<?php get_header(); ?>

  <div class="row">

    <div class="medium-8 columns" id="content" role="main">
      <?php get_template_part('/includes/loops/content', 'single'); ?>
    </div>

    <div class="medium-4 columns" id="sidebar" role="navigation">
      <?php get_sidebar(); ?>
    </div>

  </div>

  <?php get_footer(); ?>