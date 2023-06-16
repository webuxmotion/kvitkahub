<x-layout>
    <x-hero>
        <h1>
            <a href="/flowers">Бронювання квітів</a> в Києві через Телеграм
        </h1>
    </x-hero>

    <x-title>Квіти</x-title>

    <div class="layout__list">

        @foreach ($listings as $listing)
            <div class="layout__product-card">
                <x-product-card :listing="$listing" />
            </div>
        @endforeach

    </div>
</x-layout>