@extends('front.layout.layout')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: normal;
        }
        .wrapper {
            width: 100%;
            margin: 50px auto;
            padding: 20px;
        }
        .wrapper .card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            height: calc(100% - 0px);
            border: 1px solid #ddd;
        }
        .wrapper .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: 0 center;
        }
        .wrapper .card h3 {
            padding: 10px 0;
            font-size: 25px;
            margin: 10px;
            font-weight: 500;
            text-transform: uppercase;
        }
        .wrapper .card p {
            color: #555;
            margin: 10px;
            font-size: 14px;
        }
        .wrapper .card .card-footer {
            background: transparent;
            border: 0;
            padding: 1rem;
            padding-bottom: 2rem;
        }
        .wrapper .card .btn {
            padding: 10px 35px;
        }
    </style>
<h1 style="display: none;">Международные грузоперевозки из стран Европы и Азии в СНГ</h1>
<div class="main-single">
    <div class="container">
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1607925853253">
            <div class="main-slider-dots wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="main-slider">
                            @foreach($sliders as $slider)
                            <div class="main-sldie">
                                <div class="container slide-conrainer">
                                    <div class="row">
                                        <div class="col-lg-6 col-xs-12 col-md-6">
                                            <p class="slider-header">{{$slider->title}}</p>
                                            <div class="desc-slider"> {{$slider->description}}
                                            </div> <a class="slide-link" href="">@lang('dil.Контакты')</a>
                                        </div>
                                    </div>
                                </div>
                  <img class="main-slider-img" src="{{asset('back/'.$slider->image)}}" alt="Автомобильные перевозки">

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1593672581089">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="same-items">
                            <h2 class="tac pretty"><span>@lang('dil.Наши услуги') @endlang</span></h2>
                            <div class="category-list">

                                <div class="wrapper">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($services as $service)
                                                <div class="col-md-4">
                                                    <div class="card shadow-sm">
                                                        <img src="{{asset('back/'.$service->image)}}" alt="sekil" />
                                                        <div class="card-body">
                                                            <h3>{{$service->name}}</h3>
                                                            <p class="text-justify">{!! \Illuminate\Support\Str::limit($service->description, 100) !!}</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <a class="readon project read-more submit" href="{{ route('service-detail' ,[app()->getLocale() ,$service->{'slug_'.app()->getLocale()}]) }}">
                                                                <div class="text-btn"><span style="border: 1px solid darkred; padding: 5px; border-radius: 5px; color: black">@lang('dil.Подробнее')</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="same-items">
                            <h2 class="tac pretty"><span>@lang('dil.Преимущества')</span></h2>
                            <div class="smm-circle">
                                <div class="smm-sector">
                                    <p>@lang('dil.Профессиональные менеджеры')</p> <span>@lang('dil.Наши менеджеры имеют большой опыт в сфере грузоперевозок')</span>
                                </div>
                                <div class="smm-sector">
                                    <p>@lang('dil.Оперативность')</p> <span>@lang('dil.Решаем вопросы клиентов в любое время суток')</span>
                                </div>
                                <div class="smm-sector">
                                    <p>@lang('dil.Сохранность груза')</p> <span>@lang('dil.Отслеживание груза на каждом этапе перевозки')</span>
                                </div>
                                <div class="smm-sector">
                                    <p>@lang('dil.Множество партнёров')</p> <span>@lang('dil.Доставим груз с любой точки мира в кратчайшие сроки')</span>
                                </div>
                                <div class="smm-sector">
                                    <p>@lang('dil.Любой тип и упаковка груза')</p> <span>@lang('dil.Возим все виды грузов, вне зависимости от габаритов и объема')</span>
                                </div>
                                <div class="smm-sector">
                                    <p>@lang('dil.Таможенное оформление')</p> <span>@lang('dil.Оказываем помощь с оформлением груза')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1593426638064 vc_row-has-fill">
            <div class="two-elem-col-only wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1681714272730">
                    <div class="wpb_wrapper">
                        <div class="counter-items">
                            <h2 class="tac pretty"><span>@lang('dil.Почему мы')</span></h2>
                            <div class="counters">
                                <div class="counter-block">
                                    <div class="od-block">
                                        <p class="count odometer" data-stop="7"> 0</p>
                                        <p class="od-tag">@lang('dil.лет')</p>
                                    </div>
                                    <p class="counter-text">@lang('dil.Опыт доставки грузов')</p>
                                </div>
                                <div class="counter-block">
                                    <div class="od-block">
                                        <p class="count odometer" data-stop="130"> 0</p>
                                        <p class="od-tag">+</p>
                                    </div>
                                    <p class="counter-text">@lang('dil.Довольных клиентов')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1678360390087">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="same-items">
                            <h2 class="tac pretty"><span>@lang('dil.Как мы работаем')</span></h2>
                            <div class="amo-new-etaps dev-etaps">
                                <div class="amo-new-etap"> <span class="new-etap-number">1</span>
                                    <div class="for-etap-img"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Расчёт стоимости" data-lazy-src="https://trustgrouz.com/wp-content/uploads/2023/03/calculator-white.png"><noscript><img src="wp-content/uploads/2023/03/calculator-white.png" alt="Расчёт стоимости"></noscript></div>
                                    <div class="amo-new-text">
                                        <p class="amo-new-header">@lang('dil.Расчёт стоимости')</p>
                                        <p class="amo-new-block">@lang('dil.Предоставляем детальный расчет стоимости доставки')</p>
                                    </div>
                                </div>
                                <div class="amo-new-etap"> <span class="new-etap-number">2</span>
                                    <div class="for-etap-img"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Сроки" data-lazy-src="https://trustgrouz.com/wp-content/uploads/2023/04/deadline-white.png"><noscript><img src="wp-content/uploads/2023/04/deadline-white.png" alt="Сроки"></noscript></div>
                                    <div class="amo-new-text">
                                        <p class="amo-new-header">@lang('dil.Сроки')</p>
                                        <p class="amo-new-block">@lang('dil.Озвучиваем срок выполнения')</p>
                                    </div>
                                </div>
                                <div class="amo-new-etap"> <span class="new-etap-number">3</span>
                                    <div class="for-etap-img"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Документы" data-lazy-src="https://trustgrouz.com/wp-content/uploads/2023/03/document-white.png"><noscript><img src="wp-content/uploads/2023/03/document-white.png" alt="Документы"></noscript></div>
                                    <div class="amo-new-text">
                                        <p class="amo-new-header">@lang('dil.Документы')</p>
                                        <p class="amo-new-block">@lang('dil.Оформляем все необходимые для перевозки документы')</p>
                                    </div>
                                </div>
                                <div class="amo-new-etap"> <span class="new-etap-number">4</span>
                                    <div class="for-etap-img"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Доставка" data-lazy-src="https://trustgrouz.com/wp-content/uploads/2023/03/package-white.png"><noscript><img src="wp-content/uploads/2023/03/package-white.png" alt="Доставка"></noscript></div>
                                    <div class="amo-new-text">
                                        <p class="amo-new-header">@lang('dil.Доставка')</p>
                                        <p class="amo-new-block">@lang('dil.Доставляем товар с полным контролем и отслеживанием на каждом этапе')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_hidden-xs">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="same-items">
                            <h2 class="tac pretty"><span>Наши работы</span></h2>
                            <div class="news-block"></div>
                            <div class="pretty-button"><a href="/our-projects/">Больше проектов</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm vc_hidden-xs">
                <div class="vc_column-inner vc_custom_1677659827357">
                    <div class="wpb_wrapper">
                        <p class="pretty h2"><span>Рассчитайте стоимость работ</span></p>
                        <div class="block-form">
                            <form id="front-form" accept-charset="utf-8" enctype="multipart/form-data" method="post">
                                <div class="half-form">
                                    <div class="main-info-form"> <input type="text" name="floar" placeholder="Город"> <input type="number" name="squear" placeholder="Площадь кровли"> <input type="text" name="user-name" placeholder="Ваше имя" required=""> <input type="tel" name="user-phone" placeholder="+375 (XX) XXX-XX-XX" required=""></div>
                                    <div class="project">
                                        <p class="doh-h">Ваш проект:</p>
                                        <p class="file-input"> <input type="file" name="file"> <span>Выбрать файл</span></p>
                                    </div>
                                    <div class="dop-service">
                                        <p class="doh-h">Дополнительно:</p>
                                        <div class="for-label"> <input type="checkbox" name="montazh-krovli" value="Монтаж кровли"> <span>Кровельные материалы</span></div>
                                        <div class="for-label"> <input type="checkbox" name="montazh-vodostoka" value="Водосточные системы"> <span>Водосточные системы</span></div>
                                    </div>
                                </div>
                                <div class="vid">
                                    <p class="doh-h w100 mb10">Вид крыши:</p>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Односкатная"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Односкатная" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame2.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame2.png" alt="Односкатная"></noscript> <span>Односкатная</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Двускатная"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Двускатная" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame3.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame3.png" alt="Двускатная"></noscript> <span>Двускатная</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Плоская"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Плоская" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame4.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame4.png" alt="Плоская"></noscript> <span>Плоская</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Вальмовая"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Вальмовая" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame5.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame5.png" alt="Вальмовая"></noscript> <span>Вальмовая</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Полувальмовая"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Полувальмовая" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame6.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame6.png" alt="Полувальмовая"></noscript> <span>Полувальмовая</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Многоскатная"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Многоскатная" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame7.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame7.png" alt="Многоскатная"></noscript> <span>Многоскатная</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Шатровая"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Шатровая" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame8.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame8.png" alt="Шатровая"></noscript> <span>Шатровая</span></div>
                                    <div class="for-vid"> <input type="radio" name="vid" value="Мансардная"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Мансардная" data-lazy-src="/wp-content/themes/montazh-theme/img/vid/Frame9.png"><noscript><img src="wp-content/themes/montazh-theme/img/vid/Frame9.png" alt="Мансардная"></noscript> <span>Мансардная</span></div>
                                </div>
                                <div class="for-sub"> <input type="submit" value="Рассчитать"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
