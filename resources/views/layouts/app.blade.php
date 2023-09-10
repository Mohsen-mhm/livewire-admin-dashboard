<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire sample</title>

    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/fontawesome.min.css">
    <livewire:styles/>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body>

<livewire:layouts.header/>

{{ $slot }}

@livewire('livewire-ui-modal')

<livewire:scripts/>

</body>
</html>
