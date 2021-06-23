<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Le Pays - Accueil</title>
    <?php wp_head() ?>
</head>
<body class="post-template-default single single-post postid-29 single-format-standard logged-in admin-bar no-customize-support">
<?php wp_body_open(); ?>
<header class="header">  
  <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/bnews.png" alt="Logo"></a>



      <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
</header>
