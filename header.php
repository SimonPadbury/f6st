<!DOCTYPE html>
<html class="no-js">

<head>
  <title>
    <?php wp_title('•', true, 'right'); bloginfo('name'); ?>
  </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="top-bar" id="top-bar-menu">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text">
          <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </li>
      </ul>
    </div>
    <div class="top-bar-left">
      <?php get_template_part('includes/top-bar-left-menu') ?>
    </div>
    <div class="top-bar-right">
      <?php get_template_part('includes/top-bar-search') ?>
    </div>
    <div class="top-bar-right">
      <?php get_template_part('includes/top-bar-right-menu') ?>
    </div>
  </div>

  <?php /*
  ========
  For your use if you require it. See also example style in theme/theme.css
  ========
  <header class="site-header">
    <div class="row">
      <div class="small-12 columns">
        <h1 id="site-title">
          <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </h1>
      </div>
    </div>
  </header> 
  */ ?>