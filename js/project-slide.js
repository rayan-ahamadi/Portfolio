const backArrow = document.querySelector('.project-arrow .back');
const nextArrow = document.querySelector('.project-arrow .next');
const projectSlider = document.querySelector('.project-slider > ul');

backArrow.addEventListener('click', () => {
    projectSlider.scrollLeft -= 300;
});

nextArrow.addEventListener('click', () => {
    projectSlider.scrollLeft += 300;
});


const scrollableDiv = document.querySelector('.project-slider > ul');

let isDown = false; // Indique si l'utilisateur maintient le clic ou glisse sur mobile
let startX; // Position de départ en X
let scrollLeft; // Position de défilement en X

// Pour détecter le maintien du clic sur ordinateur
scrollableDiv.addEventListener('mousedown', (e) => {
  isDown = true;
  scrollableDiv.classList.add('active');
  startX = e.pageX - scrollableDiv.offsetLeft;
  scrollLeft = scrollableDiv.scrollLeft;
});

scrollableDiv.addEventListener('mouseleave', () => {
  isDown = false;
  scrollableDiv.classList.remove('active');
});

scrollableDiv.addEventListener('mouseup', () => {
  isDown = false;
  scrollableDiv.classList.remove('active');
});

scrollableDiv.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - scrollableDiv.offsetLeft;
  const walk = (x - startX) * 3; // Vitesse de défilement
  scrollableDiv.scrollLeft = scrollLeft - walk;
});

// Pour le glissement sur mobile
scrollableDiv.addEventListener('touchstart', (e) => {
  isDown = true;
  startX = e.touches[0].pageX - scrollableDiv.offsetLeft;
  scrollLeft = scrollableDiv.scrollLeft;
});

scrollableDiv.addEventListener('touchend', () => {
  isDown = false;
});

scrollableDiv.addEventListener('touchmove', (e) => {
  if (!isDown) return;
  const x = e.touches[0].pageX - scrollableDiv.offsetLeft;
  const walk = (x - startX) * 3; // Vitesse de défilement
  scrollableDiv.scrollLeft = scrollLeft - walk;
});
