<?php get_header(); ?>

<div class="row">
  
  <div class="medium-8 columns" id="content" role="main">
		<div class="callout warning">
      <h1><i class="fa fa-exclamation-triangle"></i> <?php _e('Error', 'f6st'); ?> 404</h1>
      <p><?php _e('The page you were looking for does not exist.', 'f6st'); ?></p>
    </div>
  </div>
  
  <div class="medium-4 columns" id="sidebar" role="navigation">
    <?php get_sidebar(); ?>
  </div>
  
</div>

<?php get_footer(); ?>