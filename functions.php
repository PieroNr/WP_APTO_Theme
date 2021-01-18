<?php 
    /***********************************
     * Ajout des styles et des scripts 
     * ********************************/
    function lpwd_add_styles_and_scripts() {
        wp_enqueue_style( 'main', get_template_directory_uri() .'/dist/css/main.css' );  
        wp_enqueue_script( 'perso', get_template_directory_uri() . '/dist/js/perso.js', array('jquery'), '2.0', true);
        wp_enqueue_script( 'navigation', get_template_directory_uri() . '/dist/js/main-csss-animation.js', array(), '2.0', true);
    }

    /** @link https://developer.wordpress.org/plugins/hooks/ */
    /** @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/ */
    add_action( 'wp_enqueue_scripts', 'lpwd_add_styles_and_scripts' );


    /***********************************
     * END : Ajout des styles et des scripts 
     * ********************************/


    /***********************************
     *    Ajout des pages d'options 
     * ********************************/
    
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page([
            'page_title' => 'Sections générales',
            'menu_title' => 'Sections',
            'menu_slug' => 'sections-generales',
            'capability' => 'edit_posts',
            'parent_slug' => '',
            'position' => 10,
            'icon_url' => 'dashicons-align-full-width',
            'redirect' => false,
            'post_id' => 'sections',
            'autoload' => false,
            'update_button' => 'Mettre à jour',
        ]);
    }

    /***********************************
     * END : Ajout des pages d'options 
     * ********************************/



    /***********************************
     *         Ajout des menus
     * ********************************/

     /* METHODE NUMERO 1 */
    //require_once get_template_directory() . '/classes/class-crd-walker-menu.php';


    /* METHODE NUMERO 2 */
    /** @link https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/ */
    function lpwd_clean_custom_menu( $theme_location ) {
        if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
            $menu = get_term( $locations[$theme_location], 'nav_menu' );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
     
            $menu_list  = '<nav class="c-nav">' ."\n";
            $menu_list .= '<ul class="c-nav__list">' ."\n";
     
            $count = 0;
            $submenu = false;
             
            foreach( $menu_items as $menu_item ) {
                 
                $link = $menu_item->url;
                $title = $menu_item->title;
                 
                if ( !$menu_item->menu_item_parent ) {
                    $parent_id = $menu_item->ID;
                     
                    $menu_list .= '<li class="c-nav__item">' ."\n";
                    $menu_list .= '<a href="'.$link.'" class="c-nav__link">'.$title.'</a>' ."\n";
                }
     
               
     
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
                    $menu_list .= '</li>' ."\n";      
                    $submenu = false;
                }
     
                $count++;
            }
             
            $menu_list .= '</ul>' ."\n";
            $menu_list .= '</nav>' ."\n";
     
        } else {
            $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
        }
        echo $menu_list;
    }

    /** @link https://developer.wordpress.org/reference/functions/register_nav_menus/*/
    function lpwd_register_menus() {
        register_nav_menus( array(
            'navigation' =>  'Navigation de mon site'
        ) );
    }
    add_action( 'init', 'lpwd_register_menus' );

     /***********************************
     *     End : Ajout des menus
     * ********************************/

?>