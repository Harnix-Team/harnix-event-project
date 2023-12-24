document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
    const sunButton = document.getElementById('sunBtn');
    const moonButton = document.getElementById('moonBtn');
    const retourBtn = document.getElementById('retourBtn');
    const suivantBtn = document.getElementById('suivantBtn');
    const paginationInfo = document.getElementById('paginationInfo');
    const classEvent = document.querySelectorAll('.class-event');
  
    sunButton.addEventListener('click', function () {
      body.classList.remove('color-change');
      body.style.backgroundColor = 'white';
      body.style.color = 'black';
    });
  
    moonButton.addEventListener('click', function () {
      body.classList.add('color-change');
      body.style.backgroundColor = '#555';
      body.style.color = 'white';
    });
  
    // Variables pour suivre l'état de la pagination
    let pageCourante = 0;
    const elementsParPage = 2; // Nombre d'éléments par page
  
    // Mettez à jour la pagination lorsque la page est chargée
    mettreAJourPagination();
  
    // Écouteur de clic pour le bouton Retour
    retourBtn.addEventListener('click', function () {
      if (pageCourante > 0) {
        pageCourante--;
        mettreAJourPagination();
      }
    });
  
    // Écouteur de clic pour le bouton Suivant
    suivantBtn.addEventListener('click', function () {
      const dernierPage = Math.ceil(classEvent.length / elementsParPage) - 1;
      if (pageCourante < dernierPage) {
        pageCourante++;
        mettreAJourPagination();
      }
    });
  
    // Fonction pour mettre à jour la pagination
    function mettreAJourPagination() {
      const premierElement = pageCourante * elementsParPage;
      const dernierElement = premierElement + elementsParPage;
      
      // Masquez tous les éléments
      classEvent.forEach((element, index) => {
        element.style.display = (index >= premierElement && index < dernierElement) ? 'flex' : 'none';
      });
  
      // Mettez à jour le texte d'information sur la pagination
      paginationInfo.textContent = `Page ${pageCourante + 1} sur ${Math.ceil(classEvent.length / elementsParPage)}`;
    }
  });
  