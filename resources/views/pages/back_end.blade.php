@extends ('layouts.app')

@section('title', 'Перенос товаров в базу сайта.  ООО ПО Системс групп')
@section('description', 'Перенос товарной базы на сайт посредством различных сценариев обмена данными.
                    Создание детализированной структуры базы данных.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/back_end"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Перенос товаров в базу сайта. ООО ПО Системс групп "/>
    <meta property="og:description" content="Перенос товарной базы на сайт посредством различных сценариев обмена данными.
                    Создание детализированной структуры базы данных."/>
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

            <h2 class="article-title">Перенос товаров в базу сайта </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-7.png')}}" alt="image">

                    <p>Перенос товаров на сайт — это специальная операция, которая необходима при создании нового сайта
                        и отсутствии интеграции с 1С. Перенос может осуществляться с сайта на сайт или с 1С на сайт по
                        следующим сценариям:</p>
                    <ul>
                        <li><p> через CVS — «традиционный способ», который отличается простой исполнения и надежностью
                                использования. Однако имеет ограничения по количеству импортируемых характеристик и
                                требует
                                много ручной работы;</p></li>
                        <li><p> через обмен данных 1С-Битрикс — подходит для различных CMS, а не только Битрикс. Такой
                                способ
                                более удобный, но имеет ряд недостатков: низкая скорость — за счет создания
                                промежуточной папки
                                хранения, возможные сбои при импорте базы свыше 10 тыс. наименований;</p></li>
                        <li><p>посредством разработки собственных модулей — наиболее удобный и дорогостоящий способ,
                                который
                                позволяет упростить работу менеджеров и выполнить все пожелания клиента.</p></li>

                    </ul>
                    <p>Перед началом реализации проекта важно точно и полно определить все требования, в том числе
                        «скрытые». За счет последних могут возникнуть вопросы на стадии разработки. Например, часто
                        подразумевается, чтобы товары занесенные вручную не слетали/менялись после автоматического
                        импорта. Но код не сможет самостоятельно понять клиента. Единственный способ избежать таких
                        ошибок — проговаривать и фиксировать требования на стадии проектирования.</p>

                    <p>За время работы не раз выполняли импорт товаров отдельно и в рамках интеграции сайта с 1С, в том
                        числе передачу базы свыше 10 тыс. наименований. Чтобы подробнее узнать о выполненных проектах,
                        перейдите в раздел <a href="{{route('projects')}}">«Наши проекты».</a></p>

                    <p>Сроки выполнения зависят от объема базы, особенностей передачи и бюджета.</p>


                    <p><strong> Для начала
                            сотрудничества закажите обратный звонок. В ближайшее время наш менеджер свяжется с вами,
                            чтобы
                            уточнить детали заказа.</strong></p>


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
