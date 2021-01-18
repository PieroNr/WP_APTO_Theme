// Variable Type String
let name = "Alex";

// Variable Type number
let name = 3;

// Variable Type boolean true/false
let name = true;


// Fonction
let logSomething = function(value){
    console.log(value);
}

// Variable Objet
let personne = {
    prenom : "Alex",
    nom : "Chautemps",
    age : 27
}

// Variable Objet
let personne2 = {
    age : 12,
    nom : "Chautemps",
    prenom : "Alex2"
}

// Variable Tableau 
let arrayName = ["value 1", "value 2", "value 3"];

// Variable Tableau d'objets
let films = [{
    titre : "Le seigneur",
    note : 4,
    desc : "lorem ipsum"
}, {
    titre : "Star Wars",
    note : 4,
    desc : "lorem ipsum"
},
{
    titre : "Harry Potter",
    note : 4,
    desc : "lorem ipsum"
}]

/* Boucles */
for (let i = 1; i < films.length; i++) {
    let film = films[i]
    logSomething(film.titre);
}

films.forEach(function(film, index){
    if(index !== 0){
        logSomething(film.titre)
    }
   
});

films.map(function(film, index){
    logSomething(index)
    logSomething(film.titre)
})
/* End Boucles */

/* Fonction au scroll */
let onScroll = function(){
    logSomething("J'ai scrollé ma page")
}
//Ajouter un écouteur d'événement scroll à la fenêtre
window.addEventListener("scroll", onScroll)

/* Fonction au resize */
let onResize = function(){
    logSomething("J'ai resize ma page")
}
//Ajouter un écouteur d'événement resize à la fenêtre
window.addEventListener("resize", onResize)


let buttonSelector = ".button-film";
let filmsSelector = ".films";

let button = document.querySelector(buttonSelector);
let filmContainer = document.querySelector(filmsSelector);

//Creer un p
let createP = function(label, parent){
    let newP = document.createElement("p")
    newP.innerHTML = label;
    parent.appendChild(newP);
}

// Creer une div
let createDiv = function(film){  
    let newDiv = document.createElement("div");
    filmContainer.appendChild(newDiv);
    createP(film.titre , newDiv);
    createP(film.desc, newDiv);
    createP(film.note + "/5", newDiv);   
}

let onClickButton = function(){
    films.map(function(film, index){
        createDiv(film)
    })
}

//Ajouter un écouteur d'événement click sur le bouton
button.addEventListener("click", onClickButton)


