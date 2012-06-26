<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function kepler6_omega_subtheme_node_submitted($node) {
  return t('Posted by !username on @datetime',
    array(
     '!username' => theme('username', $node),
     '@datetime' => format_date($node->created, 'custom', 'm/d/Y'),
    ));
}

function kepler6_omega_subtheme_theme_registry_alter(&$theme_registry) {
  if (isset($theme_registry['node_submitted'])) {
    $theme_registry['node_submitted']['function'] = 'kepler6_omega_subtheme_node_submitted';
  }
}
