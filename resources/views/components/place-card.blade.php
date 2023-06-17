@props(['place'])

@php
  $imgSrc = $place->map_image
    ? asset('/storage/' . $place->map_image)
    : asset('/images/flower-2.png');
@endphp

<div class="place-card">
  <div class="place-card__image-wrapper">
    <div class="place-card__image" style="background-image: url('{{$imgSrc}}');"></div>
  </div>
  <div class="place-card__footer">
    
    <x-place-info :place="$place" />
    
    <x-button 
      href="/flowers?place={{$place->id}}"
      variant="outline-dark"
      fullWidth
    >Каталог</x-button>
  </div>
</div>