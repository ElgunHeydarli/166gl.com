@extends('front.layout.layout')
@section('content')
<div class="container">
    <h1 class="pretty"><span>{{$service->name}}</span></h1>
</div>
<div class="main-single mt40">
    <div class="container">
        <p>{!! $service->description !!}</p>
    </div>

</div>
@endsection
