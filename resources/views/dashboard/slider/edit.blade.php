@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Slider redakt et</h5>



                            <!-- General Form Elements -->
                            <form action="{{route('admin.slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3" >
                                    <label for="inputText" class="col-sm-2 col-form-label">Title Pl</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_pl" class="form-control" value="{{$slider->title_pl}}">
                                        <br>

                                    </div>

                                    <div class="row mb-3" >
                                        <label for="inputText" class="col-sm-2 col-form-label">Title En</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title_en" class="form-control" value="{{$slider->title_en}}">
                                            <br>

                                        </div>

                                        <div class="row mb-3" >
                                            <label for="inputText" class="col-sm-2 col-form-label">Title Ru</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title_ru" class="form-control" value="{{$slider->title_ru}}">
                                                <br>

                                            </div>


                                            <div class="row mb-3" >
                                                <label for="inputText" class="col-sm-2 col-form-label">Descrition Pl</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="description_pl" class="form-control" value="{{$slider->description_pl}}">
                                                    <br>

                                                </div>

                                                <div class="row mb-3" >
                                                    <label for="inputText" class="col-sm-2 col-form-label">Descrition En</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="description_en" class="form-control" value="{{$slider->description_en}}">
                                                        <br>

                                                    </div>


                                                    <div class="row mb-3" >
                                                        <label for="inputText" class="col-sm-2 col-form-label">Descrition RU</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="description_ru" class="form-control" value="{{$slider->description_ru}}">
                                                            <br>

                                                        </div>


                                    <label for="inputText" class="col-sm-2 col-form-label">Şəkil</label>
                                    <div class="col-sm-10">
                                        <img style="width: 100px;" src="{{asset('back/'.$slider->image)}}" alt="">
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                </div>


                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Yadda saxla</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
