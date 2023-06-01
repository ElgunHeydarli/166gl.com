@extends('front.layout.layout')
@section('content')
<div class="hero-block">
    <div class="container">
        <h1 class="pretty"><span>@lang('dil.О нас') @endlang</span></h1>
    </div>
</div>
<div class="main-single page-container">
    <div class="container">
        <h3>{{$about->title}}</h3>
        <p>{!! $about->description !!}</p>

    </div>
</div>

@endsection
