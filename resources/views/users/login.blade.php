<x-layout>
  <x-hero>
    <h1>
      Вхід для продавця
    </h1>
  </x-hero>

  <form method="POST" action="/users/authenticate">
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

    <x-button>
      Увійти
    </x-button>

    <p>Якщо ви ще не маєте акаунту продавця, 
      тоді   <a href="/registration">зареєструйтесь</a></p>
  </form>

  <p>Виникли проблеми? Телефонуте <a href="tel:+380951343338">(095)134-33-38</a></p>
</x-layout>