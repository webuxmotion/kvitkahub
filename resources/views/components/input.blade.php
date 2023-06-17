@props(['type', 'min', 'title', 'placeholder', 'name', 'value', 'hidden', 'withError'])

@unless(!empty($hidden)) 
<div class="input">
@endunless
  @unless(empty($title))
    <label for="{{$name}}">{{$title}}</label>
  @endunless
  <input
    id="{{$name}}"
    @unless(empty($type))
      type="{{$type}}"
    @endunless
    @unless(empty($min))
      min="{{$min}}"
    @endunless
    @unless(empty($name))
      name="{{$name}}"
    @endunless
    @unless(empty($placeholder))
      placeholder="{{$placeholder}}"
    @endunless
    @unless(empty($value))
      value="{{$value}}"
    @else
      value="{{old($name)}}"
    @endunless
    @unless(empty($hidden))
      hidden
    @endunless
  />
  @unless(empty($withError))
    @error($name)
      <p class="input__error">{{$message}}</p>
    @enderror
  @endunless
  
@unless(!empty($hidden)) 
</div>
@endunless