

const navSelector = ".c-nav";
const nav = document.querySelector(navSelector);
const navItems = document.querySelectorAll(navSelector + "__item");

const burgerSelector = ".burger";
const burger = document.querySelector(burgerSelector);


//timeLine d'ouverture
let openTimeLine = gsap.timeline({paused : true});
openTimeLine
     .set(navItems, {opacity : 0, x: "-100%"})
     .fromTo(nav, {x: "-100%", opacity: 0} ,{duration: 1, x :0, opacity : 1, display : "flex" })
     .to(burger, {duration : 1, backgroundColor: '#333' }, "-=1")
     .to(navItems, {duration : 0.25, opacity : 1, x:0, stagger : 0.25})


//timeLine de fermeture
let closeTimeLine = gsap.timeline({paused : true});
closeTimeLine
     .to(navItems, {duration : 0.25, opacity : 0, x: "100%", stagger : 0.25})
     .fromTo(nav, {x: "0", opacity: 1} ,{duration: 1, x :"100%", opacity : 0, display : "none" })
     .to(burger, {duration : 1, backgroundColor: 'transparent' }, "-=1")
     
// Variable pour vérifier si la nav est ouverte
let isNavOpen = false;


let onClickBurger = function(){
     if(!isNavOpen){
          openTimeLine.restart();
          isNavOpen = true;
          
     } else {
          closeTimeLine.restart();
          isNavOpen = false;
     }
}

burger.addEventListener("click", onClickBurger)
