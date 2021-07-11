@extends ('layouts.app')

@section('title', 'Установка и настройка наиболее востребованных систем управления (CRM).  ООО ПО Системс групп')
@section('description', ' Установка и настройка наиболее востребованных систем управления: Modx, Bitrix, Shopify, Magento,
                    Opencart, Wordpress. Разработка собственных CMS. Помощь в выборе «идеальной» системы управления.
                    Опыт по внедрению более 50 различных CMS.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/crm"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Установка и настройка наиболее востребованных систем управления (CRM).  ООО ПО Системс групп"/>
    <meta property="og:description" content=" Установка и настройка наиболее востребованных систем управления: Modx, Bitrix, Shopify, Magento,
                    Opencart, Wordpress. Разработка собственных CMS. Помощь в выборе «идеальной» системы управления.
                    Опыт по внедрению более 50 различных CMS."/>
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

            <h2 class="article-title">Установка и настройка наиболее востребованных систем управления (CRM) </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-5.jpg')}}" alt="image">

                    <p>Система управления контентом нужна для сайтов, в которых необходимо часто обновлять информацию.
                        CMS
                        выбирают исходя из масштаба и особенностей бизнеса. Как правило, для больших проектов
                        разрабатывают
                        собственную самописную систему управления на базе современного фреймворка. Такой подход
                        позволяет
                        сделать «админку», которая максимально точно соответствует вашим требованиям.</p>
                    <p> Из наиболее востребованных CMS выделяют:</p>
                    <ul>

                        <li><p><strong>Wordpress</strong> — самая популярная платформа на базе которой можно сделать любой сайт: от
                                одностраничника до интернет-магазина. Имеет широкий функционал, легко масштабируется,
                                проста в
                                администрировании и «дружелюбна» к SEO-оптимизации. Из-за большого числа модулей может
                                падать
                                производительность, но эти проблемы легко решаются с помощью корректировки кода;</p>
                        </li>
                        <li><p><strong>Opencart</strong> — бесплатная CMS для создания онлайн-магазинов. Хорошо интегрируется с
                                различными
                                сервисами доставки и оплаты, в том числе европейскими и американскими. Имеет удобную
                                панель
                                управления, просто масштабируется и легко дорабатывается за счет открытого кода. При
                                дизайн-доработке существующих шаблонов могут возникнуть трудности, потому что на
                                платформе не
                                предусмотрен визуальный редактор;</p></li>
                        <li><p><strong>Shopify</strong> — популярный канадский конструктор для e-commerce. Обладает современным набором
                                успешной
                                платформы: простой функционал и масштабирование, красивый и разнообразный дизайн,
                                возможность
                                управления через смартфон и т.д. Есть продвинутые «фишки», например, предпросмотр товара
                                в
                                3D-модели. Однако нет русскоязычной версии и интеграции с программами 1С, «Мой склад», а
                                также
                                русскоязычными соцсетями;</p></li>
                        <li><p><strong>Magento</strong> — предназначен для создания крупных онлайн-магазинов. Существует в платной и
                                бесплатной
                                версии. Обладает широким функционалам и возможностями редактирования. Позволяет
                                создавать и
                                управлять несколькими магазинами из одной админке. Требует мощного сервера, в противном
                                случае
                                ощутимо падает производительность.</p></li>
                        <li><p><strong>Bitrix</strong> — второй по популярности движок в русскоязычной онлайн-среде. В основном
                                используется для
                                создания больших сайтов. Имеет высокую производительность и хорошо интегрируется с
                                другими
                                продуктами 1С-Битрикс. Требует обучения для самостоятельного и эффективного
                                администрирования;</p></li>
                        <li><p><strong>Modx</strong> — существует в двух версиях Evolution и Revolution. Первая уже не поддерживается
                                производителями, а вторая постоянно развивается и имеет ряд преимуществ. Подходит для
                                сайтов любой
                                сложности: от визитки до интернет-магазина. Удобна для программирования и
                                администрирования.
                                Поддерживает различные браузеры и устройства. Однако имеет ограниченное количество
                                бесплатных
                                шаблонов и требует дополнительной защиты от взлома;</p></li>
                    </ul>
                    <p> Имеем собственную разработку системы управления с простым и понятным функционалом. Она представляет
                    собой блокнот, с помощью которого можно редактировать текст и публиковать картинки. Для работы с
                    такой CMS не нужны специальные навыки — бери и работай!</p>

                    <p>Выполнили более 50 замен и установок различных CMS, не считая созданных с нуля сайтов. Подробнее об
                    опыте компании можно узнать в разделе «Наши проекты».</p>

                    <p> <strong>
                        Готовы к сотрудничеству, тогда оставьте заявку любым удобным для вас способом. В ближайшее время
                        свяжемся, чтобы обсудить детали заказа и помочь выбрать «идеальную» CMS.
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
