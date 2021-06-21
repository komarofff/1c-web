@extends ('layouts.app')

@section('title', $title)
@section('description', $description)
@section('og')
<meta property="og:url" content="https://1c-web.by/projects" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$title}}. ООО ПО Системс групп " />
<meta property="og:description" content="{{$description}}. Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
        модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix)" />
<meta property="og:image" content="https://1c-web.by/images/og-po_systems_group.jpg" />
<meta property="og:image:width" content="742" />
<meta property="og:image:height" content="575" />
@endsection
@section('style')

@endsection
@section('scripts')
<script src="{{asset('/scripts/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{asset ('/scripts/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset ('/scripts/slider.js')}}"></script>
<script src="{{asset ('/scripts/tabs.js')}}"></script>
<script src="{{asset ('/scripts/buttons.js')}}"></script>
@endsection
@section('header_banner')

@section('content')
<main class="main">
<section class="projects-page" id="projects">

                <h2 class="article-title">{{$data[0]['name']}} </h2>
                <div class="grid_2_column margin-top-big">
                    <div>
                        <h3>Задание</h3>
@php
$task = html_entity_decode($data[0]['content']);
@endphp
                        <p class="text">
                       @php
					   echo $task; 
						@endphp
                        </p>
                                              
                    </div>
                    <div>
                        <h3>Технологии:</h3>

                        <p class="technology">
                            <img src="{{asset ('/images/technologies/CSS.svg')}}" alt="">
                            <img src="{{asset ('/images/technologies/HTML.svg')}}" alt="">
                            <img src="{{asset ('/images/technologies/php-logo.svg')}}" alt="">
                            <img src="{{asset ('/images/technologies/JavaScript.svg')}}" alt="">


                        </p>
                    </div>
                </div>
                <div class="grid_2_column margin-top-big">
                    <div >
                        <h3 class="project-name">
                            <p> https://{{$data[0]['siteUrl']}} </p>
                        </h3>
                        <img class="project-desktop" src="https://1c-group.by{{$data[0]['image']}}" alt="{{$data[0]['name']}}">
                    </div>
                    <div>
                        <h3 class="project-name">
                            <p>Mobile version</p>
                        </h3>
						@php
						$mobileImg=str_replace(".",".mobile.",$data[0]['image']);
						@endphp
                        <!--<img class="project-mobile" src="https://1c-group.by{{$data[0]['image']}}.mobile.jpg" alt="{{$data[0]['name']}}">-->
						<img class="project-mobile" src="https://1c-group.by{{$mobileImg}}" alt="{{$data[0]['name']}}" >
                    </div>
                </div>


            </section>


    @endsection