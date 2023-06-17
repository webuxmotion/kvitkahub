<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kvitka Hub</title>

        <link rel="icon" type="image/png" href="/favicon.png">

        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/general.css">
        <link rel="stylesheet" href="/css/layout.css">
        <link rel="stylesheet" href="/css/hero.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/logo.css">
        <link rel="stylesheet" href="/css/title.css">
        <link rel="stylesheet" href="/css/button.css">
        <link rel="stylesheet" href="/css/product-card.css">
        <link rel="stylesheet" href="/css/product-page.css">
        <link rel="stylesheet" href="/css/input.css">
        <link rel="stylesheet" href="/css/message.css">
        <link rel="stylesheet" href="/css/profile-nav.css">
        <link rel="stylesheet" href="/css/profile-product-card.css">
    </head>
    <body>
      <div class="layout">
        <div class="layout__header">
          <x-header />
        </div>
        <x-message />
        <div class="layout__content">
          {{$slot}}
        </div>
        <div class="layout__footer">
          <x-footer />
        </div>
      </div>
    </body>
</html>
