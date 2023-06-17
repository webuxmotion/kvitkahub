<x-layout>
  <x-not-confirmed-message :place="$place" />
  <x-profile-nav />
  
  <div class="layout__section">
    <x-button href="/profile/add-product" class="mb-30">Додати товар</x-button>

    @foreach ($listings as $listing)
        <x-profile-product-card :listing="$listing" />
    @endforeach
  </div>
</x-layout>