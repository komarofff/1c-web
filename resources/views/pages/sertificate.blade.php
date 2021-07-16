@extends ('layouts.app')

@section('title', 'Наши сертификаты.  ООО ПО Системс групп')
@section('description', 'Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
        модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix)')
@section('og')
<meta property="og:url" content="https://1c-web.by/sertificate" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Наши сертификаты.  ООО ПО Системс групп " />
<meta property="og:description" content="Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
        модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix)" />
<meta property="og:image" content="https://1c-web.by/images/og-po_systems_group.jpg" />
<meta property="og:image:width" content="742" />
<meta property="og:image:height" content="575" />
@endsection
@section('style')

@endsection
@section('scripts')
    <script src="{{asset('/js/script.js')}}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{asset ('/js/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset ('/js/slider.js')}}"></script>
    <script src="{{asset ('/js/tabs.js')}}"></script>
    <!--<script src="{{asset ('/js/buttons.js')}}"></script>-->
    <!--<script src="{{asset ('/js/topslider.js')}}"></script>-->
    <!--<script src="{{asset ('/js/technology-slider.js')}}"></script>-->
@endsection
@section('header_banner')

@section('content')
<main class="main">
<section class="sertificate" id="sertificate">
                <h2 class="article-title">Наши сертификаты</h2>

                <h2 class="article-title2 above margin-top-big"></h2>
                <div class="sertificate-slider">
                    <img src="{{asset('/images/sertificate/Anatoliy-php.jpg?text=1')}}">
                    <div class="sertificate-slider-block">
                        <p class="sertificate-slider-title">Anatoliy Komarov</p>
                        <p class="sertificate-slider-description">
                            PHP Developer Advanced Level . OOP, MYSQL, Zend, Laravel, Symfony, Yii 2.
                        </p>
                    </div>
                </div>
                <div class="sertificate-slider">
                    <img src="{{asset('/images/sertificate/Anatoliy_sertifikat.jpg?text=2')}}">
                    <div class="sertificate-slider-block">
                        <p class="sertificate-slider-title">Anatoliy Komarov</p>
                        <p class="sertificate-slider-description">
                             Web Developer Advanced level.JavaScript, CSS, HTML, PHP.
                        </p>
                    </div>
                </div>
                <div class="sertificate-slider">
                    <img src="{{asset('/images/sertificate/Dmitrij_sertifikat.jpg?text=3')}}">
                    <div class="sertificate-slider-block">
                        <p class="sertificate-slider-title">Dzmitry Faliuk</p>
                        <p class="sertificate-slider-description">
                            Web Developer Advanced level.JavaScript, CSS, HTML, PHP.
                        </p>
                    </div>
                </div>
                <div class="sertificate-slider">
                    <img src="{{asset('/images/sertificate/Dmitriy-php.jpg?text=4')}}">
                    <div class="sertificate-slider-block">
                        <p class="sertificate-slider-title">Dzmitry Faliuk</p>
                        <p class="sertificate-slider-description">
                            PHP Developer Advanced Level . OOP, MYSQL, Zend, Laravel, Symfony, Yii 2.
                        </p>
                    </div>
                </div>

            </section>


    @endsection
