// cursus

const title = document.getElementById("title-cursus");
const paragraphe = document.getElementById("texte-cursus");
const image = document.getElementById("image-cursus");
const lienEcole = document.getElementById("lien-ecole");

const cursusPlateforme = document.querySelector("#plateforme");
const cursusBellepierre = document.querySelector("#bellepierre");
const cursusChatelier = document.querySelector("#chatelier");

cursusPlateforme.addEventListener('click', plateforme);
cursusBellepierre.addEventListener('click', bellepierre);
cursusChatelier.addEventListener('click', chatelier);

function plateforme() {
    paragraphe.innerHTML = "Après mon retour à Marseille, j'ai décidé de refaire une formation en informatique. On m'a recommandé une formation gratuite en informatique : Le Bachelor IT à La Plateforme. <br>La première année se fait à 100% en présentiel. On apprend les bases de l'informatique avec une pédagogie en mode projet. Qui nous permet d'apprendre en allant chercher les informations sois-même. ";
    title.innerHTML = "Le Bachelor IT : La Plateforme. 2022 - 2023";
    image.src = "image/cursus/laplateforme.jpg";
    image.alt = "école la plateforme";
    lienEcole.href = "https://www.laplateforme.io/";
}

function bellepierre() {
    paragraphe.innerHTML = "Après l'obtention du Bac, j'ai décidé de partir vivre à La Réunion pour rejoindre une partie de ma famille et commencé mes études supérieurs à leurs côtés. J'ai donc était accepté au Lycée Bellepierre grâce à parcoursup. <br>Le premier semestre j'ai appris des bases en réseau informatique et en programmation web. Puis au deuxième semestre j'ai choisi l'option SLAM (Solution logiciel application métier), qui m'a permis d'en apprendre plus sur la programmation logiciel (notamment en Visual Basic)";
    title.innerHTML = "Le BTS SIO : Lycée Bellepierre. 2021 - 2022";
    image.src = "image/cursus/bellepierre.jpg";
    image.alt = "Lycée Bellepierre";
    lienEcole.href = "https://etab.ac-reunion.fr/lyc-bellepierre/";
  }

function chatelier() {
  paragraphe.innerHTML = "Après le collège, j'ai décidé de continuer l'école avec un Bac Professionel en Système Numérique, car j'étais déjà passionnées par les nouvelles technologies et l'informatique. <br>J'ai pû apprendre les bases des systèmes d'exploitation et des réseaux informatiques. C'est d'ailleurs pendant mes années au lycée que j'ai pû m'intéresser à la programmation, ce qui m'a pousser à apprendre des bases en autodidacte car la programmation informatique n'était pas dans le cursus.";
  title.innerHTML = "Le BAC PRO SN : Lycée Le Chatelier. 2018-2021";
  image.src = "image/cursus/lechatelier.jpg"
  image.alt = "Lycée Le Chatelier";
  lienEcole.href = "https://www.site.ac-aix-marseille.fr/lyc-chatelier/spip/";
}



// navbar et menu 
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
   
document.addEventListener('DOMContentLoaded', function() {
  let button = document.querySelector('.button-menu');
  let menu = document.querySelector('.menu');
  const header = document.querySelector('header');
  let divContainer = document.getElementById('nav-js');
  let links = divContainer.getElementsByTagName('a');

  button.addEventListener('click', function() {
    if (button.src.match("image/bars-solid.svg")) {
      menu.style.right = '0%';
      button.src = "image/xmark-solid.svg";
      header.style["height"] = "100%";
    } else{
      menu.style.right = '-200%';
      button.src = "image/bars-solid.svg";
      sleep(1000);
      header.style["height"] = "0";
    
    }
    
  });

  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function() {
      menu.style.right = '-200%';
      button.src = "image/bars-solid.svg"; 
      sleep(500);
      header.style["height"] = "0";

      let targetElement = document.querySelector(links[i].getAttribute('href'));
      targetElement.scrollIntoView({behavior: 'smooth'});


    });
  }


});



// projets


const back = document.querySelector('#back');
const next = document.querySelector('#next');
const imageProjet = document.querySelector('#image-projets a img');
const lienProjet = document.querySelector('#image-projets a');
const titreProjet = document.querySelector('#projet-nom h3');
const descriProjet = document.querySelector('#text-projet')

const imageList = ['myDiscord.png','calculator.png','gestion_des_stocks.png','comicsshop_figma.png','ecran-magique.png','fansite.png','librairie.png','pfc.png']

for(let image in imageList){
  document.querySelector('.dots').appendChild(document.createElement('div')).classList.add('dot')
  if(image == 0){
    document.querySelector('.dot').classList.add('active')
  }
}

let dots = document.querySelectorAll('.dot')
for (let i = 0; i < dots.length; i++){
  dots[i].addEventListener('click', function(){
    index = i
    changeProject(index)
  })
}

let index = 0;

