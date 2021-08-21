@extends ('layouts.app')

@section('title', 'Наши проекты. ООО ПО Системс групп')
@section('description', 'Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end). Разработка
уникального дизайна UI&UX. Разработка дополнительных
модулей для веб-сайтов. Установка систем управления (MODX, Opencart, Wordpress,Bitrix)')
@section('og')
<meta property="og:url" content="https://1c-web.by/projects" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Наши проекты. ООО ПО Системс групп " />
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
@php
use \App\Http\Controllers\FunctionsController;
$all_projects=FunctionsController::getFooterData()
@endphp
<main class="main">
    <section class="projects" id="projects">
        <h2 class="article-title">Наши проекты</h2>

        <div class="project-tabs">
            <div class="project-tabs-block active-project-block" id="all">
                <img class="project-tabs-image" src="{{asset('/images/projects-tab-1.svg')}}" alt="All projects"
                    id="all">
                <a class="project-tabs-link" id="all">Все проекты</a>
            </div>
            <div class="project-tabs-block" id="shop">
                <img class="project-tabs-image" src="{{asset('/images/projects-tab-2.svg')}}" alt="shops" id="shop">
                <a class="project-tabs-link" id="shop">Интернет магазины</a>
            </div>
            <div class="project-tabs-block" id="landig">
                <img class="project-tabs-image" src="{{asset('/images/projects-tab-3.svg')}}" alt="landings"
                    id="landig">
                <a class="project-tabs-link" id="landig">Landing pages</a>
            </div>
            <div class="project-tabs-block" id="multipage">
                <img class="project-tabs-image" src="{{asset('/images/projects-tab-4.svg')}}" alt="multipages"
                    id="multipage">
                <a class="project-tabs-link" id="multipage">Многостраничные </a>
            </div>
        </div>

        <div class="all-projects box ">
            @foreach ($all_projects as $item)
            <a href="/projects/{{$item['alias']}}">
                <div class="project-description {{$item['type']}}">
                    <div class="cut-image">
                    <img class="project-images" src="https://1c-group.by{{$item['image']}}" alt="{{$item['name']}}">
                    </div>
                    <p class="project-image-descriptions">
                        {{$item['name']}}
                    </p>
                </div>
            </a>
            @endforeach

        </div>
    </section>


    @endsection
