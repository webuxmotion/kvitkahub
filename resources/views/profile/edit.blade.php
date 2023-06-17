@php
  $imgSrc = $listing->image
    ? asset('/storage/' . $listing->image)
    : asset('/images/flower-2.png');
@endphp

<x-layout>

  <x-profile-nav />
  
  <x-title>Редагування товару</x-title>

  <div class="layout__form mb-70">

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
    <img src="{{$imgSrc}}" alt="image" width="200" class="mb-30" />
    
    <x-button fullWidth>
      Зберегти
    </x-button>

  </form>
    <br/>
    <br/>
    <br/>
    <h3 class="g-text-center">Видалення товару:</h3>

    <form method="POST" action="/listings/{{$listing->id}}" class="js-delete-form">
      @csrf
      @method('DELETE')
      <x-button 
        variant="outline-dark" 
        fullWidth
        class="js-handle-delete"
      >
        Видалити цей товар
      </x-button>
    </form>
  </div>
</x-layout>