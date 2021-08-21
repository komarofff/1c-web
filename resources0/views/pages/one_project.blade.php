@extends ('layouts.app')

@section('title', $title)
@section('description', $description)
@section('og')
    <meta property="og:url" content="https://1c-web.by/projects"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$title}}. ООО ПО Системс групп "/>
    <meta property="og:description" content="{{$description}}. Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
        модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix)"/>
    <meta property="og:image" content="https://1c-web.by/images/og-po_systems_group.jpg"/>
    <meta property="og:image:width" content="742"/>
    <meta property="og:image:height" content="575"/>
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
    <script>

        // top slider start
        setTimeout(firstClone, 10);
        const speed = 6; // slider speed in seconds
        const timeout = speed * 1000;
        elem = document.querySelectorAll('.services-technologies-slider > .services-flex');
        width_of_element = elem[0].offsetWidth;
        transition_width = width_of_element * 2;
        end1 = elem.length - 1;
        end = elem.length;

        function firstClone() {
            document.getElementById("technologies-slider").style.transition = " 0s";
            document.getElementById("technologies-slider").style.transform = `translateX(-${width_of_element}px)`;
            start_clone1 = elem[end1].cloneNode(true);
            elem[0].before(start_clone1);
            start_clone1 = elem[0].cloneNode(true);
            elem[end1].after(start_clone1);
            sliderTechnology();
        }

        function sliderTechnology() {
            document.getElementById("technologies-slider").style.transition = ` ${speed}s linear`;
            document.getElementById("technologies-slider").style.transform = `translateX(-${transition_width}px)`;
            setTimeout(secondClone, timeout);

        }

        function secondClone() {
            elem = document.querySelectorAll('.services-technologies-slider > .services-flex');

            document.getElementById("technologies-slider").style.transition = " 0s";
            document.getElementById("technologies-slider").style.transform = `translateX(-${width_of_element}px)`;

            start_clone2 = elem[2].cloneNode(true);
            end2 = end1 + 2;
            elem[end2].after(start_clone2);
            elem[0].remove();
            tech_timeout = setTimeout(sliderTechnology, 25);
        }

        // top slider end
    </script>
@endsection
@section('header_banner')

@section('content')
    <main class="main">
        @php
            $technologies =
            ["php","JavaScript","CSS","jQuery","HTML"];
        @endphp
        <div class="services-technologies-slider" id="technologies-slider">

            @foreach ($technologies as $t)
                <div class="services-flex">
                    @if($t!="")
                        <img class="services-images" src="{{asset("/images/technologies/$t.svg")}}" alt="{{ $t }}"/>
                        @php
                            @endphp
                    @endif
                </div>
            @endforeach

        </div>
        <section class="projects-page" id="projects">

            <h2 class="article-title">{{$data[0]['name']}} </h2>
            <div class="grid_2_column margin-top-big">
                <div><h3>Задание</h3>
                    @php
                        $task = html_entity_decode($data[0]['content']);
                    @endphp
                    <p class="text">
                        @php
                            echo $task;
                        @endphp
                    </p>

                </div>
                <div class="md-none">
                    <h3>Технологии:</h3>

                    <p class="technology">
                        @foreach ($technologies as $t)

                            @if($t!="")
                                <img class="technology-images-xxl" src="{{asset("/images/technologies/$t.svg")}}"
                                     alt="{{ $t }}"/>
                                @php
                                    @endphp
                            @endif

                        @endforeach


                    </p>
                </div>
            </div>
            <div class="grid_2_column margin-top-big">
                <div>
                    <h3 class="project-name">
                        <p> https://{{$data[0]['siteUrl']}} </p>
                    </h3>
                    <img class="project-desktop" src="https://1c-group.by{{$data[0]['image']}}"
                         alt="{{$data[0]['name']}}">
                </div>
                <div>
                    <h3 class="project-name">
                        <p>Mobile version</p>
                    </h3>
                @php
                    $mobileImg=str_replace(".",".mobile.",$data[0]['image']);
                @endphp
                <!--<img class="project-mobile" src="https://1c-group.by{{$data[0]['image']}}.mobile.jpg" alt="{{$data[0]['name']}}">-->
                    <img class="project-mobile" src="https://1c-group.by{{$mobileImg}}" alt="{{$data[0]['name']}}">
                </div>
            </div>


        </section>


@endsection
