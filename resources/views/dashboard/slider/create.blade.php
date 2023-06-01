@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Slider əlavə et</h5>



                            <!-- General Form Elementsd-->
                            <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3" >
                                    <label for="inputText" class="col-sm-2 col-form-label">Title Pl</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_pl" class="form-control">
                                        <br>

                                    </div>

                                    <div class="row mb-3" >
                                        <label for="inputText" class="col-sm-2 col-form-label">Title En</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title_en" class="form-control">
                                            <br>

                                        </div>


                                        <div class="row mb-3" >
                                            <label for="inputText" class="col-sm-2 col-form-label">Title Ru</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title_ru" class="form-control">
                                                <br>

                                            </div>



                                            <div class="row mb-3" >
                                                <label for="inputText" class="col-sm-2 col-form-label">Description Pl</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="description_pl" class="form-control">
                                                    <br>

                                                </div>


                                                <div class="row mb-3" >
                                                    <label for="inputText" class="col-sm-2 col-form-label">Description En</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="description_en" class="form-control">
                                                        <br>

                                                    </div>


                                                    <div class="row mb-3" >
                                                        <label for="inputText" class="col-sm-2 col-form-label">Description Ru</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="description_ru" class="form-control">
                                                            <br>

                                                        </div>


                                            <label for="inputText" class="col-sm-2 col-form-label">Şəkil</label>
                                    <div class="col-sm-10">
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
