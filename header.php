<!DOCTYPE html>
<?php /** @link https://developer.wordpress.org/reference/functions/language_attributes/ */ ?>
<html <?php language_attributes(); ?>>

<head>
    <?php /** @link https://developer.wordpress.org/reference/functions/bloginfo/ */ ?>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php /** @link https://developer.wordpress.org/reference/functions/the_title/ */?>
    <title> <?php bloginfo("name"); ?> | <?php the_title(); ?></title>

    <?php /** @link https://developer.wordpress.org/reference/functions/wp_head/ */ ?>
    <?php wp_head(); ?>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<header class="header">
        <div class="wrapper-mob">
            <div class="header__logo-mobile">
                <img src="<?php echo get_template_directory_uri() .'/dist/images/logo_apto2.png' ?>" alt="" width="70px">
            </div>
            <a class="burgerMobile" onclick="openMenu();">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="menu -close">
            <div class="mainHeader">
                <div class="header__logo">
                    <img src="<?php echo get_template_directory_uri() .'/dist/images/logo_apto2.png' ?>" alt="" width="80px">
                </div>
                
        
                <div class="headerPages">
                    <?php lpwd_clean_custom_menu("navigation") ?>
                </div>
            </div>
            <div class="secondaryHeader">
                
            <?php lpwd_clean_custom_menuSecond("navigation-second") ?>
            
            </div>
            
        </div>  
        
</header>
<div class="flux"></div>

<!-- Debut modal  -->

<!-- The Modal -->
<div id="modalLogin" class="modal">
  <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close closeLogin">&times;</span>
            <h1 class="modal__title">Connexion</h1>
        </div>
        <div class="modal-body row__center">
            <div class="modal_social">
                <a class="modal_social__facebook title -api"> <i class="fa fa-facebook"></i> </a>
                <a class="modal_social__google title -api" > <i class="fa fa-google"></i> </a> 
            </div>

            <form method="post" action="<?php echo get_home_url()?>/wp-login.php" id="loginform" name="loginform">
                <div class="row row__center">
                    <div class="col-8">
                        <input class="modal__input" type="text" id="user_login" name="log" placeholder="Nom d'utilisateur">
                    </div>       
                </div>
                <div class="row row__center">
                    <div class="col-8">
                        <input class="modal__input" type="password" id="user_pass" name="pwd" placeholder="Mot de passe">
                    </div>
                </div>
            
                <div class="row row__center">
                    <div class="col-8">
                        <div class="row__left">
                        <input class="modal__checkbox" type="checkbox" id="stayco" name="stayco" checked>
                        <label class="modal__check" for="stayco">Rester connecté</label>
                        </div>
                    </div>
                </div>
                <div class="row row__center" style="margin-top : 20px;">
                    <div class="col-8">
                        <input type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="wp-submit" class="modal__button">
                        <input type="hidden" value="<?php echo get_home_url()?>" name="redirect_to">
                    </div>
                </div>
            </form>
            <div class="row row__center" style="margin-top : 20px;">
                <div class="col-10">
                    <a href="#" id="switchToRegister" class="modal__textsm">Si vous ne possédez pas de compte : Inscription</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div id="modalRegister" class="modal">
  <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close closeRegister">&times;</span>
            <h1 class="modal__title">S'inscrire</h1>
        </div>
        <div class="modal-body row__center">
            <div class="modal_social">
                <a class="modal_social__facebook title -api"> <i class="fa fa-facebook"></i> </a>
                <a class="modal_social__google title -api" > <i class="fa fa-google"></i> </a> 
            </div>
            <!-- <div class="row row__center">
                <div class="col-8">
                    <input class="modal__input" type="text" placeholder="Prénom">
                </div>       
            </div>
            <div class="row row__center">
                <div class="col-8">
                    <input class="modal__input" type="text" placeholder="Nom">
                </div>
            </div>
            <div class="row row__center">
                <div class="col-8">
                    <input class="modal__input" type="text" placeholder="Adresse Mail">
                </div>       
            </div>
            <div class="row row__center">
                <div class="col-8">
                    <input class="modal__input" type="text" placeholder="Mot de passe">
                </div>       
            </div>
            <div class="row row__center">
                <div class="col-8">
                    <input class="modal__input" type="text" placeholder="Confirmer mot de passe">
                </div>       
            </div>
            <div class="row row__center" style="margin-top : 20px;">
                <div class="col-8">
                <button href="#" class="modal__button" style="margin-top: 20px;">Inscription</button>
                </div>
            </div> -->
            <?php echo register_user_form();?>  
            <div class="row row__center" style="margin-top : 20px;">
                <div class="col-10">
                    <a href="#" id="switchToLogin" class="modal__textsm">Si vous avez déjà un compte : Connexion</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin modal -->

<script>

var modalLogin = document.getElementById("modalLogin");
var modalRegister = document.getElementById("modalRegister");


var btnLogin = document.getElementById("btnLogin");
var btnRegister = document.getElementById("btnRegister");


var spanLogin = document.getElementsByClassName("closeLogin")[0];
var spanRegister = document.getElementsByClassName("closeRegister")[0];

var switchRegister = document.getElementById("switchToRegister");
var switchLogin = document.getElementById("switchToLogin");


btnLogin.onclick = function() {
    modalLogin.style.display = "block";
}

btnRegister.onclick = function() {
    modalRegister.style.display = "block";
}

switchRegister.onclick = function() {
    modalLogin.style.display = "none";
    modalRegister.style.display = "block";
}
switchLogin.onclick = function() {
    modalLogin.style.display = "block";
    modalRegister.style.display = "none";
}


spanLogin.onclick = function() {
    modalLogin.style.display = "none";
}
spanRegister.onclick = function() {
    modalRegister.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modalLogin) {
    modalLogin.style.display = "none";
  }
  if (event.target == modalRegister) {
    modalRegister.style.display = "none";
  }
}
</script>

        