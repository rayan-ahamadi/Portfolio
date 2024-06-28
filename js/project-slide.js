

const back = document.querySelector('#back');
const next = document.querySelector('#next');
const imageProjet = document.querySelector('#image-projets a img');
const lienProjet = document.querySelector('#image-projets a');
const titreProjet = document.querySelector('#projet-nom h3');
const descriProjet = document.querySelector('#text-projet')

const imageList = ['myDiscord.png','Calculatrice.png','gestion-de-stock.png','ComicsShop.png','ecran-magique.png','comicsBlog.png','Librairie.png','pfc.png']

for(let image in imageList){
  document.querySelector('.dots').appendChild(document.createElement('div')).classList.add('dot')
  if(image == 0){
    document.querySelector('.dot').classList.add('active')
  }
}



if (window.innerWidth < 768){
  
  imageProjet.addEventListener('touchstart', function(){
    imageProjet.src = `image/projets/${imageList[index].replace('.png','.gif')}`
  })
  imageProjet.addEventListener('touchend', function(){
    imageProjet.src = `image/projets/${imageList[index].replace('.gif','.png')}`
  })

}else {
  imageProjet.addEventListener('mouseover', function(){
    imageProjet.src = `image/projets/${imageList[index].replace('.png','.gif')}`
  })
  
  imageProjet.addEventListener('mouseout', function(){
    imageProjet.src = `image/projets/${imageList[index].replace('.gif','.png')}`
  })
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