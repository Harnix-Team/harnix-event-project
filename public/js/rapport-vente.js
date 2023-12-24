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
  

  function filterEvents() {
    const searchValue = document.getElementById('searchInput').value.toLowerCase();
    const eventElements = document.querySelectorAll('.ticket-et-info');

    eventElements.forEach((element) => {
      const eventName = element.querySelector('h2').innerText.toLowerCase();
      const eventDate = element.querySelector('p:nth-child(2)').innerText.toLowerCase();
      const eventLocation = element.querySelector('p:nth-child(3)').innerText.toLowerCase();

      if (
        eventName.includes(searchValue) ||
        eventDate.includes(searchValue) ||
        eventLocation.includes(searchValue)
      ) {
        element.style.display = 'flex';
      } else {
        element.style.display = 'none';
      }
    });
  }

  
  function sortEvents() {
    const sortSelect = document.getElementById('sortSelect');
    const eventList = document.querySelector('.event-list');
    const eventElements = Array.from(document.querySelectorAll('.ticket-et-info'));

    switch (sortSelect.value) {
      case 'name':
        eventElements.sort((a, b) => {
          const nameA = a.querySelector('h2').innerText.toLowerCase();
          const nameB = b.querySelector('h2').innerText.toLowerCase();
          return nameA.localeCompare(nameB);
        });
        break;
      case 'date':
        eventElements.sort((a, b) => {
          const dateA = a.querySelector('p:nth-child(2)').innerText.toLowerCase();
          const dateB = b.querySelector('p:nth-child(2)').innerText.toLowerCase();
          return dateA.localeCompare(dateB);
        });
        break;
      case 'location':
        eventElements.sort((a, b) => {
          const locationA = a.querySelector('p:nth-child(3)').innerText.toLowerCase();
          const locationB = b.querySelector('p:nth-child(3)').innerText.toLowerCase();
          return locationA.localeCompare(locationB);
        });
        break;
    }

    eventList.innerHTML = '';
    eventElements.forEach((element) => {
      eventList.appendChild(element);
    });
  }
  