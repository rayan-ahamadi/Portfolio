let animatedText = document.querySelector('#animated-text');
const wordList = ['Motivé !', 'Sérieux !', 'Curieux !', 'Autonome !', 'Créatif !','Déterminé !', 'Pérsevérant !', 'Passionné !', 'Adaptable !', 'Organisé !'];


function eraseText(element,interval){
  let text = element.textContent;

  const intervalId = setInterval(() => {
      // Retirer la dernière lettre
      text = text.slice(0, -1);
      element.textContent = text;

      // Si tout le texte est supprimé, arrêter l'intervalle
      if (text.length === 0) {
          clearInterval(intervalId);
          
      }
  }, interval);
  
}

function writeText(element, text, interval) {
  let index = 0;

  const intervalId = setInterval(() => {
      element.textContent += text.charAt(index);
      console.log(text.charAt(index)); 
      index++;
      if (index === text.length) {
        clearInterval(intervalId);
        setTimeout(() => {
            eraseText(element, interval);
        }, 1000);
      }
  }, interval);
  
}

async function infiniteLoop() {
  index = 0;
  while (true) {
      if (animatedText.textContent === '') {
        writeText(animatedText, wordList[index], 100);
        if(index < wordList.length - 1) {
        index++;} else {
          index = 0;
        }
      }
      await new Promise(resolve => setTimeout(resolve, 1000)); // Pause de 1 seconde
  }
}

infiniteLoop();




function pause(milliseconds) {
  const start = new Date().getTime();
  while (new Date().getTime() - start < milliseconds) {
    // Boucle vide
  }
  return true;
}
