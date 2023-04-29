<link href="{{ asset('/css/header.css') }}" rel="stylesheet">

<header class="site-header">
  <div class="wrapper site-header__wrapper">
    <span class="brand" href="#">WE FASHION</span>
    <nav class="nav">
      <button class="nav__toggle" aria-expanded="false" type="button">
        Catégories
      </button>
      <ul class="nav__wrapper">
        <li style="display:flex" class="nav__item">
          <form style="display:flex" action="{{route('auth.logout')}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit">Se déconnecter</button>
          </form>
        </li>
        <li class="nav__item"><a href="#">Produits</a></li>
        <li class="nav__item"><a href="#">Catégories</a></li>
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