import { Modal } from 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.esm.min.js';

document.addEventListener('DOMContentLoaded', () => {
  const myModal = new Modal(document.getElementById('myModal'));

  // Optionnel: Ouvrir le modal automatiquement pour démonstration
  myModal.show();
});