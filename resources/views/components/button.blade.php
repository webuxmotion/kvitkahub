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

@if($href)
  <a href="{{$href}}" class="{{$className}}">
    {{$slot}}
  </a>
@endif
