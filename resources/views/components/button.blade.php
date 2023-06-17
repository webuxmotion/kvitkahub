@props(['variant', 'href', 'fullWidth'])

@php
    $className = "button";
    if ($variant ?? null) {
      $className .= " button--variant--" . $variant;
    }
    if ($fullWidth ?? null) {
      $className .= " button--fullWidth";
    }

    $attrs = $attributes->merge([
      "class" => $className
    ]);
@endphp

@if(!empty($href))
  <a href="{{$href}}" {{$attrs}}>
    {{$slot}}
  </a>
@else
  <button {{$attrs}}>
    {{$slot}}
  </button>
@endif
