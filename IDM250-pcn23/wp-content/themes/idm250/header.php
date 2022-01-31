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
    <img src="http://parkerishere.com/IDM250-pcn23/wp-content/uploads/2022/01/artboard_1-1.png" alt="logo" class="logoheader">
    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
  </div>