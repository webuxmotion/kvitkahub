<x-layout>
  <x-hero>
    <h1>
      Реєстрація
    </h1>
  </x-hero>

  <div class="layout__form">

    <form method="POST" action="/users">
      @csrf

      <x-input
        title="Email"
        value="{{old('email')}}"
        name="email"
        type="email"
        placeholder="Email"
        withError
      />

      <x-input
        title="Пароль"
        value="{{old('password')}}"
        name="password"
        type="password"
        placeholder="Пароль"
        withError
      />

      <x-input
        title="Повторити пароль"
        name="password_confirmation"
        type="password"
        placeholder="Повторити пароль"
        withError
      />

      <x-button fullWidth>
        Зареєструватись
      </x-button>

      <p>Якщо ви вже маєте акаунт продавця, 
        тоді, <a href="/login">увійдіть на сайт </a></p>
    </form>

  </div>

  <h3 class="g-text-center my-70">
    Виникли проблеми? Телефонуте <a href="tel:+380951343338">(095)134-33-38</a>
  </h3>
  
</x-layout>