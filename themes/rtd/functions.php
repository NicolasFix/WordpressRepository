<?php

/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
  wp_register_style('main-style', get_template_directory_uri().'/blog.css', array(), true);
  wp_enqueue_style('main-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

register_nav_menus( array(
  'menu-principal' => 'Menu principal'
) );
function wp_nav_menu_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);

/*Remove things as <br>*/
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function clean_custom_menus() {
  $menu_name = 'menu-principal'; // specify custom menu slug
  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<nav class="navbar navbar-expand-lg">' ."\n";
    $menu_list .= '<button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">';
    $menu_list .= '<span class="hamburger hamburger--slider">';
    $menu_list .= '<span class="hamburger-box"><span class="hamburger-inner"></span></span>';
    $menu_list .= '</span>';
    $menu_list .= '</button>';
    $menu_list .= '<a href="@Url.Action("Index", "Home")" class="navbar-brand">Trust Online</a>';
    $menu_list .= '<div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">';
    $menu_list .= '';

    $menu_list .= "\t\t\t\t". '<ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">' ."\n";


    foreach ((array) $menu_items as $key => $menu_item) {
      $title = $menu_item->title;
      $url = $menu_item->url;
      $menu_list .= "\t\t\t\t\t". '<li  class="nav-item g-mx-20--lg"><a class="nav-link px-0" href="'. $url .'">'. $title .'</a></li>' ."\n";
    }
    $menu_list .= "\t\t\t\t". '</ul>' ."\n";
    $menu_list .= '</div>';
    $menu_list .= "\t\t\t". '</nav>' ."\n";
  } else {
    // $menu_list = '<!-- no list defined -->';
  }
  echo $menu_list;
}
?>
