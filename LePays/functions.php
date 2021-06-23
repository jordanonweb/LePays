<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus(array('main' => 'Menu Principal'));

function jordan_modele() {
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css' );
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
  }
  add_action( 'wp_enqueue_scripts', 'jordan_modele' );
  
