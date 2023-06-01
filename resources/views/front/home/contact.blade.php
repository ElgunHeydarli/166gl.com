@extends('front.layout.layout')
@section('content')
<div class="hero-block">
    <div class="container">
        <h1 class="pretty"><span>@lang('dil.Контакты')</span></h1>
    </div>
</div>
<div class="main-single mt40">
    <div class="container">
        <div class="row">
            <div class="flex-wrap aic contacts">
                <div class="col-lg-7 col-xs-12">
                    <div class="cont-info-half">
                        <div class="phones">
                            <p class="cont-header"><i class="fa fa-phone" aria-hidden="true"></i> @lang('dil.Телефон') @endlang:</p> <a href="tel:+{{$settings->phone}}">{{$settings->phone}}</a>
                        </div>
                    </div>
                    <div class="cont-info-half">
                        <div class="top-adres">
                            <p class="cont-header"><i class="fa fa-map-marker" aria-hidden="true"></i> @lang('dil.Адрес офиса'):</p>{{$settings->adress}}
                        </div>
                    </div>
                    <div class="cont-info-half">
                        <div class="top-time">
                            <p class="cont-header"><i class="fa fa-clock-o" aria-hidden="true"></i> @lang('dil.Время работы'):</p>
                            <p>
                            <p style="text-align: left;">{{$settings->issaati}}</p>
                        </div>
                    </div>
                    <div class="cont-info-half">
                        <div class="top-time">
                            <p class="cont-header"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail:</p>
                            <p> {{$settings->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.50763635911!2d49.85454067657476!3d40.37544045815045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307db51ff5b667%3A0x1ff2b4e06eedef35!2zMTY2IFnDvGtkYcWfxLFtYSB2yZkgTG9naXN0aWth!5e0!3m2!1sru!2saz!4v1685507235722!5m2!1sru!2saz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    <br><br>
</div>
@endsection
