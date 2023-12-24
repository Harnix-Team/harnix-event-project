document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
    const sunButton = document.getElementById('sunBtn');
    const moonButton = document.getElementById('moonBtn');
  
  
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

  });
  