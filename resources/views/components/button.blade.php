@props(['variant', 'href', 'fullWidth'])

@php
    $className = "button";
    if ($variant ?? null) {
      $className .= " button--variant--" . $variant;
    }
    if ($fullWidth ?? null) {
      $className .= " button--fullWidth";
    }
@endphp

@if(!empty($href))
  <a href="{{$href}}" class="{{$className}}">
    {{$slot}}
  </a>
@else
  <button class="{{$className}}">
    {{$slot}}
  </button>
@endif
