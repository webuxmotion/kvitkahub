@props(['title', 'placeholder', 'name', 'value', 'hidden', 'withError'])

<div class="input">
  @unless(empty($title))
    <label for="{{$name}}">{{$title}}</label>
  @endunless
  <input
    id="{{$name}}"
    @unless(empty($name))
      name="{{$name}}"
    @endunless
    @unless(empty($placeholder))
      placeholder="{{$placeholder}}"
    @endunless
    @unless(empty($value))
      value="{{$value}}"
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
  
</div>