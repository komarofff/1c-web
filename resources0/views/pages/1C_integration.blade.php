@extends ('layouts.app')

@section('title', 'Интеграция сайта с системой 1C.  ООО ПО Системс групп')
@section('description', 'Интеграции сайта с различными системами и типами 1С, в том числе «семерки» и «восьмерки». Настройка
                    обмена с помощью форматов: CSV, XML/JSON, CommerceML и другими. Перенос товаров и услуг из
                    коробочной/облачной 1С. Разработка программных модулей для интернет-магазинов с обеспечением
                    онлайн-связи с базой.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/1C_integration"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Интеграция сайта с системой 1C.  ООО ПО Системс групп "/>
    <meta property="og:description" content="Интеграции сайта с различными системами и типами 1С, в том числе «семерки» и «восьмерки». Настройка
                    обмена с помощью форматов: CSV, XML/JSON, CommerceML и другими. Перенос товаров и услуг из
                    коробочной/облачной 1С. Разработка программных модулей для интернет-магазинов с обеспечением
                    онлайн-связи с базой."/>
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
    <script src="{{asset ('/scripts/topslider.js')}}"></script>
    <!--<script src="{{asset ('/scripts/technology-slider.js')}}"></script>-->
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

            <h2 class="article-title">Интеграция сайта с системой 1C </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-8.jpg')}}" alt="image">

                    <p>Интеграция web-сайта и 1С — это объединения двух систем в единую среду. Процесс требует высокой
                        квалификации технических специалистов и слаженного взаимодействия между командой клиента и
                        подрядчика. Зачастую именно второй фактор тормозит работу. По этой причине важно, чтобы со
                        стороны клиента работал ответственный менеджер «с широкими полномочиями».  </p>
                    <p>С целью ускорения работы согласовываем коммуникацию программиста 1С и разработчика. При
                        отсутствии первого аудит базы делает наш специалист. Он оценивает возможность и целесообразность
                        интеграции.  </p>
                    <p>Сама интеграция может выполняться по нескольким сценариям передачи данных: CSV, XML/JSON,
                        промежуточная база и т.д. Кроме этого существуют штатные модули формата CommerceML, которые
                        упрощают и уменьшают количество прописываемого кода. Выбор того или иного сценария зависит от
                        поставленных задач, бюджета и возможностей интегрируемых систем.  </p>

                    <p>За время работы провели 6 крупных интеграций, в том числе интернет-магазина с товарной базой
                        более 10 тыс. наименований. Чтобы подробнее узнать о выполненных работах, перейдите в раздел
                        <a href="{{route('projects')}}">«Наши проекты».</a>  </p>

                    <p>Сроки выполнения зависят от сложности интеграции, версии и типа 1С. Больше всего трудностей
                        возникает при объединении «семерки». С ней невозможно добиться полной интеграции, как с
                        «восьмеркой», а сценарии обмена могут включать много ручной работы.  </p>
                    <p>Для начала сотрудничества оставьте заявку через форму обратной связи. В ближайшее время наш
                        менеджер свяжется с вами, чтобы оценить предварительную стоимость и срок выполнения заказа.
                        Если цена вас устроит (у нас она средняя по рынку), то проведем серию онлайн/офлайн встреч.  </p>
                    <p>Такая долгая подготовительная работа — это гарантия защиты от ошибок, исправление которых на
                        стадии разработки может дорого обойтись.

                    </p>
                    <p><strong> Не знаете с чего начать — все равно оставляйте заявку. У нас большой опыт, поэтому быстро
                            вникнем и решим вашу проблему.</strong></p>


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
