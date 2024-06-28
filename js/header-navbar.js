 document.addEventListener('DOMContentLoaded', function() {
  let button = document.querySelector('.button-menu');
  let menu = document.querySelector('.menu');
  const header = document.querySelector('header');
  let divContainer = document.getElementById('nav-js');
  let links = divContainer.getElementsByTagName('a');

  button.addEventListener('click', function() {
    if (button.src.match("image/bars-solid.svg")) {
      if (window.innerWidth < 768) {
      menu.style.right = '0%';
      } else {
        menu.style.right = '1%';
      }
      button.src = "image/xmark-solid.svg";
      header.style["height"] = "100%";
    } else{
      menu.style.right = '-200%';
      button.src = "image/bars-solid.svg";
      menu.addEventListener('transitionend', handleTransitionEnd);
    
    }
    
  });

  function handleTransitionEnd(event) {
    if (event.propertyName === 'right') {
        // Une fois la transition terminée, changez la hauteur du header
        header.style.height = '0';
        // Supprimez l'écouteur pour éviter qu'il ne soit déclenché plusieurs fois
        menu.removeEventListener('transitionend', handleTransitionEnd);
    }
  }

  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function() {
      menu.style.right = '-200%';
      button.src = "image/bars-solid.svg"; 
      header.style["height"] = "0";
      let targetElement = document.querySelector(links[i].getAttribute('href'));
      targetElement.scrollIntoView({behavior: 'smooth'});


    });
  }


});


