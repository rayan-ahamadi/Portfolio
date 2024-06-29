document.querySelector('#contact-form').addEventListener('submit', async function(event) {

  event.preventDefault();


  const formData = new FormData(this);

  
  fetch('../php/mail.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams(formData).toString()
  })
  .then(response => response.text())
  .then(result => {
      result = JSON.parse(result);
      console.log(result);
      if (result.status === 'success') {
          alert('Votre message a bien été envoyé');
          console.log(result);
          location.reload();
      }else if (result.status === 'error') {
          alert('Une erreur est survenue côté serveur, veuillez réessayer ultérieurement');
          console.log(result);
      } else if(result.status === 'limited') {
          alert('Vous avez atteint la limite de message par jour, veuillez réessayer demain');
          console.log(result);
      }
      

  })
  .catch(error => {
      console.error('Erreur:', error);
  });

});