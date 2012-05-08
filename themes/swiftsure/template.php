<?php 
/*
 * Theme hooks for the swiftsure theme
 */
function swiftsure_preprocess_page(&$vars, $hook) {
  $meta = array('#tag' => 'meta',
                '#attributes' => array('name' => 'viewport',
                                       'content' => 'width=device-width, initial-scale=1, maximum-scale=5'
                                       )
               );	
  $vars['head'] = drupal_add_html_head($meta, 'mobile_meta');
}
