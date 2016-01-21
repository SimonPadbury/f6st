<?php get_header(); ?>

<div class="row">
  
  <div class="medium-8 columns" id="content" role="main">
    <h1><?php _e('Search Results for', 'f6st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
    <hr/>
    <?php get_template_part('/includes/loops/content', 'search'); ?>
  </div>
  
  <div class="medium-4 columns" id="sidebar" role="navigation">
    <?php get_sidebar(); ?>
  </div>
  
</div>

<?php get_footer(); ?>