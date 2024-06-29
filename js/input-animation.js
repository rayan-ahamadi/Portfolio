let timeOut;

document.querySelectorAll('.form-group input, .form-group textarea').forEach((element) => {
  element.addEventListener('focus', function() {
    
    this.parentNode.classList.add('focused');
    timeOut = setTimeout(() => {
      this.parentNode.classList.add('seconds');
  }, 3000);
  });

  element.addEventListener('blur', function() {
    this.parentNode.classList.remove('focused');
    this.parentNode.classList.remove('seconds');
    clearTimeout(timeOut);
  });

  element.addEventListener('change', function() {
    if (this.value !== '') {
      this.parentNode.classList.add('filled');
    } else {
      this.parentNode.classList.remove('filled');
    }
  });

});


function pause(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

