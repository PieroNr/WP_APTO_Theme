

const navSelector = ".c-nav";
const nav = document.querySelector(navSelector);

const burgerSelector = ".burger";
const burger = document.querySelector(burgerSelector);

let onClickBurger = function(){
    // Si fermé on ajoute les classes
   if(!this.classList.contains("-active")){
        this.classList.add("-active");
        nav.classList.add("-open");
        nav.classList.remove("-close");
   } else {
        this.classList.remove("-active");
        nav.classList.add("-close");
        nav.classList.remove("-open");
   }
    // Si ouverte on enlève les classes
}

burger.addEventListener("click", onClickBurger)



