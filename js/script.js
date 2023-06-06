
function handleSearch(event) {
  event.preventDefault();
  const searchInput = document.querySelector('#search-form input[type="search"]');
  const searchQuery = searchInput.value.toLowerCase();

  const navItems = document.querySelectorAll('.navbar-nav li');

  navItems.forEach((item) => {
    item.style.display = 'none';
  });

  const suggestionsContainer = document.getElementById('suggestions-container');
  suggestionsContainer.innerHTML = '';

  navItems.forEach((item) => {
    const linkText = item.querySelector('a').textContent.toLowerCase();
    if (linkText.includes(searchQuery)) {
      item.style.display = 'block';

      const suggestionItem = document.createElement('li');
      suggestionItem.textContent = item.querySelector('a').textContent;
      suggestionItem.addEventListener('click', () => {
        searchInput.value = suggestionItem.textContent;
        suggestionsContainer.innerHTML = '';
        handleSearch(event);
      });
      suggestionsContainer.appendChild(suggestionItem);
    }

    const dropdownItems = item.querySelectorAll('.dropdown-menu a');
    dropdownItems.forEach((dropdownItem) => {
      const dropdownLinkText = dropdownItem.textContent.toLowerCase();
      if (dropdownLinkText.includes(searchQuery)) {
        item.style.display = 'block';

        const suggestionItem = document.createElement('li');
        suggestionItem.textContent = dropdownItem.textContent;
        suggestionItem.addEventListener('click', () => {
          searchInput.value = suggestionItem.textContent;
          suggestionsContainer.innerHTML = '';
          handleSearch(event);
        });
        suggestionsContainer.appendChild(suggestionItem);
      }
    });
  });
}

const searchForm = document.querySelector('#search-form');
searchForm.addEventListener('submit', handleSearch);

const searchInput = document.querySelector('#search-form input[type="search"]');
searchInput.addEventListener('input', (event) => {
  const searchQuery = event.target.value.toLowerCase();
  const navItems = document.querySelectorAll('.navbar-nav li');

  const suggestionsContainer = document.getElementById('suggestions-container');
  suggestionsContainer.innerHTML = '';

  navItems.forEach((item) => {
    const linkText = item.querySelector('a').textContent.toLowerCase();
    if (linkText.includes(searchQuery)) {
      const suggestionItem = document.createElement('li');
      suggestionItem.textContent = item.querySelector('a').textContent;
      suggestionItem.addEventListener('click', () => {
        searchInput.value = suggestionItem.textContent;
        suggestionsContainer.innerHTML = '';
        handleSearch(event);
      });
      suggestionsContainer.appendChild(suggestionItem);
    }

    const dropdownItems = item.querySelectorAll('.dropdown-menu a');
    dropdownItems.forEach((dropdownItem) => {
      const dropdownLinkText = dropdownItem.textContent.toLowerCase();
      if (dropdownLinkText.includes(searchQuery)) {
        const suggestionItem = document.createElement('li');
        suggestionItem.textContent = dropdownItem.textContent;
        suggestionItem.addEventListener('click', () => {
          searchInput.value = suggestionItem.textContent;
          suggestionsContainer.innerHTML = '';
          handleSearch(event);
        });
        suggestionsContainer.appendChild(suggestionItem);
      }
    });
  });
});




  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {

    if (window.scrollY > 100) {
      document.querySelector(".upp").classList.add("navbar-scroll");
    } else {
      document.querySelector(".upp").classList.remove("navbar-scroll");
    }
    

    if (window.scrollY > 50) {
      document.querySelector(".nav-height-inn").style.height = "50px";
    } else {
      document.querySelector(".nav-height-inn").style.height = "60px";
    }
    });
    });
    