back.addEventListener('click', function() {
  if (index > 0){
    index--
    changeProject(index)
  }
  if (index == 0){
    index = imageList.length -1
    changeProject(index)
  }
});

 next.addEventListener('click', function() {
  if (index < imageList.length -1){
    index++
    changeProject(index)
  }
  if (index == imageList.length -1){
    index = 0
    changeProject(index)
  }
 })

 function changeProject(index){
  imageProjet.src = `image/projets/${imageList[index]}`
  let active = document.querySelector('.active')
  active.classList.remove('active')
  dots[index].classList.add('active')
  switch (index){
    case 0:
      titreProjet.textContent = " Projet My Discord : Python, Tkinter, Socket"
      imageProjet.alt = "Projet MyDiscord"
      descriProjet.textContent = "Ce projet a été réalisé en duo à l'école La Plateforme\nMy Discord est un projet de messagerie instantanée en réseau local.\nIl permet de créer des salons de discussions, d'envoyer des messages et des fichiers.\nIl est possible de créer un compte et de se connecter.\n."
      lienProjet.href = "https://github.com/tom-fhal/myDiscord"
      break;
    case 1:
      titreProjet.textContent = "Projet Calculatrice : HTML, CSS, Javascript"
      imageProjet.alt = "Projet Calculatrice"
      descriProjet.textContent = "Ce projet a été réalisé en solo en autodidacte avec TheOdinProject\nIl s'agit d'une calculatrice basique qui permet de faire des opérations simples.\nElle a été réalisé en HTML, CSS et Javascript."
      lienProjet.href = "https://rayan-ahamadi.github.io/calculator/"
      break;
    case 2:
      titreProjet.textContent = "Projet Gestion des Stocks : Python, Tkinter, Base de données SQL"
      imageProjet.alt = "Projet Gestion des Stocks"
      descriProjet.textContent = "Ce projet a été réalisé en solo à l'école La Plateforme\nIl s'agit d'une application de gestion de stock pour une entreprise.\nElle permet de gérer les produits.\nElle a été réalisé en Python avec une interface graphique en Tkinter et une base de données SQL."
      lienProjet.href = "https://github.com/rayan-ahamadi/gestion_de_stock"
      break;
    case 3:
      titreProjet.textContent = "Projet Comics Shop : Figma"
      imageProjet.alt = "Projet Comics Shop"
      descriProjet.textContent = "Ce projet a été réalisé en solo à l'école La Plateforme\nIl s'agit d'un wireframe pour un site de vente de comics.\nIl a été réalisé avec Figma."
      lienProjet.href = "https://www.figma.com/file/B75MIBpGjiY4HXawhTcqOF/wireframe-(Copy)?type=design&node-id=0%3A1&mode=design&t=ad0nBbbnFfl2gFfG-1"
      break;
    case 4:
      titreProjet.textContent = "Projet Ecran Magique : HTML, CSS, Javascript"
      imageProjet.alt = "Projet Ecran Magique"
      descriProjet.textContent = "Ce projet a été réalisé en solo en autodidacte avec TheOdinProject\nIl s'agit d'un écran magique qui permet de dessiner avec la souris.\nIl a été réalisé en HTML, CSS et Javascript."
      lienProjet.href = "https://rayan-ahamadi.github.io/etch-a-sketch/"
      break;
    case 5:
        titreProjet.textContent = "Projet Fansite : HTML, CSS, Javascript"
        imageProjet.alt = "Projet Fansite"
        descriProjet.textContent = "Ce projet a été réalisé en solo à l'école La Plateforme\nIl s'agit d'un site de fans pour un artiste.\nIl a été réalisé en HTML, CSS et Javascript."
        lienProjet.href = "https://rayan-ahamadi.github.io/fansite/"
        break;
    case 6:
      titreProjet.textContent = "Projet Librairie : HTML Twig, Bootstrap, PHP Symfony"
      imageProjet.alt = "Projet Librairie"
      descriProjet.textContent = "Ce projet a été réalisé en solo pendant mon stage à l'AFPA de Saint-Jérôme\nIl s'agit d'un site de vente de livres.\nIl a été réalisé en HTML Twig,CSS, et les framework Bootstrap et PHP Symfony."
      lienProjet.href = "https://github.com/rayan-ahamadi/librairie"
      break;
    case 7:
      titreProjet.textContent = "Projet Pierre Feuille Ciseaux : HTML, CSS, Javascript"
      imageProjet.alt = "Projet Pierre Feuille Ciseaux"
      descriProjet.textContent = "Ce projet a été réalisé en solo en autodidacte avec TheOdinProject\nIl s'agit du jeu Pierre Feuille Ciseaux.\nIl a été réalisé en HTML, CSS et Javascript."
      lienProjet.href = "https://rayan-ahamadi.github.io/rock-paper-scissors/"
      break;
    default:
      titreProjet.textContent = "Projet Rayan"
      imageProjet.alt = "Projet Rayan"
      descriProjet.textContent = ""
      lienProjet.href = ""
      break;
  }
 }