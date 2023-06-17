@php
  $imgSrc = $place->map_image
    ? asset('/storage/' . $place->map_image)
    : asset('/images/flower-2.png');
  
@endphp

<x-layout>

  <x-profile-nav />

  <form method="POST" action="/places/{{$place->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <x-input
      title="Назва точки"
      value="{{$place->name}}"
      name="name"
      placeholder="Place 2"
      withError
    />

    <x-input
      title="Телефон продавця"
      value="{{$place->phone}}"
      name="phone"
      placeholder="(095)134-33-38"
      withError
    />

    <x-input
      title="Імʼя продавця"
      value="{{$place->contact_name}}"
      name="contact_name"
      placeholder="Олеся"
      withError
    />

    <x-input
      title="Адреса точки"
      value="{{$place->address}}"
      name="address"
      placeholder="Вул. Велика Житомирська, 25"
      withError
    />

    <x-input
      title="Посилання на Google Maps "
      value="{{$place->map_link}}"
      name="map_link"
      placeholder="Посилання на Google Maps"
      withError
    />

    <x-input
      label="Зображення карти"
      type="file"
      name="map_image"
    />
    <img src="{{$imgSrc}}" alt="image" width="200" />
    
    <x-button>
      Зберегти
    </x-button>

  </form>
  
</x-layout>