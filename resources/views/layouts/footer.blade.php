@php
#use \App\Http\Controllers\PageController;
$all_projects=\App\Http\Controllers\FunctionsController::getFooterData()
@endphp
<div class="stripe-green2"></div>
<projects-slider :all_projects='@json($all_projects)' /></projects-slider>
<div class="stripe-green2"></div>
<section class="footer-banner">
                <img class="footer-banner__image" src="{{asset('/images/banners/footer-banner.png')}}" alt="footer-banner">
                <div class="footer-banner-description">
                    <p class="footer-banner-title">
                        Профессиональная разработка, поддержка
                        и сопровождение web-сайтов
                    </p>
                </div>

            </section>
        </main>

        <footer class="footer">
            <div class="footer-contact-description">
                © ООО "ПО СИСТЕМС ГРУПП"
                <p>Профессиональная разработка веб сайтов. Верстка веб страниц.
                    Установка шаблонов сайтов на системы управления. Подключение
                    систем управления: Modx, OpenCart, Wordpess, Bitrix, Shopify,Magento.
                    Разработка дополнительных модулей. Интеграция веб сайта с системой 1С.
                </p>
                <p><a href="{{ route('sertificate') }}">Сертификаты</a></p>
                <p>Вёрстка сайта. Установка системы управления - <a href="tel:+375 29 709-60-78">Anatoliy Komarov</a> 
                </p>
            </div>
            <div class="footer-contact-information">
                <img class="footer__social-icons" src="{{asset('/images/social.svg')}}" alt="social">
                <p>Viber,Telegramm,WhatsApp <a href="tel:+375 29 709-60-78">+375 29 700-50-23</a></p>
                <p>г.Минск, ул.Некрасова 39-1 каб.327</p>
                <p>Свидетельство о государственной регистрации № 193451364</p>
            </div>
        </footer>
    </div>