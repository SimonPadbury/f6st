<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php wp_title('•', true, 'right'); bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="top-bar">
    <div class="top-bar-title">
      <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <span class="menu-icon dark" data-toggle></span>
      </span>
      <strong><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></strong>
    </div>
    <div id="responsive-menu">
      <div class="top-bar-left">
        <?php get_template_part('includes/top-bar-left-menu') ?>
      </div>
      <div class="top-bar-right">
        <span class="top-bar-right-inner">
          <?php get_template_part('includes/top-bar-right-menu') ?>
        </span>
        <span class="top-bar-right-inner">
          <?php get_template_part('includes/top-bar-search') ?>
        </span>
      </div>
    </div>
  </div>