@extends ('layouts.app')
@section('title', 'Разработка веб-сайтов. Landing pages, интернет-магазины, корпоративные сайты. ООО "ПО СИСТЕМС ГРУПП"')
@section('description', 'Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
    модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix,Shopify)')
@section('og')
    <meta property="og:url" content="https://1c-web.by/front_end"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Разработка веб-сайтов. Frontend && Backend. UI&&UX дизайн . ООО ПО Системс групп "/>
    <meta property="og:description" content="Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
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
@endsection
@section('header_banner')
    <section class="header__banner">
        <div class="banner-description">
            <div class="header__banner-logo">
                <img class="header__banner-img" src="{{asset('/images/banners/header-banner.png')}}"
                     alt="header-banner">
            </div>

            <div class="header__description">
                <p class="header__banner-title">
                    Профессиональное решение для Вашего бизнеса
                </p>
                <p class="header__banner-description">
                    Команда профессионалов разработает для Вас вебсайт любой сложности
                </p>
                <button class="services__description-button">Заказать сайт</button>

            </div>
        </div>
        <div class="banner-buttons">
            <div class="banner-buttons-block" id="block_but_1">
                <img class="green-star" src="{{asset('/images/green-star.svg')}}" alt="star">
                <p class="banner-buttons-title" id="but_1">234</p>
                <p class="banner-button-text">
                    довольных клиентов
                </p>
            </div>
            <div class="banner-buttons-block" id="block_but_2">
                <img class="green-star" src="{{asset('/images/green-star.svg')}}" alt="star">
                <p class="banner-buttons-title" id="but_2">1089</p>
                <p class="banner-button-text">
                    чашек <br>кофе :)
                </p>
            </div>
            <div class="banner-buttons-block" id="block_but_3">
                <img class="green-star" src="{{asset('/images/green-star.svg')}}" alt="star">
                <p class="banner-buttons-title" id="but_3">206</p>
                <p class="banner-button-text">
                    готовых проектов
                </p>
            </div>
            <div class="banner-buttons-block" id="block_but_4">
                <img class="green-star" src="{{asset('/images/green-star.svg')}}" alt="star">
                <p class="banner-buttons-title" id="but_4">1200</p>
                <p class="banner-button-text">
                    разработанных модулей
                </p>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="stripe-blue"></div>
    <main class="main">
        <section class="services" id="services">
            <div class="services__tabs ">
                <h2 class="article-title">Спектр услуг</h2>
                <nav class="services__tabs-links ">
                    <ul id="tabs_area_1">
                        <a href="#td1">
                            <li class="tabs1 center-vertical active-tab">
                                <p id="t1">Вёрстка сайтов
                                    (front-end) </p>
                            </li>
                        </a>
                        <a href="#td2">
                            <li class="tabs1 center-vertical">
                                <p id="t2">Создание динамических сайтов.<br>(PHP,
                                    back-end)
                                </p>
                            </li>
                        </a>
                        <a href="#td3">
                            <li class="tabs1 center-vertical">
                                <p id="t3">Разработка уникального дизайна UI&UX
                                </p>
                            </li>
                        </a>
                        <a href="#td4">
                            <li class="tabs1 center-vertical">
                                <p id="t4">Разработка дополнительных
                                    <br> модулей для
                                    веб-сайтов
                                </p>
                            </li>
                        </a>
                        <a href="#td5">
                            <li class="tabs1 center-vertical">
                                <p id="t5">Установка систем
                                    управления<br> (MODX, Opencart,
                                    Wordpress,Bitrix)</p>
                            </li>
                        </a>
                        <a href="#td6">
                            <li class="tabs1 center-vertical">
                                <p id="t6">Посадка шаблонов сайтов
                                    <br>на системы
                                    управления
                                </p>
                            </li>
                        </a>
                        <a href="#td7">
                            <li class="tabs1 center-vertical">
                                <p id="t7">Перенос товаров в базу
                                    сайта</p>
                            </li>
                        </a>
                        <a href="#td8">
                            <li class="tabs1 center-vertical">
                                <p id="t8">Интеграция сайта с системой
                                    1C</p>
                            </li>
                        </a>

                    </ul>
                </nav>
            </div>
            <div class="services__description   center-column " id="td1">
                <h3 class="services__description-title">Вёрстка сайтов
                    (front-end). <br>Создание HTML страниц</h3>
                <img class="services__description-image" src="{{asset('/images/services-1.jpg')}}" alt="image">
                <p class="services__description-text">Создание сайтов с использованием современных технологий, в том
                    числе GRID и FLEX.
                    Профессиональный подход и железные сроки по системе Pixel perfect («пиксель в пиксель»).
                    Адаптивность, кроссбраузерность и интеграция CMS: Modx, Bitrix, Wordpress и т.д. Разработка
                    различных типов сайтов: от лендинга до интернет-магазина с тысячами товаров.
                </p>
                <a href="{{route('front_end')}}">
                    <button class="services__description-button">Узнать больше</button>
                </a>
            </div>

            <div class="services__description center-column none" id="td2">
                <h3 class="services__description-title">Динамические сайты <br>(PHP, back-end)</h3>
                <img class="services__description-image" src="{{asset('/images/services-2.jpg')}}" alt="image">
                <p class="services__description-text">
                    Back-end для сайтов. Создание динамических сайтов. Настройка, управление и создание баз данных
                    mysql.Разработка и построение структуры сайта. Настройка back-end для самописных сайтов.
                </p>
                <button class="services__description-button">Узнать больше</button>
            </div>

            <div class="services__description center-column none" id="td3">
                <h3 class="services__description-title">Уникальный дизайн UI & UX</h3>
                <img class="services__description-image" src="{{asset('/images/services-3.png')}}" alt="image">
                <p class="services__description-text">
                    Разработка уникального дизайна сайта профессиональными дизайнерами. Мы учитываем все необходимые
                    требования для созданию уникального дизайна веб-страниц и приложений.
                </p>
                <button class="services__description-button">Узнать больше</button>
            </div>

            <div class="services__description center-column none" id="td4">
                <h3 class="services__description-title">Разработка дополнительных
                    модулей для веб-сайтов</h3>
                <img class="services__description-image" src="{{asset('/images/services-4.jpg')}}" alt="image">
                <p class="services__description-text">
                    Разработка приложений и модулей различными языками программирования: PHP, HTML и Java Script.
                    Интеграция приложений с существующими сайтами. Широкий опыт в различных нишах: услуги, e-commerce, онлайн-образование и другие.
                    Создание креативных и маркетинговых модулей.
                </p>
                <a href="{{route('additional_module')}}">
                <button class="services__description-button">Узнать больше</button>
                </a>
            </div>

            <div class="services__description center-column none" id="td5">
                <h3 class="services__description-title">Установка систем
                    управления <br>(Modx,Opencart,Wordpress, Shopify, Bitrix, Magento)</h3>
                <img class="services__description-image" src="{{asset('/images/services-5.jpg')}}" alt="image">
                <p class="services__description-text">
                    Установка и настройка наиболее востребованных систем управления: Modx, Bitrix, Shopify, Magento,
                    Opencart, Wordpress. Разработка собственных CMS. Помощь в выборе «идеальной» системы управления.
                    Опыт по внедрению более 50 различных CMS.
                </p>
                <a href="{{route('crm')}}">
                    <button class="services__description-button">Узнать больше</button>
                </a>
            </div>

            <div class="services__description center-column none" id="td6">
                <h3 class="services__description-title">Посадка шаблонов сайтов
                    на системы управления</h3>
                <img class="services__description-image" src="{{asset('/images/services-6.jpg')}}" alt="image">
                <p class="services__description-text">
                    Подготовка и установка html-шаблонов, включая самописные, на различные CMS. Полная и корректная
                    интеграция с обязательным тестированием на кроссбраузерность. В штате работают сертифицированные
                    программисты по Wordpress, Shopify, OpenCart, Bitrix , и другим системам.
                </p>
                <a href="{{route('crm_frontend')}}">
                    <button class="services__description-button">Узнать больше</button>
                </a>
            </div>

            <div class="services__description center-column none" id="td7">
                <h3 class="services__description-title">Перенос товаров в базу сайта</h3>
                <img class="services__description-image" src="{{asset('/images/services-7.png')}}" alt="image">
                <p class="services__description-text">
                    Перенос товарной базы на сайт посредством различных сценариев обмена данными.
                    Создание детализированной структуры базы данных.
                </p>
                <a href="{{route('php_modules')}}">
                    <button class="services__description-button">Узнать больше</button>
                </a>
            </div>

            <div class="services__description center-column none" id="td8">
                <h3 class="services__description-title">Интеграция сайта с системой 1C</h3>
                <img class="services__description-image" src="{{asset('/images/services-8.jpg')}}" alt="image">
                <p class="services__description-text">
                    Интеграции сайта с различными системами и типами 1С, в том числе «семерки» и «восьмерки». Настройка
                    обмена с помощью форматов: CSV, XML/JSON, CommerceML и другими. Перенос товаров и услуг из
                    коробочной/облачной 1С. Разработка программных модулей для интернет-магазинов с обеспечением
                    онлайн-связи с базой.
                </p>
                <a href="{{route('1C_integration')}}">
                    <button class="services__description-button">Узнать больше</button>
                </a>
            </div>

        </section>
        <div class="stripe-green"></div>
        <img class="stripes" src="{{asset('/images/stripes.png')}}" alt="">
        <section class="advantages-background" id="advantages">
            <div class="advantages">
                <h2 class="article-title">Наши преимущества</h2>
                <div class="grid_2column">
                    <div class="advantages-block-1">
                        <div class="advantages-inner-blocks-left"><img class="advantages-numbers"
                                                                       src="{{asset('/images/advantages/advantages-1.svg')}}"
                                                                       alt="">
                            <p class="advantages-text">Уникальный дизайн сайтов</p>
                        </div>
                        <div class="advantages-inner-blocks-right"><img class="advantages-numbers"
                                                                        src="{{asset('/images/advantages/advantages-2.svg')}}"
                                                                        alt="">
                            <p class="advantages-text">Современные системы управления</p>
                        </div>
                        <div class="advantages-inner-blocks-left"><img class="advantages-numbers"
                                                                       src="{{asset('/images/advantages/advantages-3.svg')}}"
                                                                       alt="">
                            <p class="advantages-text">Профессиональные разработчики</p>
                        </div>
                        <div class="advantages-inner-blocks-right"><img class="advantages-numbers"
                                                                        src="{{asset('/images/advantages/advantages-4.svg')}}"
                                                                        alt="">
                            <p class="advantages-text">Разработка универсальных приложений</p>
                        </div>

                    </div>
                    <div class="advantages-block-2">
                        <img class="advantages-block2-img" src="{{asset('/images/advantages/advantages-img.jpg')}}"
                             alt="our-advantages">
                    </div>
                </div>

            </div>

            <div class="how-we-work" id="scheme">
                <h2 class="article-title">Cхема нашей работы</h2>

                <img class="stripes2" src="{{asset('/images/stripes-2.png')}}" alt="">

                <div class="how-we-work-tabs above">
                    <div class="work-circle active-block">
                        <p class="circle-gray active" id="w1"><img id="w1" src="{{asset('/images/how-we-work/1.png')}}"
                                                                   alt="">
                        </p>
                    </div>
                    <div class="work-circle">
                        <p class="circle-gray" id="w2"><img id="w2" src="{{asset('/images/how-we-work/2.png')}}" alt="">
                        </p>
                    </div>
                    <div class="work-circle">
                        <p class="circle-gray" id="w3"><img id="w3" src="{{asset('/images/how-we-work/3.png')}}" alt="">
                        </p>
                    </div>
                    <div class="work-circle">
                        <p class="circle-gray" id="w4"><img id="w4" src="{{asset('/images/how-we-work/4.png')}}" alt="">
                        </p>
                    </div>
                </div>
                <div class="work-tab">
                    <p class="title-block-work above">Заявка</p>
                    <div class="how-we-work-tabs_block above">
                        <img class="work-image" src="{{asset('/images/how-we-work/how-we-work-1.jpg')}}"
                             alt="how we work">
                        <div class="work-block-description">
                            <p>Для начала сотрудничества необходимо заказать обратный звонок или отправить ТЗ на e-mail.</p>
                            <p>Для оперативного получения консультации набирайте самостоятельно по указанным номерам</p>
                            <p>При заказе звонка отвечаем в течение 1 часа. При большой загруженности время может незначительно меняться.</p>
                            <p>При отправке ТЗ на e-mail оцениваем его не более 2-5 дней. </p>
                        </div>
                    </div>
                </div>

                <div class="work-tab none">
                    <p class="title-block-work above">Первичное интервью и оценка</p>
                    <div class="how-we-work-tabs_block above">
                        <img class="work-image" src="{{asset('/images/how-we-work/how-we-work-1.jpg')}}"
                             alt="how we work">
                        <div class="work-block-description">
                            <p>После приема заявки вам перезванивает менеджер и проводит первичное интервью.</p>
                            <p>Во время него уточняются детали заказа: особенности дизайна, функциональные пожелания и т.д.</p>
                            <p>Менеджер берет паузу для оценки заказа. Если работа типичная или небольшая, то стоимость называется сразу. </p>
                            <p>Предварительная стоимость озвучивается в виде ценового диапазона.</p>
                        </div>
                    </div>
                </div>
                <div class="work-tab none">
                    <p class="title-block-work above">Встреча и заключение договора</p>
                    <div class="how-we-work-tabs_block above">
                        <img class="work-image" src="{{asset('/images/how-we-work/how-we-work-1.jpg')}}"
                             alt="how we work">
                        <div class="work-block-description">
                            <p>После согласования предварительной цены договариваемся о первой встрече.</p>
                            <p>На ней присутствует дизайнер, чтобы проработать визуальные особенности сайта. </p>
                            <p>На следующей встрече уже будет разработчик. Для сдачи проекта необходимо 3–10 онлайн/офлайн встреч.</p>
                            <p>По итогам переговоров заключается договор и определяется график оплат.</p>
                        </div>
                    </div>
                </div>

                <div class="work-tab none">
                    <p class="title-block-work above">Работа и сдача проекта</p>
                    <div class="how-we-work-tabs_block above">
                        <img class="work-image" src="{{asset('/images/how-we-work/how-we-work-1.jpg')}}"
                             alt="how we work">
                        <div class="work-block-description">
                            <p>Разработка включает в себя не только программирование, но и загрузку контента (нашей командой и клиентом).</p>
                            <p>Во время работы держим постоянную связь и демонстрируем промежуточные итоги.</p>
                            <p>После приемки даем 1-2 недели на проверку сайта. В случае отсутствия недостатков происходит окончательный расчет.</p>
                            <p>Сопровождаем проект до его филигранной отладки.</p>
                        </div>
                    </div>
                </div>


            </div>


        </section>


@endsection
