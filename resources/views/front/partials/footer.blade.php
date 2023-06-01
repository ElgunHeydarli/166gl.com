<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="fotter-h">
                    <p> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Монтаж кровли" data-lazy-src="https://166.az/uploads/sekil/hm.png?v=1675336009"><noscript><img src="https://166.az/uploads/sekil/hm.png?v=1675336009" alt="Монтаж кровли"></noscript></p>
                </div>
                <div class="footer-content">
                    <p>@lang('dil.Наша компания предоставляет качественные и своевременные услуги по организации грузоперевозок, обеспечивая оптимальную выгодную стоимость для клиента,
                        кратчайшие сроки доставки, а также надёжное страховое обеспечение.') @endlang
                       </p>
                </div>
                <div class="mail-footer"> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a></div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="fotter-h">
                    <p>@lang('dil.Контакты')</p>
                </div>
                <div class="footer-content border-footer">
                    <div class="phones"> <a style="background-image: url('wp-content/themes/montazh-theme/img/2.png')"
                                            href="tel:{{$settings->phone}}">{{$settings->phone}}</a></div>
                    <div class="icon-flex">

                </svg>
                   </div>
                    <div class="top-adres"> <a href="#"> {{$settings->adress}} </a></div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="fotter-h">
                    <p>@lang('dil.Обратная связь')</p>
                </div>
                <div class="footer-content">

                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-copyr">
    <div class="container">
        <div class="copyr">

            <p>© 2022-2023. Все права защищены. ООО "166 Agency"</p>
        </div>
    </div>
</div>
<div class="pop_up_container"></div>
<div class="call_pop_up">
    <div class="close_pop_up">+</div>
    <p class="h3 tac w100">Заказать обратный звонок</p>
    <p class="tac">Пожалуйста, оставьте контактные данные.<br>Менеджер свяжется с Вами.</p>
    <form method="post" class="formajax"> <input type="text" name="user-name" class="w100 mb20" placeholder="Ваше имя" required=""> <input type="tel" name="user-tel" class="tel_order_monia w100 mb20 tel" placeholder="+375 " required="">
    </form>
</div>
<div id="for-mob-menu">
    <div id="mob_menu" class="mob_menu">
        <ul id="mobile_menu" class="mobile_menu">
            <li id="menu-item-101" class=" menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children"><a href="{{route('service',app()->getLocale())}}">@lang('dil.Услуги')</a><span class="toggle-sub"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                <ul class="sub-menu">
                    @foreach($services as $service)
                    <li id="menu-item-378" class=" menu-item menu-item-type-post_type menu-item-object-post"><a href="{{ route('service-detail' ,[app()->getLocale() ,$service->{'slug_'.app()->getLocale()}]) }}">{{$service->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li id="menu-item-100" class=" menu-item menu-item-type-taxonomy menu-item-object-category"><a href="news/index.htm">@lang('dil.Новости и статьи')</a></li>
            <li id="menu-item-98" class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('about',app()->getLocale())}}">@lang('dil.О нас')</a></li>
            <li id="menu-item-97" class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('contact',app()->getLocale())}}">@lang('dil.Контакты')</a></li>
        </ul>
    </div>
    <div class="sticky-mob">
        <div>

            <span class="slash"><a href="{{ route('index', ['lang'=>'pl']) }}"><button
                        @if (Config::get('app.locale') == 'pl') class="active" @endif>Pl</button></a></span>

            <span class="slash"><a href="{{ route('index', ['lang'=>'en']) }}"><button
                        @if (Config::get('app.locale') == 'en') class="active" @endif>En</button></a></span>

            <span class="slash"><a href="{{ route('index', ['lang'=>'ru']) }}"><button
                        @if (Config::get('app.locale') == 'ru') class="active" @endif>Ru</button></a></span>
            <div class="phones"> <a style="background-image: url('wp-content/themes/montazh-theme/img/2.png')" href="tel:{{$settings->phone}}">
                    <span>{{$settings->phone}}</a>
            </div>
            <div class="top-adres" style="margin-bottom: 10px;"> <a href="#"> {{$settings->adress}} </a></div>
            <div class="sticky-email"> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a></div>
            <div class="icon-flex" style="display: flex; justify-content: left; flex-wrap: wrap;"></div>
        </div>
    </div>
</div>
<script type='text/javascript' src='{{asset('frontka/wp-content/themes/montazh-theme/scripts/jquery.min.js')}}' id='jquery-js' defer=""></script>
<script>
    window.lazyLoadOptions = {
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function(element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    };
    window.addEventListener('LazyLoad::Initialized', function(e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function(mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function(mutation) {
                    for (i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                            return
                        }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                            return
                        }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) {
                            image_count += 1
                        }
                        if (is_iframe) {
                            iframe_count += 1
                        }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                    lazyLoadInstance.update()
                }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = {
                childList: !0,
                subtree: !0
            };
            observer.observe(b, config)
        }
    }, !1)
</script>
<script data-no-minify="1" async="" src="{{asset('frontka/wp-content/plugins/wp-rocket/assets/js/lazyload/12.0/lazyload.min.js')}}"></script>
<script src="{{asset('frontka/wp-content/cache/min/1/eb22a1ca3b252e9b777260504187f274.js')}}" data-minify="1" defer=""></script>
</body>

</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1685409807 -->
