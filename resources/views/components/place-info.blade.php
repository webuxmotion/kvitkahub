@props(['place'])

<div class="place-info">
  <p>
    <span>Точка: </span>
    <span>
      <a href="/flowers?place={{$place->id}}">
        {{$place->name}}
      </a>
    </span>
  </p>
  <p>
    <span>Адреса: </span>
    <span>
      <a href="{{$place->map_link}}" target="_blank">
        {{$place->address}}
      </a>
    </span>
  </p>
  <p>
    <span>Телефон: </span>
    <span>{{$place->phone}}</span>
  </p>
  <p>
    <span>Імʼя продавця: </span>
    <span>{{$place->contact_name}}</span>
  </p>
</div>