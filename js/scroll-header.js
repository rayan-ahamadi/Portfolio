document.addEventListener('scroll', function() {
  const header = document.querySelector('.navbar');
  if (window.scrollY > window.innerHeight) { // Si le scroll dépasse 50px
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }
});