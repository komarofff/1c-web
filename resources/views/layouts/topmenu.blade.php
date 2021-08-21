<section class="topmenu" id="topmenu">
    <div class="topmenu__logo ">

    <a href="/"><img class="logo-w" src="{{asset('/images/logo/logo-w.png')}}" alt=""></a>
    <a href="/">  <img class="logo-text" src="{{asset('/images/logo/logo-text.png')}}" alt=""></a>

    </div>
    <span class="material-icons mobile_menu">
        menu
    </span>
    <nav class="topmenu__menu">

        <ul class="topmenu__menu-list">
            <li><span class="material-icons close none">
                    close
                </span></li>
         @foreach ($menu as $item)
            @if($item['title']=='Контакты')
                    <li><a class="topmenu__menu-list-link" id="contact_us" href="{{$item['link']}}">{{$item['title']}}</a></li>
                @else
                    <li><a class="topmenu__menu-list-link" href="{{$item['link']}}">{{$item['title']}}</a></li>
                @endif
        @endforeach
            <!-- topmenu__link-active -->
        </ul>
    </nav>
</section>
