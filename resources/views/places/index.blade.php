<x-layout>

  <x-title>Торгівельні точки</x-title>

  <div class="layout__list">

      @foreach ($places as $place)
          <div class="layout__place-card">
              <x-place-card :place="$place" />
          </div>
      @endforeach

  </div>
</x-layout>