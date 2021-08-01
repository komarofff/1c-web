@extends ('layouts.app')

@section('title', 'Создание динамических сайтов. (PHP, back-end).  ООО ПО Системс групп')
@section('description', 'Разработка динамических сайтов с нуля. Доработка и исправление ошибок. Настройка, управление и
                    создание баз данных mysql. Back-end для сайтов, в том числе самописных. Разработка и построение
                    структуры сайта. Опыт более 200+ проектов. Актуальный инструментарий: PHP, Yii, Mysql и Laravel.
')
@section('og')
    <meta property="og:url" content="https://1c-web.by/back_end"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Создание динамических сайтов. (PHP, back-end). ООО ПО Системс групп "/>
    <meta property="og:description" content="Разработка динамических сайтов с нуля. Доработка и исправление ошибок. Настройка, управление и
                    создание баз данных mysql. Back-end для сайтов, в том числе самописных. Разработка и построение
                    структуры сайта. Опыт более 200+ проектов. Актуальный инструментарий: PHP, Yii, Mysql и Laravel."/>
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

            <h2 class="article-title">Создание динамических сайтов. (PHP, back-end) </h2>
            <div class="grid_2_column margin-top-big">
                <div>
                    <img class="services__description-image" src="{{asset('/images/services-2.jpg')}}" alt="image">

                    <p>Все сайты можно разделить на статические и динамические. Первые — просты в верстке, но не
                        позволяют изменять информацию без вмешательства в код, что для простого пользователя сложная
                        задача. Вторые — требует больших временных и финансовых затрат при разработке и обслуживании, но
                        с ними легко работать через админку. </p>
                    <p>Динамические сайты имеют две важных составляющих — внешнюю и внутреннюю, чем и обусловлена их
                    трудоемкая разработка. Front-end (внешняя составляющая) — визуальная часть сайта, которую видит
                        пользователь. Подробнее смотрите в разделе <a href="{{route('front_end')}}">«Верстка сайта (front-end)»</a>.</p>
                    <p>Back-end (внутренняя составляющая) — программно-аппаратная часть сервера, которая отвечает за
                    функционирование сайта. Например, вывод текстовой или графической информации по заданному скрипту.</p>
                    <p>При разработке этой части используем актуальный инструментарий: PHP, Yii, Mysql и Laravel.</p>
                    <p>Сложность back-end разработки заключается в том, что клиенту тяжело оценить объем работ за счет
                    отсутствия промежуточных результатов. Для него весь процесс укладывается в цепочку «до — после»:
                    было плохо — стало хорошо!</p>
                    <p> Например, на сайте не обновляется стоимость или количество товара. Клиенту необходимо всего лишь
                    обозначить проблему и предоставить доступы. С нашей стороны придется потратить ни один рабочий день,
                    чтобы «перебрать код» и исправить ошибку. Скорость такого перебора зависит не только от
                    профессионализма подрядчика, но и сложности самого сайта.</p>

                    <p> В нашей команде работают специалисты международного класса, выполнявшие задачи различной сложности,
                    в том числе для европейских и американских заказчиков. На нашем счету более 200 проектов, среди
                    которых 20 сайтов с уникальным дизайном. Кроме полноценной разработки с нуля
                    (front-end+back-end+дизайн) дорабатывали back-end за другими подрядчиками. Подробнее о выполненных
                    работах можно узнать в разделе <a href="{{route('projects')}}">«Наши проекты»</a> .</p>

                    <p>Для начала сотрудничества оставьте заявку через форму или e-mail. В ближайшее время свяжемся с вами,
                    чтобы оценить предварительную стоимость и сроки заказа. Если вас устроит цена (средняя по рынку), то
                        проведем серию онлайн/офлайн встреч.</p>


                    <p><strong>  Не знаете с чего начать? Свяжитесь с нами, чтобы получить бесплатную консультацию и найти
                            оптимальное решение!</strong></p>


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
