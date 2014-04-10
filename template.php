<?php

/**
 * @file
 * template.php. Preprocess hooks and helper functions to alter the output of
 * renderable arrays.
 */

/**
 * Add a custom, theme-specific JS file. Added here so it can be placed in the
 * footer instead of the header which is where the info file places JS.
 */
drupal_add_js(drupal_get_path('theme', 'bootstrap_starter') . '/js/theme.js', array('type' => 'file', 'scope' => 'footer'));

/**
 * Implements hook_preprocess_page().
 */
function bootstrap_starter_preprocess_page(&$variables) {
  // Create the logo image tag here to keep page.tpl clean. We use JS in
  // theme.js to swap out the svg for a png for old browsers.
  $logo_variables = array(
    'path' => base_path() . drupal_get_path('theme', 'bootstrap_starter') . '/images/logo.svg',
    'alt' => 'Axia Logo',
    'attributes' => array(
      'width' => 100, // Update when you create your custom logo
      'height' => 50,
      'title' => 'Home',
      'class' => 'fluid js__svg-image',
    ),
  );
  $variables['svg_logo'] = theme('image', $logo_variables);
}
