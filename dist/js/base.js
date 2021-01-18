"use strict";

let name = "Alex";

let logSomething = function (value) {
  console.log(value);
};

let personne = {
  prenom: "Alex",
  nom: "Chautemps",
  age: 27
};
let personne2 = {
  age: 12,
  nom: "Chautemps",
  prenom: "Alex2"
};
let films = [{
  titre: "Le seigneur",
  note: 4,
  desc: "lorem ipsum"
}, {
  titre: "Star Wars",
  note: 4,
  desc: "lorem ipsum"
}, {
  titre: "Harry Potter",
  note: 4,
  desc: "lorem ipsum"
}];
/*
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
*/

let onScroll = function () {
  logSomething("J'ai scrollé ma page");
};

let onResize = function () {
  logSomething("J'ai resize ma page");
};

window.addEventListener("scroll", onScroll);
window.addEventListener("resize", onResize);
let buttonSelector = ".button-film";
let filmsSelector = ".films";
let button = document.querySelector(buttonSelector);
let filmContainer = document.querySelector(filmsSelector);

let createP = function (label, parent) {
  let newP = document.createElement("p");
  newP.innerHTML = label;
  parent.appendChild(newP);
};

let createDiv = function (film) {
  let newDiv = document.createElement("div");
  filmContainer.appendChild(newDiv);
  createP(film.titre, newDiv);
  createP(film.desc, newDiv);
  createP(film.note + "/5", newDiv);
};

let onClickButton = function () {
  films.map(function (film, index) {
    createDiv(film);
  });
};

button.addEventListener("click", onClickButton);