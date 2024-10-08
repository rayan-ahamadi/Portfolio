
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
    title.innerHTML = "Le Bachelor IT : La Plateforme. 2022 - MAINTENANT";
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


