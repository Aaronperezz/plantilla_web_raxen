<?php
function raxen_setup() {
  register_nav_menus([
    'main-menu' => 'Menú Principal',
  ]);
}
add_action('after_setup_theme', 'raxen_setup');

add_theme_support('post-thumbnails');