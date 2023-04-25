<style>
.brand {
  font-weight: bold;
  font-size: 20px;
  color: #66EB9A;
}

.site-header {
  position: relative;
  background-color: #3e4b4a; }

.site-header__middle {
  flex: 1; }

.site-header__wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem; }
ul {
    list-style-type: none;
}
a {
    text-decoration: none;
    color: #d4e5db;
}

  @media (min-width: 940px) {
    .site-header__wrapper {
      padding-top: 0;
      padding-bottom: 0; } }
.nav {
  margin-left: 1rem;
  margin-right: 1rem; }

@media (min-width: 940px) {
  .nav__wrapper {
    display: flex;
    justify-content: center; } }

@media (max-width: 939px) {
  .nav__wrapper {
    position: absolute;
    top: 100%;
    right: 0;
    left: 0;
    z-index: -1;
    background-color: #3e4b4a;
    visibility: hidden;
    opacity: 0;
    transform: translateY(-100%);
    transition: transform 0.3s ease-out, opacity 0.3s ease-out; }
    .nav__wrapper.active {
      visibility: visible;
      opacity: 1;
      transform: translateY(0); } }

@media (min-width: 940px) {
  .nav__item:last-child a {
    border-right: 1px solid #222; } }

@media (min-width: 1100px) {
  .nav__item {
    min-width: 140px;
    flex: 1; } }

.nav__item a {
  display: block;
  padding: 1rem 1.25rem;
  border-left: 4px solid transparent; }
  @media (min-width: 940px) {
    .nav__item a {
      text-align: center;
      border-left: 1px solid #222;
      border-bottom: 4px solid transparent; } }
.nav__item svg {
  display: inline-block;
  vertical-align: middle;
  width: 22px;
  height: 22px;
  margin-right: 1rem; }
  @media (min-width: 940px) {
    .nav__item svg {
      display: block;
      margin: 0 auto 0.5rem; } }
.nav__item.active a {
  border-left-color: #222; }
  @media (min-width: 940px) {
    .nav__item.active a {
      border-bottom-color: #222; } }
.nav__toggle {
  position: absolute;
  right: 1rem;
  top: 1rem; }
  @media (min-width: 940px) {
    .nav__toggle {
      display: none; } }

.inactive-item {
  opacity: 0; }

</style>

<header class="site-header">
  <div class="wrapper site-header__wrapper">
    <span class="brand" href="#">WE FASHION</span>
    <a href="/">Accueil</a>
    <nav class="nav">
      <button class="nav__toggle" aria-expanded="false" type="button">
        Catégories
      </button>
      <ul class="nav__wrapper">
        <li class="nav__item"><a href="#">Produits</a></li>
        <li class="nav__item"><a href="#">Catégories</a></li>
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