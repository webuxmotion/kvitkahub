@props(['listing'])

@php
  $imgSrc = $listing->image
    ? asset('/storage/' . $listing->image)
    : asset('/images/flower-2.png');
@endphp

<div class="product-page">
  <div class="product-page__column">
    <p>{{$listing->name}}</p>
    <div class="product-page__image-wrapper">
      <div class="product-page__image" style="background-image: url('{{$imgSrc}}');"></div>
    </div>
    <a href="/flowers?place=2">Дивитися всі квіти від Place 2</a>
  </div>
  <div class="product-page__column">
    <p>{{$listing->price}} <span>грн</span></p>

    <form method="POST" action="/order">
      @csrf
      <x-input 
        title="Телефон або нік в Телеграмі"
        placeholder="Телефон або Телеграм"
        name="contact"
        withError
      />
      <x-input
        value="{{$listing->id}}"
        name="listing_id"
        hidden
      />
      <x-input
        value="{{$listing->user_id}}"
        name="user_id"
        hidden
      />
      <x-input
        value="{{$listing->image}}"
        name="image"
        hidden
      />
      <x-input
        value="{{$listing->price}}"
        name="price"
        hidden
      />
      <x-input
        value="{{$listing->name}}"
        name="name"
        hidden
      />

      <x-button
        fullWidth
      >Замовити</x-button>
    </form>

    <p>Продавець напише вам в Телеграм щодо вашого замовлення</p>
  </div>
</div>