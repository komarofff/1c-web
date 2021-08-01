@extends ('layouts.app')

@section('title', 'Разработка уникального дизайна UI&UX. ООО ПО Системс групп')
@section('description', 'Разработка уникального дизайна: визуал и юзабилити (удобство пользования). Опыт создания  проектов
                    по дизайну с нуля. Прозрачное сотрудничество и ценообразование.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/ui_ux_design"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Разработка уникального дизайна UI&UX. ООО ПО Системс групп "/>
    <meta property="og:description" content="Разработка уникального дизайна: визуал и юзабилити (удобство пользования). Опыт создания  проектов
                    по дизайну с нуля. Прозрачное сотрудничество и ценообразование."/>
    <meta property="og:image" content="https://1c-web.by/images/og-po_systems_group.jpg"/>
    <meta property="og:image:width" content="742"/>
    <meta property="og:image:height" content="575"/>
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
    <script src="{{asset ('/js/topslider.js')}}"></script>
    <!--<script src="{{asset ('/js/technology-slider.js')}}"></script>-->
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

            <h2 class="article-title">Разработка уникального дизайна UI&UX </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-3.png')}}" alt="image">

                    <p>Задача дизайнера сделать не красивый сайт, а тот который будет конвертировать посетителей в
                        покупателей. Для достижения этой цели нужно прорабатывать дизайн сайта в двух направлениях:</p>
                    <ul>
                        <li><p><strong>UI — «классический дизайн»</strong>  по созданию визуальной части сайта: цвета, шрифтов, графических элементов
                                и т.д.;</p></li>
                        <li><p> <strong>UX — «маркетинговый дизайн»</strong>, в рамках которого работают над юзабилити сайта, чтобы клиент мог легко
                                и просто совершить необходимое целевое действие.</p></li>
                    </ul>
                    <p>UI и UX-дизайн необходим в случаях ребрендинга, большого количества отказов, упрощения сложных
                        площадок и, разумеется, при создании сайтов с нуля.</p>
                    <p>Процесс разработки уникального дизайна включает в себя несколько этапов:</p>
                    <ul>

                        <li><p><strong>составление брифа и ознакомительная встреча</strong> — на основании устного или письменного анкетирования
                    составляется бриф. В ходе него менеджер за счет правильных вопросов создает полномасштабную модель
                    будущего сайта и дает ценовую оценку работам. После чего происходит ознакомительная встреча, на
                    которой присутствует дизайнер, там же оговаривается окончательная стоимость;</p></li>
                        <li><p><strong>создание прототипа</strong> — дизайнер разрабатывает прототип страницы. Он представляет собой эскиз, на
                    котором видна структура будущей страницы: заголовки, текстовые блоки, расположение картинок и т.д.;</p></li>
                        <li><p><strong>создание окончательного дизайна</strong> — после утверждения прототипа, разрабатывается дизайн, включая
                    цветовое решение и шрифты. Заказчику предоставляется готовый макет с возможностью онлайн-просмотра в
                    Figma;</p></li>
                        <li><p><strong>запуск и тестирование платформы </strong>— утвержденный макет переносится на платформу клиента, наполняется
                    контентом и запускается в тестовом режиме. Только после исправления всех недочетов — сайт
                    отправляется в «свободное плавание».</p></li>

                        <p>С целью качественного и быстрого выполнения работы, заказчик или его представитель взаимодействуют с
                            дизайнером напрямую.</p>

                        <p>Разработали более 20 сайтов с уникальным дизайном. Подробнее — в разделе <a href="{{ route('projects') }}">«Наши проекты»</a>.</p>

                        <p><strong>Готовы сотрудничать или просто нужна консультация — оставьте заявку, и в ближайшее время с вами
                                свяжется менеджер. Не знаете с чего начать, но понимаете, что пора меняться? Звоните — поможем!</strong></p>


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

            </div>
        </section>


@endsection
