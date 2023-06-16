@props(['variant', 'href'])

@php
    $className = "button";
    if ($variant ?? null) {
      $className .= " button--variant--" . $variant;
    }
@endphp

@if($href)
  <a href="{{$href}}" class="{{$className}}">
    {{$slot}}
  </a>
@endif
