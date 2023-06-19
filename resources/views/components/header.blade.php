<header class="header js-header">
  <div class="header__logo">
    <x-logo />
  </div>
  <div class="header__burger js-burger">
    <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
      <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
      <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
      <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
    </svg>
  </div>
  <nav class="header__nav">
    <ul>
      <li>
        <a href="/flowers">ВСІ КВІТИ</a>
      </li>
      <li>
        <a href="/places">ТОЧКИ</a>
      </li>
    </ul>
  </nav>
  <div class="header__buttons">
    @auth
      <x-logout-form>
        <x-button variant="outline-dark">Вийти</x-button>
      </x-logout-form>
      <x-button href="/profile" variant="white">Кабінет</x-button>
    @else
      <x-button href="/login" variant="white">Вхід</x-button>
      <x-button href="/add-point">Додати точку</x-button>
    @endauth
  </div>
</header>