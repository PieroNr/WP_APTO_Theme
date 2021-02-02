let filterItemsSelector = ".filterItem";
let filterItems = document.querySelectorAll(filterItemsSelector);

filterItems.forEach(function(item){
    item.addEventListener("click", function(e){
        let attribute = this.dataset.attribute;
        let value = this.dataset.value;
        Array.prototype.slice.call(this.parentNode.children).forEach(function(child){
            child.classList.remove("-active");
        });
        this.classList.add("-active");

        if(attribute === "couleur-du-bracelet"){
            changeImage(value, ".watch__strap");
        } 

        let select = document.getElementById(attribute);
        select.value = value; 

        jQuery(select).trigger("change.wc-variation-form");
    })
})


let changeImage = function(color, selector){
    let image = document.querySelector(selector);
    let src = image.dataset.source;
    src = src.replace("{color}", color);
    image.src = src;
}


let addToCartSelector = "add-product-to-cart";
let buttonAddToCart = document.getElementById(addToCartSelector);

buttonAddToCart.addEventListener("click", function(){
    document.querySelector(".variations_form").submit();
})




function convertPXToVh(px) {
	return px * (100 / document.documentElement.clientHeight);
}

let header = document.getElementsByClassName("header");
let infoProd = document.getElementById("informations-product");
let imgProd = document.getElementById("img-product");

jQuery(document).ready(function( $ ) {
    let heightHeader = convertPXToVh(header[0].offsetHeight)
    let infoHeight = (100 - heightHeader) + "vh";
    infoProd.style.height = infoHeight;
    imgProd.style.height = infoHeight;
});


let imageMontre = document.getElementById('imageMontre');


function zoomImage(valeurImage){
    imageMontre.style.opacity="0";
    var imageSelect = document.getElementsByClassName('presMontre__image')[valeurImage-1];

    if(imageSelect.className.indexOf('-select')!=-1){
        imageSelect.className = "presMontre__image";
        imageMontre.style.opacity="1";
        
    } else {
        for(var i=0;i<3;i++){
            document.getElementsByClassName('presMontre__image')[i].className ="presMontre__image";
        }
        imageSelect.className += " -select";

        if(valeurImage==1){
            imageSelect.className += " -gauche";
        } else if(valeurImage==3){
            imageSelect.className += " -droite";
        }
    }

    
    console.log(imageSelect);
    
}

