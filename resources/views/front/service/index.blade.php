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
<div class="container">
    <h1 class="pretty"><span>@lang('dil.Услуги')</span></h1>
    <div class="category-list">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <img src="{{asset('back/'.$service->image)}}" />
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

      </div>
    <div class="navigator w100 mt40 mb40 flex-wrap jcc"></div>
    <div class="content mb40"></div>
</div>
@endsection
