<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="head_wrapper"> 
    <a href="<?php echo home_url()?>">
    <img src="<?php echo get_template_directory_uri() . '/images/artboard_1.png' ?>" alt="logo" class="logoheader">
    </a>
    <div class="menuoptions">
      <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
      <?php get_template_part('components/search-form'); ?>
    </div>
  </div>