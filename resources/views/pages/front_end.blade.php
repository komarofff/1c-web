@extends ('layouts.app')

@section('title', 'Вёрстка сайтов (front-end).  ООО ПО Системс групп')
@section('description', 'Создание сайтов с использованием современных технологий, в том числе GRID и FLEX. Профессиональный
подход и железные сроки по системе Pixel perfect («пиксель в пиксель»). Адаптивность, кроссбраузерность и интеграция CMS:
Modx, Bitrix, Wordpress и т.д. Разработка различных типов сайтов: от лендинга до интернет-магазина с тысячами товаров.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/front_end"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Вёрстка сайтов (front-end).  ООО ПО Системс групп "/>
    <meta property="og:description" content="Создание сайтов с использованием современных технологий, в том числе GRID и FLEX. Профессиональный
подход и железные сроки по системе Pixel perfect («пиксель в пиксель»). Адаптивность, кроссбраузерность и интеграция CMS:
Modx, Bitrix, Wordpress и т.д. Разработка различных типов сайтов: от лендинга до интернет-магазина с тысячами товаров."/>
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

            <h2 class="article-title">Вёрстка сайтов (front-end) </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-1.jpg')}}" alt="image">
                    <p>Верстка сайта — творческий процесс, в котором задействованы дизайнер, разработчик и заказчик. В
                        отличие от полиграфической верстки, web-разработка учитывает не только стилевую гармонию, но и
                        особенности отображение страницы в различных браузерах и устройствах.</p>
                    <p>Еще одна сложность в том, что ежедневно (и это не преувеличение!) увеличивается количество
                        интернет-пользователей и web-площадок. Эти изменения требует постоянного совершенствования
                        технологий, поэтому, если стоять на месте, то сделать сайт, который будет актуален сегодня и в
                        будущем — не получится!</p>
                    <p>Наша команда программистов состоит из спецов международного уровня, которые работали на
                        различных, в
                        том числе европейских, рынках. Для создания front-end (клиентской стороны интерфейса) используем
                        современные технологии: CSS, Scss, Webpack, HTML5, JavaScript, jQuery, Vue.js, Bootstrap,
                        TailWind.
                        С их помощью можно правильно «закодить» сайт, чтобы он одинаково хорошо отображаться на любых
                        устройствах (адаптивность) и различных браузерах (кроссбраузерность).</p>
                    <p> Есть опыт успешной интеграции сайта с различными системами управления: Modx, Bitrix, Shopify,
                        Wordpress и OpenCart. При необходимости, даже переписываем стандартный код CMS, как и поступили
                        с
                        сайтом TDM-electric, где оптимизировали Modx.</p>
                    <p>За время работы выполнили более 200 проектов, в числе которых 20 сайтов с уникальным дизайном.
                        Разрабатывали площадки для дистрибьюторов, рестораторов, производителей товаров и услуг, в их
                        числе
                        сайты: по аренде серверов, оказанию бухгалтерских услуг, продаже электротехнических товаров, а
                        также
                        школы по изучению итальянского языка и многие другие проекты.</p>
                    <p>Исходя из потребностей бизнеса, выполняли сайты различного масштаба:</p>
                    <ul>
                        <li><p>одностраничники (landing page) — для небольших компаний с целью презентации товара/услуги
                                или
                                проведения рекламной акции;</p></li>
                        <li><p>многостраничные корпоративные сайты — крупным и средним компаниям для широкого освещения
                                своей
                                деятельности;</p></li>
                        <li><p>интернет-магазины — на нашем счету гигант с ассортиментом более чем 10 тыс. товаров.</p>
                        </li>
                    </ul>

                    <p><strong>Чтобы подробнее узнать о выполненных работах, перейдите в раздел <a
                                href="{{route('projects')}}">«Наши
                                проекты»</a></strong></p>
                    <p>
                        Создавали как сайты «с нуля», так и доделывали чужие «кривые коды». Один из интереснейших
                        проектов —
                        TDM-electric. Устаревший каталог с «бесконечным полотнищем товаров» переделали в полноценный
                        интернет-магазин с корзиной, личным кабинетом и автоматической выпиской счетов. На эти
                        масштабные
                        работы ушло всего 1,5 месяца.</p>
                    <p>Если говорить о стандартных сроках, то, в зависимости от сложности, они варьируются от нескольких
                        дней до нескольких месяцев. Одно дело — шаблонный сайт с простым дизайном, и совсем другое
                        проработать детальный рисунок звездного неба, где каждой звездочке соответствует своя анимация
                        или
                        переход на отдельную страницу.</p>
                    <p>Готовы начать сотрудничество — заполните форму и в ближайшее время мы свяжемся с вами. После
                        телефонного разговора предварительно оценим срок выполнения и стоимость заказа. Если стоимость
                        вас
                        устроит (у нас она средняя по рынку), то проведем серию личных встреч.</p>
                    <p>На одной из них будет присутствовать разработчик, который на экране компьютера продемонстрирует
                        разницу того или иного варианта верстки. Такая долгая подготовительная работа — это гарантия
                        защиты
                        от ошибок, исправление которых на стадии разработки может дорого обойтись.</p>
                    <p><strong>Если не знаете с чего начать — все равно оставляйте заявку. Не раз создавали отличные
                            сайты, хотя
                            в
                            начале сотрудничества у клиента был только листик А4 с приблизительной структурой
                            сайта.</strong></p>


                </div>
                <div class="mob-hide">

                    @php
                        $technologies=['Amazon','android','Angular','Bootstrap','CDN','CSS','firebase','googlemaps','HTML','JavaScript','jQuery','kotlin','laravel',
                                            'MariaDB','MongoDB','mysql','Node.js','Opencart','php','postcss',
                                            'postgresql','ReactJS','Shopify','TensorFlow','TypeScript','Vue.js','Vuetify','Yii2'];
                    @endphp
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

                </div>


        </section>


@endsection
