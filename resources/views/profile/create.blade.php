<x-layout>

  <x-profile-nav />
  
  <x-title>Додавання товару</x-title>

  <form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf
    <x-input
      title="Назва товару"
      name="name"
      placeholder="Букет “Blue Yellow”"
      withError
    />

    <x-input
      label="Ціна, ГРН"
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
    
    <x-button>
      Додати
    </x-button>
  </form>
</x-layout>