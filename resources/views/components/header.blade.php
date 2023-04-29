<link href="{{ asset('/css/header.css') }}" rel="stylesheet">

<header class="site-header">
  <div class="wrapper site-header__wrapper">
    <span class="brand" href="#">WE FASHION</span>
    
    <nav class="nav">
      <button class="nav__toggle" aria-expanded="false" type="button">
        Menu
      </button>
      <ul class="nav__wrapper">
        <li class="nav__item"><a href="#">Homme</a></li>
        <li class="nav__item"><a href="#">Femme</a></li>
        <li class="nav__item"><a href="#">Soldes</a></li>
        <li class="nav__item"><a href="/">Accueil</a></li>
      </ul>
    </nav>
  </div>
</header>

<script>
    let navToggle = document.querySelector(".nav__toggle");
    let navWrapper = document.querySelector(".nav__wrapper");
    navToggle.addEventListener("click", function () {
    if (navWrapper.classList.contains("active")) {
        this.setAttribute("aria-expanded", "false");
        this.setAttribute("aria-label", "menu");
        navWrapper.classList.remove("active");
    } else {
        navWrapper.classList.add("active");
        this.setAttribute("aria-label", "close menu");
        this.setAttribute("aria-expanded", "true");
    }
    });
</script>