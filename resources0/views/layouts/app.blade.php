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
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-200028103-1">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-200028103-1');
        </script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(69904324, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/69904324" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
</body>

</html>
