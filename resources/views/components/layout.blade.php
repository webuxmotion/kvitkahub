<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kvitka Hub</title>

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
        <link rel="stylesheet" href="/css/button.css">
    </head>
    <body>
      <div class="layout">
        <div class="layout__header">
          <x-header />
        </div>
        <div class="layout__content">
          {{$slot}}
        </div>
        <div class="layout__footer">
          <x-footer />
        </div>
      </div>
    </body>
</html>
