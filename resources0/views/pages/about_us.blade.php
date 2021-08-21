@extends ('layouts.app')

@section('title', 'О нас.  ООО ПО Системс групп')
@section('description', 'Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
        модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix)')
@section('og')
<meta property="og:url" content="https://1c-web.by/sertificate" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Наши сертификаты.  ООО ПО Системс групп " />
<meta property="og:description" content="Вёрстка сайтов (front-end), Создание динамических сайтов (PHP, back-end).  Разработка уникального дизайна UI&UX. Разработка дополнительных
        модулей для веб-сайтов. Установка систем управления      (MODX, Opencart, Wordpress,Bitrix)" />
<meta property="og:image" content="https://1c-web.by/images/og-po_systems_group.jpg" />
<meta property="og:image:width" content="742" />
<meta property="og:image:height" content="575" />
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

@section('content')
<main class="main">
    <section class="sertificate " id="sertificate">
        <h2 class="article-title">Контакты</h2>
        <img class="stripes2" src="images/stripes-2.png" alt="">
        <h3 class="page-title margin-top-big">
            ООО "ПО Системс Групп"</h3>
        <div class="contact__grid_2column">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2348.7341866412144!2d27.576850215993474!3d53.93646613804528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf6fd60c775f%3A0x8f934c791261327c!2z0YPQuy4g0J3QtdC60YDQsNGB0L7QstCwIDM5LCDQnNC40L3RgdC6!5e0!3m2!1sru!2sby!4v1623568617143!5m2!1sru!2sby"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="adress_blocks">
                <div class="one-adress-block">
                    <img src="images/contacts/Adress.png" alt="adress">
                    <p class="adress-text">
                        г.Минск,<br>
                        ул. Некрасова 39-1,<br>
                        каб. 327
                    </p>
                </div>
                <div class="one-adress-block">
                    <img src="images/contacts/Phone.png" alt="phone">
                    <p class="adress-text">
                        +375 29 700-50-23 МТС<br>
                        +375 44 700-50-23 А1
                    </p>
                </div>
                <div class="one-adress-block">
                    <img src="images/contacts/Email.png" alt="email">
                    <p class="adress-text">
                        info@1c-web.by
                    </p>
                </div>
                <div class="one-adress-block">
                    <img src="images/contacts/Social.png" alt="social">
                    <p class="adress-text">
                        Viber, Telegram, WhatsApp <br>
                        +375 44 700-50-23
                    </p>
                </div>
            </div>
        </div>
        
    </section>


    @endsection