@props(['listing'])

@php
  $imgSrc = $listing->image
    ? asset('/storage/' . $listing->image)
    : asset('/images/flower-2.png');
@endphp

<div class="product-card">
  <div class="product-card__image-wrapper">
    <div class="product-card__image" style="background-image: url('{{$imgSrc}}');"></div>
  </div>
  <div class="product-card__footer">
    <p>{{$listing->name}}</p>
    <p>{{$listing->price}} <span>грн</span></p>
    
    <x-button 
      href="/flowers/{{$listing->id}}"
      fullWidth
    >Деталі</x-button>
  </div>
</div>