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
      header.style["height"] = "0";
    
    }
    
  });

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


