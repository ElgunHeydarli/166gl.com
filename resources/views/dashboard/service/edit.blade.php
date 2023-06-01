@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Xidmət redakt et</h5>

                            <!-- General Form Elements -->
                            <form action="{{route('admin.service.update', $service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


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
                                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Rus dili</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-2" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                                <div class="row mb-3" >
                                                    <label for="inputText" class="col-sm-2 col-form-label">Başlıq Pl</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name_pl" class="form-control" value="{{$service->name_pl}}">
                                                        <br>
                                                    </div>

                                                    <label for="inputText" class="col-sm-2 col-form-label">Ətraflı mətn Pl</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_pl" id="editor" >{{$service->description_pl}}</textarea>

                                                        <br>
                                                    </div>



                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                                <div class="row mb-3" >
                                                    <label for="inputText" class="col-sm-2 col-form-label">Başlıq En</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name_en" class="form-control" value="{{$service->name_en}}">
                                                        <br>
                                                    </div>

                                                    <label for="inputText" class="col-sm-2 col-form-label">Ətraflı mətn En</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_en" id="editor1" >{{$service->description_en}}</textarea>

                                                        <br>
                                                    </div>



                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <div class="row mb-3" >
                                                    <label for="inputText" class="col-sm-2 col-form-label">Başlıq Ru</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name_ru" class="form-control" value="{{$service->name_ru}}">
                                                        <br>
                                                    </div>

                                                    <label for="inputText" class="col-sm-2 col-form-label">Ətraflı mətn Ru</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_ru" id="editor2" >{{$service->description_ru}}</textarea>

                                                        <br>
                                                    </div>



                                                </div>
                                            </div>
                                        </div><!-- End Default Tabs -->

                                    </div>
                                </div>

                                <div class="row mb-3" >

                                    <label for="inputText" class="col-sm-2 col-form-label">Şəkil</label>
                                    <div class="col-sm-10">
                                        <img style="width: 100px;" src="{{asset('back/'.$service->image)}}" alt="">
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
