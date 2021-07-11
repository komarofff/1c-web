@extends ('layouts.app')

@section('title', 'Разработка дополнительных модулей для веб-сайтов.  ООО ПО Системс групп')
@section('description', 'Разработка приложений и модулей различными языками программирования: PHP, HTML и Java Script.
Интеграция приложений с существующими сайтами. Широкий опыт в различных нишах: услуги, e-commerce, онлайн-образование и другие.
 Создание креативных и маркетинговых модулей .
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/additional_module"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Разработка дополнительных модулей для веб-сайтов. ООО ПО Системс групп "/>
    <meta property="og:description" content="Разработка приложений и модулей различными языками программирования: PHP, HTML и Java Script.
Интеграция приложений с существующими сайтами. Широкий опыт в различных нишах: услуги, e-commerce, онлайн-образование и другие.
 Создание креативных и маркетинговых модулей ."/>
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

            <h2 class="article-title">Разработка дополнительных модулей для веб-сайтов</h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-4.jpg')}}" alt="image">

                    <p>Сайт — это «живая платформа», которая должна постоянно развиваться вместе с бизнесом. Здесь важно
                        не столько соответствие новым визуальным тенденциям (хотя и это тоже), сколько развитие
                        юзабилити, чтобы клиенту было удобно покупать у вас, а еще лучше возвращаться снова и снова.
                        По этой причине периодически стоит внедрять новые модули, среди которых может быть:</p>
                    <ul>
                        <li><p><strong>блог </strong>— подойдет компаниям, которые хотят создавать положительное
                                комьюнити и демонстрировать
                                свою экспертность;</p></li>
                        <li><p><strong>калькулятор</strong> — актуально для тех, кто оказывает услуги или продает
                                материалы. Такого рода
                                модули подходят дизайн-студиям, магазинам стройматериалов, логистическим и другим
                                компаниям;</p></li>
                        <li><p><strong>корзина</strong> — если у вас онлайн-магазин, то этот модуль обязателен к
                                внедрению. С его помощью вы
                                точно увеличите свои продажи;</p></li>
                        <li><p><strong>личный кабинет </strong>— несет различные функции, подходит как ритейлерам, так и
                                онлайн-образованию;</p></li>
                        <li><p><strong>подписка на новости</strong> — позволяет поддерживать постоянную коммуникацию с
                                клиентами;</p></li>
                        <li><p><strong>форма обратной связи</strong> — повышает лидогенерацию и конверсионность трафика
                                на сайте.</p></li>
                    </ul>
                    <p>Бывают более специфичные модули. Например, внедряли программу, которая позволяла брать товары
                        вместе с ценой с сайта производителя и переносить их на сайт поставщика. Причем, при переносе
                        проводилась конвертации с российских рублей в белорусские согласно актуальному курсу Нацбанка
                        .</p>
                    <p>За время работы разработали и внедрили много дополнительных модулей, в их числе калькулятор в
                        виде грузовой машины. Чтобы больше узнать о реализованных проектах, перейдите в раздел
                        <a href="{{route('projects')}}">«Наши
                            проекты».</a></p>

                    <p>Для начала сотрудничества оставьте заявку через форму обратной связи или e-mail. В ближайшее
                        время наш менеджер свяжется с вами, чтобы оценить предварительную стоимость, сроки и нюансы
                        заказа.

                    </p>


                    <p><strong> Не знаете какой именно модуль вам нужен — все равно пишите. У нас большой опыт в
                            различных
                            нишах, поэтому поможем сориентироваться и выбрать «идеальный» для вашего бизнеса.</strong>
                    </p>


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
