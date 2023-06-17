@props(['listing'])

@php
  $imgSrc = $listing->image
    ? asset('/storage/' . $listing->image)
    : asset('/images/flower-2.png');
@endphp

<div class="profile-product-card">
  <div class="profile-profile-product-card__image-wrapper">
    <div class="profile-product-card__image" style="background-image: url('{{$imgSrc}}');"></div>
  </div>
  <div class="profile-product-card__footer">
    <p>{{$listing->name}}</p>
    <p>{{$listing->price}} <span>грн</span></p>
    
    <x-button 
      href="/profile/flowers/{{$listing->id}}"
      variant="outline-dark"
    >Редагувати</x-button>
  </div>
</div>