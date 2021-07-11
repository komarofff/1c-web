@extends ('layouts.app')

@section('title', 'Посадка шаблона на CMS -  Wordpress, OpenCart, Shopify, Bitrix, Modx.  ООО ПО Системс групп')
@section('description', 'Подготовка и установка html-шаблонов, включая самописные, на различные CMS. Полная и корректная
                    интеграция с обязательным тестированием на кроссбраузерность. В штате работают сертифицированные
                    программисты по Wordpress, Shopify, OpenCart, Bitrix , и другим системам.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/crm_frontend"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Посадка шаблона на CMS -  Wordpress, OpenCart, Shopify, Bitrix, Modx.  ООО ПО Системс групп"/>
    <meta property="og:description" content="Подготовка и установка html-шаблонов, включая самописные, на различные CMS. Полная и корректная
                    интеграция с обязательным тестированием на кроссбраузерность. В штате работают сертифицированные
                    программисты по Wordpress, Shopify, OpenCart, Bitrix , и другим системам."/>
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
            $technologies=['Amazon','android','Angular','Bootstrap','CDN','CSS','firebase','googlemaps','HTML','JavaScript','jQuery','kotlin','laravel',
                                'MariaDB','MongoDB','mysql','Node.js','Opencart','php','postcss',
                                'postgresql','ReactJS','Shopify','TensorFlow','TypeScript','Vue.js','Vuetify','Yii2'];
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

            <h2 class="article-title">Посадка шаблона на CMS  </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-6.jpg')}}" alt="image">
                    <p>Посадка шаблона на CMS (систему управления контентом, например, Wordpress) включает в себя его
                    предварительную подготовку. В одних случаях, требуется уникализация шаблона, чтобы сайт выделялся, а
                    не представлял собой очередного двойника. В других — переподготовка шаблона одной CMS для переноса
                        на другую. Например, сайт на MoDX, но понравился шаблон из Wordpress.</p>

                    <p>Следующий этап — интеграция шаблона и системы управления. В ходе ее нужно сделать типовое наполнение
                    и запустить тестирование с обязательной проверкой на кроссбраузерность.</p>

                    <p>Отметим, что скорость внедрения напрямую зависит от особенностей модуля. Если использовать готовый
                    шаблон, то посадка займет считанное время. Если самописный, то процесс может растянуться на более
                    длительный срок. Учитывайте этот фактор, когда будете сомневаться, что же выбрать: шаблон или
                    уникальный дизайн?</p>

                    <p>В нашем штате работают сертифицированные и опытные разработчики по различным системам управления, в
                    том числе MODX, Opencart, Wordpress и Битрикс. Чтобы подробно узнать о выполненных работах,
                        перейдите в раздел <a href="{{ route('projects') }}">«Наши проекты».</a></p>
                    <p><strong>
                    Для начала сотрудничества заполните форму обратной связи или пришлите заявку на e-mail. В ближайшее
                    время наш менеджер свяжется с вами, чтобы обсудить детали, предложить способы решения и оценить
                    стоимость проекта.
                    </strong></p>

                </div>
                <div>

                    <h3>Технологии:</h3>

                    <div class="technology">
                        @foreach($technologies as $item)
                            <p>
                                <img src="{{asset ("/images/technologies/$item.svg")}}" alt="{{$item}}"
                                     title="{{$item}}">
                                <span> {{$item}} </span>
                            </p>
                        @endforeach

                    </div>
                    </span>
                </div>


        </section>


@endsection
