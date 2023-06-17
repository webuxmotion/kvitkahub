<form method="POST" action="/logout" style="display: inline-block;">
  @csrf
  {{$slot}}
</form>