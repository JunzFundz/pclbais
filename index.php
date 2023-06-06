<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="style/grids.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
  #suggestions-container {
    position: absolute;
    z-index: 999;
    background-color: #fff;
    border: 1px solid #ccc;
    width: 100%;
    max-height: 200px;
    overflow-y: auto;
    margin-top: 5px;
    padding: 5px;
    list-style-type: none;
    display: none; /* Initially hide the suggestions container */
  }

  #suggestions-container li {
    cursor: pointer;
    padding: 5px;
  }

  #suggestions-container li:hover {
    background-color: #f2f2f2;
  }
</style>
<body>
  <div class="container-for">

    <div class="upp">
      <nav class="navbar navbar-expand-lg navbar-light bg-light nav-height-inn fixed-navbar navbar-scroll fixed-top " >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/splogo.png" alt="" id="logopic">SP-Bais Session</a></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse hamburger-adjust" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-adjust">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/reference.php">Reference</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/cards.php">Call to Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/agenda.php">Agenda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/role.php">Role Call</a>
              </li>


              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="pages/invocation.php">Invocation</a></li>
                  <li><a class="dropdown-item" href="pages/creed.php">PCL Creed</a></li>
                  <li><a class="dropdown-item" href="pages/reading.php">Reading and Approval of the Journal/Minutes <br> of the Previous Session</a></li>
                  <li><a class="dropdown-item" href="pages/resolutions.php">Status of Resolutions/Ordinances Approved by the City Council
                  </a></li>
                  <li><a class="dropdown-item" href="pages/report.php">Question Hour Privilege Hour Committee Report</a></li>
                  <li><a class="dropdown-item" href="pages/calendar.php">Calendar of Business</a>
                  <a class="dropdown-item new-item-margin" style= "margin-left: 20px;" href="pages/table.php">Items laid on the Table</a>
                  <a class="dropdown-item new-item-margin" style= "margin-left: 20px;" href="pages/unfinished.php">Unfinished Business</a>
                  <a class="dropdown-item new-item-margin" style= "margin-left: 20px;" href="pages/businessday.php">Business for the day</a></li>
                  <li><a class="dropdown-item" href="pages/amendments.php">Amendments to the Agenda</a></li>
                  <li><a class="dropdown-item" href="pages/info.php">Information</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" id="search-form">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<ul id="suggestions-container"></ul>

            
          </div>
        </div>
      </nav>
    </div>

  <div class="front-div-pic">
    <div id="carouselExampleIndicators" class="carousel slide carousel-adjust" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner car-imgs">
    <div class="carousel-item item-new-inn active">
    <h2 id="desc">BAIS CITY COUNCIL 2022-2025</h2>


      <img src="img/pic1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item item-new-inn">
      <img src="img/img2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item item-new-inn">
      <img src="img/img3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  </div>

<div class="label-in-text part2-label">
  <center>
  <h2>National Anthem</h2>
  <div class="line"></div>
  </center>
</div>

<div class="featurettes">
  <center>
<video width="500" controls >
  <source src="img/Lupang Hinirang - Philippine National Anthem.mp4" type="video/mp4">
</video>
</center>
</div>

<div class="side-text-1">
<p>Bayang Magiliw, Perlas ng Silanganan
Alab ng Puso sa dibdib mo'y buhay
<br>Lupang Hinirang, Duyan ka ng magiting,
Sa manlulupig di ka pasisiil.
<br></br>
Sa dagat at bundok,
Sa simoy at sa langit mong bughaw,
<br>May dilag ang tula
At awit sa paglayang minamahal.
</br></br>
Ang kislap ng watawat mo'y
Tagumpay na nagniningning;
Ang bituin at araw niya
Kailan pa ma'y di magdidilim.
Lupa ng araw, ng luwalhati't pagsinta,
Buhay ay langit sa piling mo;
<br>
Aming ligaya na pag may mang-aapi
Ang mamatay nang dahil sa iyo.</p>
</div>

<div class="label-in-text part3-label">
  <center>
  <h2>PCL - Hymn</h2>
  <div class="line"></div>
  </center>
</div>

<div class="featurettes-2">
  <center>
<video width="500" controls >
  <source src="img/videoplayback.mp4" type="video/mp4">
</video>
</center>
</div>

<div class="pcl-hymm" style="font-family: 'Raleway', sans-serif;">
<p>Sa puso ng bawat konsehal</br>
  Karangalan ang maglingkod sa Bayan</br>
  Sa isip ng bawat konsehal</br>
  Kagitingan ang gumawa ng kabutihan</br>
  Sa diwa ng bawat konsehal</br>
  Paggalang sa karapatan ng mga mamamayan</br>
  Alinsunod sa Saligang Batas</br>
  At kapakanan ng buong Sambayanan
</br></br>
  CHORUS:</br>
  Ang Liga ng mga Konsehal ng Pilipinas</br>
  Liga sa pagsulong ng kaunlaran</br>
  Kasama't katuwang ng pamahalaan</br>
  Taglay ang pagmamahal sa Inang Bayan</br>
  Ang Liga ng mga Konsehal ng Pilipinas</br>
  Liga ng pagkakaisa</br>
  Kabalikat sa pagtataguyod ng isang</br>
  matatag na Republika
</br></br>
  II</br>
  Sa puso ng bawat konsehal</br>
  Nananaig ang alab ng bayanihan</br>
  Sa isip ng bawat konsehal</br>
  Pag-iibayo ng galing at kasipagan</br>
  Sa diwa ng bawat konsehal</br>
  Paniniwala sa demokratikong paraan</br>
  Alinsunod sa mithiing maka-Diyos</br>
  Maka-tao at maka-kalikasan</br>
  
  Repeat Chorus ...</br>
  Ang Liga ng mga Konsehal ng Pilipinas (3x)</br>
  Mabuhay ang PCL</p>
</div>

</div>


    
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function() {
    // Add the "navbar-scroll" class to the navbar when scrolled beyond a certain point
    if (window.scrollY > 100) {
      document.querySelector(".upp").classList.add("navbar-scroll");
    } else {
      document.querySelector(".upp").classList.remove("navbar-scroll");
    }

    // Adjust the height of the navbar when scrolled beyond a certain point
    if (window.scrollY > 50) {
      document.querySelector(".nav-height-inn").style.height = "50px";
    } else {
      document.querySelector(".nav-height-inn").style.height = "60px";
    }
  });
});

</script>

<script>
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
</script>




</body>
</html>