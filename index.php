<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="image-logo/new-logo.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="modals.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Rayan Ahamadi, développeur web.">
    <meta name="theme-color" content="#894B9F">
    <meta name="keywords"
        content="Rayan Ahamadi, développeur web, portfolio, La Plateforme, Marseille, informatique, programmation, HTML, CSS, JavaScript, Python, Java, Spring, Symfony, SQL, Système d'exploitation, Figma, Ruby">
    <meta name="author" content="Rayan Ahamadi">
    <script src="js/text-animation.js" defer></script>
    <script src="js/scroll-reveal.js" defer></script>
    <script src="js/scroll-header.js" defer></script>
    <script src="js/project-slide.js" defer></script>
    <script src="js/header-navbar.js" defer></script>
    <script src="js/cursus-buttons.js" defer></script>
    <script src="js/input-animation.js" defer></script>
    <script src="js/send-mail.js" defer></script>
    <title>Rayan Ahamadi : Développeur Web</title>

</head>

<body>

    <div class="root">
        <header>

            <nav>
    
                <div class="navbar">
                    <img src="image-logo/new-logo.png" alt="logo" class="logo-desktop">
                    <img src="image/bars-solid.svg" alt="menu" class="button-menu">
                </div>
    
                <!-- s'affiche quand on clique sur le menu -->
    
                <div class="menu">
                    <div class="nav" id="nav-js">
                        <a href="#experience"><button>Mes expériences</button></a>
                        <a href="#compétences"><button>Mes compétences</button></a>
                        <a href="#cursus"><button>Mon cursus scolaire</button></a>
                        <a href="#projets"><button>Mes projets réalisés</button></a>
                        <a href="#contact"><button>Me contacter</button></a>
                        <a href="https://rayan-ahamadi.students-laplateforme.io/CV.html"><button>Mon CV en
                                ligne</button></a>
                    </div>
    
                    <div class="rs">
                        <a href="https://www.linkedin.com/in/rayan-ahamadi-98a30b26b/" target="_blank"><img
                                src="image/linkedin.png" alt=""></a>
                        <a href="https://github.com/rayan-ahamadi" target="_blank"><img src="image/github.png" alt=""></a>
                        <a href="mailto:rayan.ahamadi@laplateforme.io" target="_blank"><img src="image/gmail.png"
                                alt=""></a>
                    </div>
                </div>
                <!-- -->
    
            </nav>
    
    
        </header>
    
        <main>
            
            <article class="salut" id="salut" data-aos="fade-right">
                <h1>Salut je suis <div class="rayan">Rayan,</div>
                    Un Développeur Web <span id="animated-text"><i></i></span></h1>
                <a href="#presentation">Présentation</a>
            </article>

            <article class="presentation" data-aos="fade-up" id="presentation">
                <h2>Présentation</h2>
                <p style="text-align: justify;" data-aos="fade-up">Bonjour ! Je suis Rayan Ahamadi, étudiant en développement web (Actuellement autodidacte). Passionné par
                    la programmation, j'ai acquis des compétences solides dans différents langages et je suis constamment à
                    la recherche de nouvelles compétences techniques. Ce portfolio reflète mes réalisations et mes
                    compétences techniques. Je suis ouvert à toutes opportunités professionnelles, car je suis très motivé à
                    lancer ma carrière dans le développement. N'hésitez pas à me contacter pour discuter de vos projets.</p>
            </article>

            <article class="experience" data-aos="fade-up" id="experience">
                <h2>Expériences</h2>
                <p>Ces dernières années, j'ai eu la chance de pouvoir effectuer plusieurs contrats dans l'informatique</p>
                <div class="experience-container">
                    <div class="timeline">
                        <div class="start"></div>
                    </div>
                    <div class="entries">
                        <div class="entry technicien">
                            <div class="entry-dot"></div>
                            <div class="entry-losange"></div>
                            <div class="entry-card">
                                <div class="entry-card-body">
                                    <div class="exp-date">
                                        <p>2018-2021</p>
                                    </div>
                                    <div class="exp-description">
                                        <p> Stagiaire Technicien informatique</p>
                                    </div>
                                    <div class="exp-logo">
                                        <p>Entreprises de réparation mobiles</p>
                                        <img src="image/experiences/technicien.png" alt="technicien">
                                    </div>
                                    <div class="learn-more">
                                        <button type="button" data-toggle="modal" data-target="#modal-technicien">En savoir plus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry afpa">
                            <div class="entry-dot"></div>
                            <div class="entry-losange"></div>
                            <div class="entry-card">
                                <div class="entry-card-body">
                                    <div class="exp-date">
                                        <p>Février 2024</p>
                                    </div>
                                    <div class="exp-description">
                                        <p> Stagiaire Développeur Web</p>
                                    </div>
                                    <div class="exp-logo">
                                        <p>AFPA de Saint-Jérôme</p>
                                        <img src="image/experiences/afpa.png" alt="technicien">
                                    </div>
                                    <div class="learn-more">
                                        <button type="button" data-toggle="modal" data-target="#modal-afpa">En savoir plus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry korporate">
                            <div class="entry-dot"></div>
                            <div class="entry-losange"></div>
                            <div class="entry-card">
                                <div class="entry-card-body">
                                    <div class="exp-date">
                                        <p>Mars 2024 - Mai 2024</p>
                                    </div>
                                    <div class="exp-description">
                                        <p>Stagiaire Développeur Web</p>
                                    </div>
                                    <div class="exp-logo">
                                        <p>SAS Korporate</p>
                                        <img src="image/experiences/korporate.png" alt="technicien">
                                    </div>
                                    <div class="learn-more">
                                        <button type="button" data-toggle="modal" data-target="#modal-korporate">En savoir plus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry avec-nous">
                            <div class="entry-dot"></div>
                            <div class="entry-losange"></div>
                            <div class="entry-card">
                                <div class="entry-card-body">
                                    <div class="exp-date">
                                        <p>Juin 2024</p>
                                    </div>
                                    <div class="exp-description">
                                        <p> Stagiaire Développeur Web</p>
                                    </div>
                                    <div class="exp-logo">
                                        <p>Association Avec Nous</p>
                                        <img src="image/experiences/avec-nous.png" alt="technicien">
                                    </div>
                                    <div class="learn-more">
                                        <button type="button" data-toggle="modal" data-target="#modal-avecnous">En savoir plus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="projets" data-aos="fade-up" id="projets">
                <h2>Projets</h2>
                <div class="projet-nom" id="projet-nom">
                    <h3>Projet My Discord : Python, Tkinter, Socket</h3>
                </div>
                <div class="slideshow-container">
                    <div class="back" id="back">◄</div>
                    <div class="image-projets" id="image-projets">
                        <a href="https://github.com/tom-fhal/myDiscord" target="_blank"><img
                                src="image/projets/myDiscord.png" alt="MyDiscord"></a>
                    </div>
                    <div class="next" id="next">►</div>
                </div>
                <div class="dots">
    
                </div>
                <p class="descri-projet" id="descri-projet"><span id="text-projet">Ce projet a été réalisé en duo à l'école
                        La Plateforme<br>My Discord est un projet de messagerie instantanée en réseau local.<br>Il permet de
                        créer des salons de discussions, d'envoyer des messages et des fichiers.<br>Il est possible de créer
                        un compte et de se connecter.</span><br>
                    <span>Vous pouvez voir tout mes projets et leurs codes sources sur mon Github : <a
                            href="https://github.com/rayan-ahamadi" target="_blank"><img src="image/github.png"
                                alt="Github Rayan"></a></span>
                </p>
    
    
            </article>
    
            <article class="compétences" data-aos="fade-up" id="compétences">
                <h2>Compétences</h2>
    
                <p>Durant mes différents cursus en informatique et mon apprentissage en autodidacte, j'ai développé
                    plusieurs connaissances :</p>
    
                <div class="skills-container" data-aos="fade-up">
                    
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/HTML.png" alt="HTML"> 
                        </div>
                        <div class="card-body">   
                            <p>HTML</p>
                            <p class="percentage">90%</p>
                            <progress id="html" max="100" value="90"> 90% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/Portfolio">Mon Portfolio</a></li>
                                    <li><a href="https://rayan-ahamadi.github.io/admin-dashboard/">Admin Dashboard</a></li>
                                    <li><a href="https://rayan-ahamadi.github.io/Sign-up-Form/">Formulaire d'inscription</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/CSS.png" alt="CSS"> 
                        </div>
                        <div class="card-body">
                            <p>CSS</p>
                            <p class="percentage">75%</p>
                            <progress id="css" max="100" value="75"> 75% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/Portfolio">Mon Portfolio</a></li>
                                    <li><a href="https://rayan-ahamadi.github.io/admin-dashboard/">Admin Dashboard</a></li>
                                    <li><a href="https://rayan-ahamadi.github.io/Sign-up-Form/">Formulaire d'inscription</a></li>
                                </ul>
                            </div>                           
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/JS.png" alt="JavaScript"> 
                        </div>
                        <div class="card-body">
                            <p>JavaScript</p>
                            <p class="percentage">75%</p>
                            <progress id="js" max="100" value="75"> 75% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/Portfolio">Mon Portfolio</a></li>
                                    <li><a href="https://rayan-ahamadi.github.io/calculator/">Calculatrice</a></li>
                                    <li><a href="https://rayan-ahamadi.github.io/rock-paper-scissors/">Pierre Feuille Ciseaux</a></li>
                                </ul>
                            </div>                          
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/bootstrap.png" alt="Bootstrap"> 
                        </div>
                        <div class="card-body">
                            <p>Bootstrap</p>
                            <p class="percentage">70%</p>
                            <progress id="bootstrap" max="100" value="70"> 70% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/Portfolio">Mon Portfolio</a></li>
                                    <li><a href="https://karrosserie.pro/">Karrosserie.pro</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/librairie">Librairie</a></li>
                                </ul>
                            </div>                          
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/php.png" alt="PHP"> 
                        </div>
                        <div class="card-body">                                     
                            <p>PHP</p>
                            <p class="percentage">80%</p>
                            <progress id="js" max="100" value="80"> 80% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://rayan-ahamadi.students-laplateforme.io/Motus/">Motus</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/librairie">Librairie</a></li>
                                    <li><a href="https://karrosserie.pro/">Karrosserie.pro</a></li>
                                </ul>
                            </div>        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/sql.png" alt="SQL"> 
                        </div>
                        <div class="card-body">       
                            <p>SQL</p>
                            <p class="percentage">85%</p>
                            <progress id="sql" max="100" value="85"> 85% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/gestion_de_stock">Gestion de stock python</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/commercial">Gestion commercial</a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/python.png" alt="python"> 
                        </div>
                        <div class="card-body">
                            <p>Python</p>
                            <p class="percentage">80%</p>
                            <progress id="python" max="100" value="80"> 80% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/pendu">Jeu du pendu PYgame</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/tic-tac-toe">Jeu du tic-tac-toe</a></li>
                                    <li><a href="https://github.com/tom-fhal/myDiscord">myDiscord</a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/Java.png" alt="java"> 
                        </div>
                        <div class="card-body">       
                            <p>Java</p>
                            <p class="percentage">60%</p>
                            <progress id="java" max="100" value="60"> 60% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/api_HR-association"> API HR Association</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/webapp_HR-Association">Web App HR Association</a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/spring.png" alt="spring boot"> 
                        </div>
                        <div class="card-body">
                            <p>Spring</p>
                            <p class="percentage">65%</p>
                            <progress id="spring" max="100" value="65"> 65% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/api_HR-association"> API HR Association</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/webapp_HR-Association">Web App HR Association</a></li>
                                </ul>
                            </div>         
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/symfony.png" alt="symfony"> 
                        </div>
                        <div class="card-body">    
                            <p>Symfony</p>
                            <p class="percentage">65%</p>
                            <progress id="php" max="100" value="65"> 65% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/librairie">Librairie</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/basic_symfony">basic_symfony</a></li>
                                </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/laravel.png" alt="laravel"> 
                        </div>
                        <div class="card-body">                            
                            <p>Laravel</p>
                            <p class="percentage">70%</p>
                            <progress id="php" max="100" value="70"> 70% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://app.karrosserie.pro/getstarted">Karrosserie.pro</a></li>
                                </ul>
                            </div>               
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="image/competences/OS.png" alt="Système d'exploitation"> 
                        </div>
                        <div class="card-body">                         
                            <p>OS</p>
                            <p class="percentage">95%</p>
                            <progress id="os" max="100" value="95"> 95% </progress>
                            <div class="skill-projects" data-aos="fade-up">
                                <p>Exemple de projets</p>
                                <ul>
                                    <li><a href="https://github.com/rayan-ahamadi/shell-exe">Exo Shell</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/FTP">Création serveur FTP</a></li>
                                    <li><a href="https://github.com/rayan-ahamadi/cisco">Projets Cisco</a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>

                </div>
    
            </article>
    
            <article class="cursus" data-aos="fade-up" id="cursus">
    
                <h2>Cursus</h2>
    
                <div class="descri-cursus" data-aos="fade-up">
                    <div class="buttons">
                        <button class="button" id="plateforme">École La Plateforme, Marseille</button>
                        <button class="button" id="bellepierre">Lycée Bellepierre, La Réunion</button>
                        <button class="button" id="chatelier">Lycée Le Chatelier, Marseille</button>
                    </div>
                    <div class="texte-curs">
                        <h3 id="title-cursus">Le Bachelor IT : La Plateforme. 2022 - 2023</h3>
                        <p id="texte-cursus" style="text-align: justify;">Après mon retour à Marseille, j'ai décidé de refaire une formation en
                            informatique. On m'a recommandé une
                            formation gratuite en informatique : Le Bachelor IT à La Plateforme. <br>
                            La première année se fait à 100% en présentiel. On apprend les bases de l'informatique
                            avec une pédagogie en mode projet. Qui nous permet d'apprendre en allant chercher les
                            informations
                            sois-même. </p>
    
                    </div>
                    <a href="https://www.laplateforme.io/" target="_blank" id="lien-ecole"><img
                            src="image/cursus/laplateforme.jpg" alt="école la plateforme" id="image-cursus"></a>
                </div>
    
                <br>
    
            </article>
    
            <article class="contact" data-aos="fade-up" id="contact">
                <h2>Contactez-moi !</h2>
                <p>Vous pouvez me contacter via ce formulaire, je suis disponible pour toute demande d'information complémentaires ou bien
                    pour une demande de collaboration !</p>
    
                <div class="form-container">
                    <form method="POST" id="contact-form">
                        <div class="form-group" id="nom">
                            <label for="nom" data-help="(êtes-vous 11 de Stranger Things ?)">Nom*</label>
                            <input type="text" id="nom" name="nom" pattern="^[^0-9]+$" >
                        </div>
                        <div class="form-group" id="prenom">
                            <label for="prenom" data-help="(êtes-vous 11 de Stranger Things ?)">Prénom*</label>
                            <input type="text" id="prenom" name="prenom" pattern="^[^0-9]+$" required>
                        </div>
                        <div class="form-group" id="email">
                            <label for="email" data-help="(format : email@mail.com)">Email*</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group" id="phone">
                            <label for="tel" data-help="(format : 0612345678)">Téléphone</label>
                            <input type="text" id="tel" name="tel" pattern="^(?:(?:\+33|0)[1-9](?:[.\-\s]?\d{2}){4})$"></input>
                        </div>
                        <div class="form-group" id="objet">
                            <label for="objet" data-help="(Quel est l'objet de votre message ?)">Objet*</label>
                            <input type="text" id="objet" name="objet" pattern="^[a-zA-Z0-9À-ÖØ-öø-ÿ\s,.'-?!]+$" required></input>
                        </div>
                        <div class="form-group" id="message">
                            <label for="message" data-help="(Exprimez vous !)">Message*</label>
                            <textarea id="message" name="message" pattern="^[a-zA-Z0-9À-ÖØ-öø-ÿ\s.,'!?()$%&@#\n\r-]+$" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit">Envoyer</button>
                        </div>                 
                    </form>
                </div>
    
    
            </article>
        </main>
    
    
        <footer>
            <div class="logo-secondaire">
                <img src="image-logo/logo_secondaire.svg" alt="logo-secondaire">
            </div>
            <div class="reseau-footer">
                <a href="https://www.linkedin.com/in/rayan-ahamadi-98a30b26b/"><img src="image/linkedin.png"
                        alt="linkedin"></a>
                <a href="https://github.com/rayan-ahamadi"><img src="image/github.png" alt="github"></a>
                <a href="mailto:rayan.ahamadi@laplateforme.io"><img src="image/gmail.png" alt="gmail"></a>
            </div>
            <div class="copyright">
                <p style="text-align: center;">© 2024 Rayan Ahamadi</p>
            </div>
        </footer>
    </div>
    
    <!-- Modal Experience -->
    <div class="modal fade" id="modal-technicien" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Mes stages de technicien informatique</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-image">
                <div class="company-image">
                    <label for="réparfone">Réparfone</label>
                    <img src="image/experiences/reparfone.png" class="bac" alt="réparfone" id="réparfone">
                </div>
                <div class="company-image">
                    <label for="clickandphone">Click And Phone</label>
                    <img src="image/experiences/clickandphone.png" class="bac" alt="click and phone" id="clickandphone">
                </div>
                <div class="company-image">
                    <label for="espace-media">Espace Média Technology</label>
                    <img src="image/experiences/espace-media.jpg" class="bac" alt="espace-media" id="espace-media">
                </div>
                <div class="company-image">
                    <label for="tech-mobile">Tech Mobile</label>
                    <img src="image/experiences/tech-mobile.jpg" class="bac" alt="tech-mobile" id="tech-mobile">
                </div>
              </div>
              <div class="modal-description">
                <h3>Description</h3>
                <p>Pendant mes années en Bac Professionnelle Système Numérique, j'ai eu l'occasion de travailler dans plusieurs entreprises de réparation mobiles. J'ai pu acquérir des compétences techniques en réparation de smartphones et tablettes. J'ai également pu développer des compétences en relation clientèle et en gestion de stock.</p>
              </div>
              <div class="modal-stackused">
                <h3>Technologies utilisées</h3>
                <div class="stack-images">
                    <img src="image/competences/OS.png" alt="">
                    <img src="image/competences/excel.svg" alt="">
                </div>  
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal-afpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Mon stage à l'AFPA de Saint-Jérôme</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <div class="company-image">
                        <label for="afpa">AFPA</label>
                        <img src="image/experiences/afpa.png" alt="afpa" id="afpa">
                    </div>
                </div>
                <div class="modal-description">
                    <h3>Description</h3>
                    <p>En Février 2024, j'ai eu la chance de pouvoir faire un stage avec l'AFPA de Saint-Jérôme. J'ai pu apprendre à utiliser PHP avec Symfony et Bootstrap</p>
                </div>
                <div class="modal-stackused">
                    <h3>Technologies utilisées</h3>
                    <div class="stack-images">
                        <img src="image/competences/php.png" alt="php">
                        <img src="image/competences/symfony.png" alt="symfony">
                        <img src="image/competences/bootstrap.png" alt="bootstrap">
                    </div>  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal-korporate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Mon stage avec Korporate</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <div class="company-image">
                        <label for="korporate">Korporate</label>
                        <img src="image/experiences/korporate.png" alt="korporate" id="korporate">
                    </div>
                  </div>
                  <div class="modal-description">
                    <h3>Description</h3>
                    <p>Pendant 2 mois, j'ai eu la chance de faire un stage avec Korporate. Durant ce stage, j'ai découvert le développement et la gestion de projet web en entreprise. J'ai participé au développement de Karrosserie.pro, un outil de gestion de garage, qui permet de générer des devis et des factures en quelques cliques, à partir d'un rapport d'expertise. J'ai aussi participé à la création de sites web pour les clients garagistes ayant un certain abonnement sur l'application Karrosserie.

                    </p>
                  </div>
                  <div class="modal-stackused">
                    <h3>Technologies utilisées</h3>
                    <div class="stack-images">
                        <img src="image/competences/HTML.png" alt="html">
                        <img src="image/competences/CSS.png" alt="css">
                        <img src="image/competences/JS.png" alt="javascript">
                        <img src="image/competences/php.png" alt="php">
                        <img src="image/competences/sql.png" alt="sql">
                        <img src="image/competences/laravel.png" alt="laravel">
                        <img src="image/competences/bootstrap.png" alt="bootstrap">
                    </div>  
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal-avecnous" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Mon stage avec l'association Avec Nous</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <div class="company-image">
                        <label for="Avec-Nous">"Avec Nous La Fabrique du Numérique"</label>
                        <img src="image/experiences/avec-nous.png" alt="Avec Nous" id="Avec-Nous">
                    </div>
                  </div>
                  <div class="modal-description">
                    <h3>Description</h3>
                    <p>Pendant 3 semaines, j'ai eu la chance de faire un stage avec l'association "Avec Nous". J'ai eu l'occasion de créer un système qui permet aux gens de scanner un qr code, qui les ramènent vers le site de l'association avec les infos d'ouverture et les activités.</p>
                  </div>
                  <div class="modal-stackused">
                    <h3>Technologies utilisées</h3>
                    <div class="stack-images">
                        <img src="image/competences/wordpress.png" alt="Wordpress">
                        <img src="image/competences/HTML.png" alt="HTML">
                        <img src="image/competences/CSS.png" alt="CSS">
                        <img src="image/competences/php.png" alt="PHP">
                        <img src="image/competences/sql.png" alt="SQL">
                    </div>  
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div>

    <!--Scripts--> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>
