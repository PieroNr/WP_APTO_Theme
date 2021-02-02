<?php 
    /***********************************
     * Ajout des styles et des scripts 
     * ********************************/
    function lpwd_add_styles_and_scripts() {
        wp_enqueue_style( 'main', get_template_directory_uri() .'/dist/css/main.css' );  
        wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
        wp_enqueue_script( 'perso', get_template_directory_uri() . '/dist/js/perso.js', array('jquery'), '2.0', true);
        wp_enqueue_script( 'navigation', get_template_directory_uri() . '/dist/js/main-csss-animation.js', array(), '2.0', true);
        wp_enqueue_script( 'Menu', get_template_directory_uri() . '/dist/js/menuBurger.js', array(), '2.0', true);
        
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
         
        $user_id = get_current_user_id(); 
        $user_info = get_userdata($user_id); 

        if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
            $menu = get_term( $locations[$theme_location], 'nav_menu' );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
     
            $menu_list  = '<div class="headerPages">' ."\n";

             
            foreach( $menu_items as $menu_item ) {
                 
                $link = $menu_item->url;
                $title = $menu_item->title;
                
                $menu_list .= '<div class="headerPages__link">' . "\n";
                $menu_list .= '<a href="'.$link.'">'.$title.'</a>'. "\n";
                $menu_list .= '</div>' . "\n";
            }
            $menu_list .= '<div class="row buttonsNav">' . "\n";
            if($user_info) {
                $menu_list .= '<a href="' . get_home_url() . '/wp-login.php?action=logout" class="buttonDeconnexion col-l-12 col-md-12 col-sm-6">Déconnexion</a>' . "\n";
            } else {
                $menu_list .= '<button id="btnLogin" class="buttonConnexion col-l-12 col-md-12 col-sm-6">Connexion</button>' . "\n";
                $menu_list .= '<button id="btnRegister" class="buttonInscription col-l-12 col-md-12 col-sm-6">Inscription</button>' . "\n";
            }
            
            $menu_list .= '</div>' . "\n";
            $menu_list .= '<button class="buttonPanier">Panier</button>' . "\n";
            $menu_list .= '</div>' . "\n";

        } else {
            $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
        }
        echo $menu_list;
    }

    function lpwd_clean_custom_menuSecond( $theme_location ) {
        if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
            $menu = get_term( $locations[$theme_location], 'nav_menu' );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
     
            
            $menu_list  = '<nav class="secondaryHeaderNav">'."\n";
            $menu_list  .= '<ul class="secondaryHeaderPages">'."\n";

             
            foreach( $menu_items as $menu_item ) {
                 
                $link = $menu_item->url;
                $title = $menu_item->title;
                
                $menu_list .= '<li class="secondaryHeaderPages__link">' . "\n";
                $menu_list .= '<a href="'.$link.'">'.$title.'</a>'. "\n";
                $menu_list .= '</li>' . "\n";
            }
            $menu_list .= '</ul>' . "\n";
            $menu_list .= '</nav>' . "\n";
            $menu_list .= '<button class="buttonAchat">Acheter maintenant</button>' . "\n";
            
            
             

     
        } else {
            $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
        }
        echo $menu_list;
    }

    function lpwd_clean_custom_Footer( $theme_location ) {
        if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
            $menu = get_term( $locations[$theme_location], 'nav_menu' );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $homeURL = get_home_url();
     
            
            $menu_list  = '<div class="footer-left">'."\n";
            $menu_list  .= '<p class="footer-links">'."\n";
            $menu_list .= '<a class="link-1" href="'.$homeURL.'">Accueil</a>'. "\n";

             
            foreach( $menu_items as $menu_item ) {
                 
                $link = $menu_item->url;
                $title = $menu_item->title;
                
                
                $menu_list .= '<a href="'.$link.'">'.$title.'</a>'. "\n";
                
            }
            $menu_list .= '</p>' . "\n";
            $menu_list .= '<p>APTO &copy; 2021</p>' . "\n";
            $menu_list .= '</div>' . "\n";
            
            
             

     
        } else {
            $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
        }
        echo $menu_list;
    }

    /** @link https://developer.wordpress.org/reference/functions/register_nav_menus/*/
    function lpwd_register_menus() {
        register_nav_menus( array(
            'navigation' =>  'Navigation de mon site',
            'navigation-second' =>  'Navigation pour montre',
            'footer-menu' => 'Menu Footer' ,
        ) );
    }
    add_action( 'init', 'lpwd_register_menus' );

     /***********************************
     *     End : Ajout des menus
     * ********************************/

     // Formulaire d'inscription
    function register_user_form() {
        echo '<form action="' . admin_url( 'admin-post.php?action=nouvel_utilisateur' ) . '" method="post" id="register-user">';

        // Les champs requis
        echo '<div class="row row__center">
                <div class="col-8">
                    <input type="text" tabindex="10" size="20" name="username" id="nom-user" class="modal__input" placeholder="Nom d\'utilisateur" required>
                </div>
            </div>';

        echo '<div class="row row__center">
                <div class="col-8">               
                    <input type="email" tabindex="20" size="20" name="email" id="email-user" class="modal__input" placeholder="Adresse Mail" required>
                </div>
            </div>';
        echo '<div class="row row__center">
                <div class="col-8">
                    <input type="password" tabindex="20" size="20" name="pass" id="pass-user" class="modal__input" placeholder="Mot de passe" required>
                </div>
            </div>';

        // Nonce (pour vérifier plus tard que l'action a bien été initié par l'utilisateur)
        wp_nonce_field( 'create-' . $_SERVER['REMOTE_ADDR'], 'user-front', false );

        //Validation
        echo '<div class="row row__center" style="margin-top : 20px;">
                <div class="col-8">
                    <input type="submit" value="Créer mon compte" class="modal__button">
                </div>
            </div>';
        echo '</form>';

        // Enqueue de scripts qui vont nous permettre de vérifier les champs
        wp_enqueue_script( 'inscription-front' );
    }

    // Enregistrement de l'utilisateur
    add_action( 'admin_post_nopriv_nouvel_utilisateur', 'ajouter_utilisateur' );
    function ajouter_utilisateur() {
        // Vérifier le nonce (et n'exécuter l'action que s'il est valide)
        if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'create-' . $_SERVER['REMOTE_ADDR'] ) ) {

            // Vérifier les champs requis
            if ( ! isset( $_POST['username'] ) || ! isset( $_POST['email'] ) || ! isset( $_POST['pass'] )) {
                wp_redirect( site_url( '/inscription' ) );
                exit();
            }
            
            $nom = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // Vérifier que l'user (email ou nom) n'existe pas
            if ( is_email( $email ) && ! username_exists( $nom )  && ! email_exists( $email ) ) {
                // Création de l'utilisateur
                $user_id = wp_create_user( $nom, $pass, $email );
                $user = new WP_User( $user_id );
                // On lui attribue un rôle
                $user->set_role( 'subscriber' );
                // Envoie un mail de notification au nouvel utilisateur
                wp_new_user_notification( $user_id, $pass );
            } else {
                wp_redirect( site_url( '/inscription' ) );
                exit();
            }

            // Connecter automatiquement le nouvel utilisateur
            $creds = array();
            $creds['user_login'] = $nom;
            $creds['user_password'] = $pass;
            $creds['remember'] = false;
            $user = wp_signon( $creds, false );

            // Redirection
            wp_redirect( get_home_url() );
            exit();
        }
    }

    // Il faut register les scripts que notre formualire utilise
    add_action( 'wp_enqueue_scripts', 'register_login_script' );
    function register_login_script() {
        wp_enqueue_script( 'inscription-front', get_template_directory_uri() . '/dist/js/inscription.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'message', get_template_directory_uri() . '/dist/js/message.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'jquery' );

        // Ce script sera chargé sur toutes les pages du site, afin d'afficher les messages d'erreur
        wp_enqueue_script( 'message' );
    }

    add_action( 'wp_header', 'show_user_registration_message' );
    function show_user_registration_message() {
        if ( isset( $_GET['message'] ) ) {
            $wrapper = '<div class="message">%s</div>';
            switch ( $_GET['message'] ) {
                case 'already-registred':
                    echo wp_sprintf( $wrapper, 'Un utilisateur possède la même adresse.' );
                    break;
                case 'not-user':
                    echo wp_sprintf( $wrapper, 'Votre inscription a échouée.' );
                    break;
                case 'user-updated':
                    echo wp_sprintf( $wrapper, 'Votre profil a été mis à jour.' );
                    break;
                case 'need-email':
                    echo wp_sprintf( $wrapper, 'Votre profil \'a pas été mis à jour. L\'email doit être renseignée.' );
                    break;
                case 'email-exist':
                    echo wp_sprintf( $wrapper, 'Votre profil \'a pas été mis à jour. L\'adresse email est déjà utilisée.' );
                    break;
                case 'welcome':
                    echo wp_sprintf( $wrapper, 'Votre compte a été créé. Vous allez recevoir un email de confirmation.' );
                    break;
                default :
            }
        }
    }
?>