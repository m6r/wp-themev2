<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Add Prebuilt Layout for Page Builder
 */
/*function m6r_prebuilt_layouts($layouts){
  $layouts['home-page'] = array(
    // We'll add a title field
    'name' => __('Page d\'accueil par défaut', 'vantage'),
    'widgets' => array( ... ),
    'grids' => array( ... ),
    'grid_cells' => array( ... )
  );

  return $layouts;
}

add_filter('siteorigin_panels_prebuilt_layouts','m6r_prebuilt_layouts');
*/
