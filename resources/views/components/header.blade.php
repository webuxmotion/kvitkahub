<header class="header">
  <div class="header__logo">
    <x-logo />
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
  <div>
    @auth
    <x-button href="/profile" variant="white">Кабінет</x-button>
    @else
      <x-button href="/login" variant="white">Вхід</x-button>
      <x-button href="/add-point">Додати точку</x-button>
    @endauth
  </div>
</header>