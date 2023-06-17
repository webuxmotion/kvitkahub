@php
  $imgSrc = $listing->image
    ? asset('/storage/' . $listing->image)
    : asset('/images/flower-2.png');
@endphp

<x-layout>

  <x-profile-nav />
  
  <x-title>Редагування товару</x-title>

  <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <x-input
      title="Назва товару"
      value="{{$listing->name}}"
      name="name"
      placeholder="Букет “Blue Yellow”"
      withError
    />

    <x-input
      label="Ціна, ГРН"
      value="{{$listing->price}}"
      name="price"
      placeholder="1046"
      type="number"
      min="1"
      withError
    />

    <x-input
      label="Зображення товару"
      type="file"
      name="image"
    />
    <img src="{{$imgSrc}}" alt="image" width="200" />
    
    <x-button>
      Зберегти
    </x-button>

  </form>
  
  <p>Видалення товару:</p>

    <form method="POST" action="/listings/{{$listing->id}}">
      @csrf
      @method('DELETE')
      <input type="submit" value="Видалити цей товар" />
    </form>
</x-layout>