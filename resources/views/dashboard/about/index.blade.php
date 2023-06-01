@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Haqqımızda səhifəsi <b style="color:darkred;">Vacib Qeyd : Məlumatların hər 3 dildə doldurulması məcburidir.</b></h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('admin.about.update')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <br>

                                        <!-- Default Tabs -->
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Polyak Dili</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">İngilis Dili</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Rus Dili</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-2" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                                <div class="col-md-12">
                                                    <label for="inputEmail5" class="form-label">Başlıq <b style="color: red">Pl</b></label>
                                                    <input type="text" class="form-control" name="title_pl" required value="{{$about->title_pl}}" >
                                                </div>

                                                <br><br>

                                                <div class="col-md-12">
                                                    <label for="inputEmail5" class="form-label">Ətraflı mətn <b style="color: red">Pl</b></label>
                                                    <textarea class="form-control" required name="description_pl" id="editor">{!! $about->description_pl !!}</textarea>

                                                </div>

                                            </div>


                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                                <div class="col-md-12">
                                                    <label for="inputEmail5" class="form-label">Başlıq <b style="color: red">En</b></label>
                                                    <input type="text" class="form-control" name="title_en" required value="{{$about->title_en}}" >
                                                </div>

                                                <br><br>

                                                <div class="col-md-12">
                                                    <label for="inputEmail5" class="form-label">Ətraflı mətn <b style="color: red">En</b></label>
                                                    <textarea class="form-control" required name="description_en" id="editor1">{!! $about->description_en !!}</textarea>

                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                                <div class="col-md-12">
                                                    <label for="inputEmail5" class="form-label">Başlıq <b style="color: red">Ru</b></label>
                                                    <input type="text" class="form-control" name="title_ru" required value="{{$about->title_ru}}" >
                                                </div>

                                                <br><br>

                                                <div class="col-md-12">
                                                    <label for="inputEmail5" class="form-label">Ətraflı mətn <b style="color: red">Ru</b></label>
                                                    <textarea class="form-control" required name="description_ru" id="editor2">{!! $about->description_ru !!}</textarea>

                                                </div>

                                            </div>
                                        </div><!-- End Default Tabs -->

                                    </div>
                                </div>





                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Yadda saxla</button>
                                </div>
                            </form><!-- End Multi Columns Form -->









                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main --
@endsection
