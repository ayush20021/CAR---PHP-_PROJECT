<?php 

echo"<div class='container'>
<nav class='navbar navbar-expand-lg mt-4 border-bottom'>
  <div class='container'>
    <a class='navbar-brand' href='home.php'>
      <img
        src='Models/BMW LOGO.png'
        alt='Bootstrap'
        width='125'
        height='70'
      />
    </a>
    <button
      class='navbar-toggler shadow-none border-0'
      type='button'
      data-bs-toggle='offcanvas'
      data-bs-target='#offcanvasNavbar'
      aria-controls='offcanvasNavbar'
      aria-label='Toggle navigation'
    >
      <span class='navbar-toggler-icon'></span>
    </button>
    <div
      class='sidebar offcanvas offcanvas-end'
      tabindex='-1'
      id='offcanvasNavbar'
      aria-labelledby='offcanvasNavbarLabel'
    >
      <div class='offcanvas-header'>
        <h5 class='offcanvas-title' id='offcanvasNavbarLabel'>
          Offcanvas
        </h5>
        <button
          type='button'
          class='btn-close'
          data-bs-dismiss='offcanvas'
          aria-label='Close'
        ></button>
      </div>
      <div class='offcanvas-body'>
        <ul class='navbar-nav justify-content-start flex-grow-1 pe-3'>
          <li class='nav-item mx-2'>
            <bold>
              <a
                class='nav-link active'
                aria-current='page'
                href='MOdels.php'
                >Models</a
              >
            </bold>
          </li>
          <li class='nav-item mx-2'>
            <bold> <a class='nav-link' href='#'> ELECTRIC</a></bold>
          </li>
          <li class='nav-item mx-2'>
            <bold>
              <a class='nav-link' href='#'>Visit Online Shop</a></bold
            >
          </li>
          <li class='nav-item mx-2'>
            <bold>
              <a class='nav-link' href='aboutus.php'>About BMW</a></bold
            >
          </li>

          <!-- <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
              Dropdown
            </a>
            <ul class='dropdown-menu'>
              <li><a class='dropdown-item' href='#'>Action</a></li>
              <li><a class='dropdown-item' href='#'>Another action</a></li>
              <li>
                <hr class='dropdown-divider'>
              </li>
              <li><a class='dropdown-item' href='#'>Something else here</a></li>
            </ul>
          </li> -->
        </ul>
        <svg
          xmlns='http://www.w3.org/2000/svg'
          width='50'
          height='25'
          fill='currentColor'
          class='bi bi-cart3'
          viewBox='0 0 16 16'
        >
          <path
            d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'
          />
        </svg>
        <svg
          xmlns='http://www.w3.org/2000/svg'
          width='50'
          height='25'
          fill='currentColor'
          class='bi bi-geo-alt-fill'
          viewBox='0 0 16 16'
        >
          <path
            d='M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z'
          />
        </svg>
        <svg
          xmlns='http://www.w3.org/2000/svg'
          width='50'
          height='25'
          fill='currentColor'
          class='bi bi-search'
          viewBox='0 0 16 16'
        >
          <path
            d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'
          />
        </svg>
      </div>
    </div>
  </div>
</nav>
</div>";


?>