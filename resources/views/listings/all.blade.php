<x-layout>
    @php
        $title = "Всі квіти";

        if ($place != null) {
            $title .= " від " . $place->name;
        }
    @endphp

    <x-title>{{$title}}</x-title>

    <div class="layout__list">

        @foreach ($listings as $listing)
            <div class="layout__product-card">
                <x-product-card :listing="$listing" />
            </div>
        @endforeach

    </div>
</x-layout>