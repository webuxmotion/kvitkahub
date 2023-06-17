<x-layout>

  <x-profile-nav />
  
  <x-title>Додавання товару</x-title>

  <div class="layout__form mb-70">
    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf
      <x-input
        title="Назва товару"
        name="name"
        placeholder="Букет “Blue Yellow”"
        withError
      />

      <x-input
        title="Ціна, ГРН"
        name="price"
        placeholder="1046"
        type="number"
        min="1"
        withError
      />

      <x-input
        title="Зображення товару"
        type="file"
        name="image"
      />
      
      <x-button fullWidth>
        Додати
      </x-button>
    </form>
  </div>
</x-layout>