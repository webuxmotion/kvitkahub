@if(session()->has('message'))
  <div 
    class="message"
    x-data="{show: true}" 
    x-init="setTimeout(() => show = false, 5000)"
    x-show="show"
  >
    <p class="message__primary">
      {{session('message')}}
    </p>
    
    @if(session()->has('message-secondary'))
      <p class="message__secondary">
        {{session('message-secondary')}}
      </p>
      
    @endif
  </div>
@endif