<?php
/*
 * Define post_types & taxonomies
 */
add_theme_support( 'post-thumbnails' );
// add_image_size( 'thumb-article', 931, 621, true );
add_filter( 'thumb-article', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
      return array_merge( $sizes, array(
          'thumb-article' => __( 'image article' ),
      ) );
}
/*
 * Defines navigation menus.
 */
register_nav_menu( 'main-nav', __('Menu principal, affiché dans le header.','b') );
/*
 * Generates a custom menu array
 */
function b_get_menu_id( $location )
{
      $a = get_nav_menu_locations();
      if (isset($a[$location])) return $a[$location];
      return false;
}
function b_get_menu_items( $location )
{
      $navItems = [];
      foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
            // Si vous avoir un contrôle sur les liens affichés, c'est ici. (Par exemple: mettre $item->isCurrent à true|false)
            $item = new stdClass();
            $item->id = $obj->object_id;
            $item->url = $obj->url;
            $item->label = $obj->title;
            array_push($navItems, $item);
      }
      return $navItems;
}
add_filter('menu__item' , 'active' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
/*
 * Generates a link label containing the post_title (from the loop)
 */
function get_the_link($string, $replace = '%s')
{
      // Mode opératoire :
      // - On remplace la string "%s" (ou celle fournie par $replace) par le titre du post courant dans the_loop, entouré d'un span.
      // - Ne pas oublier d'ajouter une classe sur ce span (dans ce cas, une classe "sro" pour "Screen Readers Only"
      // - Via le CSS, on cible cette classe afin de lui attribuer les styles nécessaires pour la cacher.
      // Le but étant de créer un lien unique, tout en respectant un design demandant une répétition de liens qui, à priori, seraient identiques (par exemple : "Lire la suite", "Voir plus", ...).
      // Cette amélioration va impacter l'accessibilité de votre site, mais donc aussi son référencement.
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}
function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}
/*
 * Generates a custom excerpt, used on the homepage
 */
function get_the_custom_excerpt($length = 150)
{
      $excerpt = get_the_content();
      $excerpt = strip_shortcodes( $excerpt );
      $excerpt = strip_tags( $excerpt );
      // Pourrait être amélioré de façon significative.
      // Par exemple :
      // - ne pas couper en plein milieu d'un mot
      // - ajouter un point de suspension quand on a dû couper dans le texte
      // - etc.
      return substr($excerpt, 0, $length);
}
function the_custom_excerpt($length = 150)
{
      echo get_the_custom_excerpt($length);
}
