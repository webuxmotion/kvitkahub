<x-layout>
    <x-hero>
        <h1>
            <a href="/flowers">Бронювання квітів та букетів</a> до 1000грн <br/>через Телеграм<br/>В Києві.
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