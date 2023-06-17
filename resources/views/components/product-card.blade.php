@props(['listing'])

@php
  $imgSrc = $listing->image
    ? asset('/storage/' . $listing->image)
    : asset('/images/flower-2.png');

  $placeId = request()->place;
  $href = "/flowers/{$listing->id}";
  
  if ($placeId != null) {
    $href .= "?from=" . $placeId;
  }
@endphp

<div class="product-card">
  <div class="product-card__image-wrapper">
    <div class="product-card__image" style="background-image: url('{{$imgSrc}}');"></div>
  </div>
  <div class="product-card__footer">
    <p class="product-card__title">{{$listing->name}}</p>
    <p class="product-card__price">{{$listing->price}} <span>грн</span></p>
    
    <x-button 
      href="{{$href}}"
      variant="outline-dark"
      fullWidth
    >Деталі</x-button>
  </div>
</div>