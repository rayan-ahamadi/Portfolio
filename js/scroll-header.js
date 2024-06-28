document.addEventListener('scroll', function() {
  const header = document.querySelector('.navbar');
  const metaTag = document.querySelector('meta[name="theme-color"]');
  if (window.scrollY > window.innerHeight) { // Si le scroll dépasse 50px
      header.classList.add('scrolled');
      metaTag.setAttribute('content', '#3a254c');
  } else {
      header.classList.remove('scrolled');
      metaTag.setAttribute('content', '#894B9F');
  }
});