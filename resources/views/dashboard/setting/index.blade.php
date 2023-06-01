@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>


                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('admin.settings.update')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Sayt başlığı</label>
                                    <input type="text" class="form-control" name="title" value="{{$setting->title}}" >
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$setting->email}}" >
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Əlaqə nömrəsi</label>
                                    <input type="text" class="form-control" name="phone" value="{{$setting->phone}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">İş saatı</label>
                                    <input type="text" class="form-control" name="issaati" value="{{$setting->issaati}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Ünvan (Pl Dili)</label>
                                    <input type="text" class="form-control" name="adress_pl" value="{{$setting->adress_pl}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Ünvan (En Dili)</label>
                                    <input type="text" class="form-control" name="adress_en" value="{{$setting->adress_en}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Ünvan (Ru Dili)</label>
                                    <input type="text" class="form-control" name="adress_ru" value="{{$setting->adress_ru}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{$setting->linkedin}}">
                                </div>


                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$setting->instagram}}">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">Whatshapp</label>
                                    <input type="text" class="form-control" name="whatshapp" value="{{$setting->whatshapp}}">
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
