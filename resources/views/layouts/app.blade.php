<!doctype html>
<html lang="{{ app()->getLocale() }}" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('/favicon.ico')}}" rel="shortcut icon" />
    <title>@yield ('title','some tittle if none'). ООО ПО Системс групп</title>
    <meta name="description" content="@yield('description','some descriptions if none')" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    @yield('og')
    @yield ('style')
</head>

<body>
    <div class="container" id="app">
        <header class="header">
            @include('layouts.topmenu',['menu'=> [
            ['link' => '/#services', 'title' => 'Услуги'],
            ['link' => '/projects', 'title' => 'Наши проекты'],
            ['link' => '#', 'title' => 'Цены'],
            ['link' => '/about_us', 'title' => 'О нас'],
            ['link' => '/contacts', 'title' => 'Контакты']
            ]]
            )

            @hasSection ('header_banner')
            @yield('header_banner')
            @else
            @endif
        </header>
        @yield ('content')
        @include('layouts.footer')
        <script src="{{mix ('/js/app.js')}}"></script>
        @yield ('scripts')

</body>

</html>