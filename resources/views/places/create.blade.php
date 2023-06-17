<x-layout>

  <x-profile-nav />

  <x-title>Додавання торгової точки</x-title>

  <div class="layout__form mb-70">

    <form method="POST" action="/places" enctype="multipart/form-data">
      @csrf

      <x-input
        title="Назва точки"
        value="{{old('name')}}"
        name="name"
        placeholder="Place 2"
        withError
      />

      <x-input
        title="Телефон продавця"
        value="{{old('phone')}}"
        name="phone"
        placeholder="(095)134-33-38"
        withError
      />

      <x-input
        title="Імʼя продавця"
        value="{{old('contact_name')}}"
        name="contact_name"
        placeholder="Олеся"
        withError
      />

      <x-input
        title="Адреса точки"
        value="{{old('address')}}"
        name="address"
        placeholder="Вул. Велика Житомирська, 25"
        withError
      />

      <x-input
        title="Посилання на Google Maps "
        value="{{old('map_link')}}"
        name="map_link"
        placeholder="Посилання на Google Maps"
        withError
      />

      <x-input
        label="Зображення карти"
        type="file"
        name="map_image"
      />
      
      <x-button fullWidth>
        Додати точку
      </x-button>

    </form>

  </div>
  
</x-layout>