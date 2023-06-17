<x-layout>
  <x-profile-nav />
  
  <x-button href="/profile/add-product">Додати товар</x-button>

  @foreach ($listings as $listing)
      <x-profile-product-card :listing="$listing" />
  @endforeach
</x-layout>