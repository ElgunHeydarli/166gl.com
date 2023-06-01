@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a style="float: right; position: relative; top: 30px;" class="btn btn-success float-right" href="{{route('admin.slider.create')}}">Slider əlavə et</a>

                            <h5 class="card-title">Slider səhifəsi</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Ətraflı mətn</th>
                                    <th scope="col">Şəkil</th>
                                    <th scope="col">Əməliyyat</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <th>{{$slider->id}}</th>
                                        <th>{{$slider->title_ru}}</th>
                                        <th>{{\Illuminate\Support\Str::limit($slider->description_ru,100)}}</th>
                                        <td> <img style="width: 100px;" src="{{asset('back/'.$slider->image)}}" alt=""></td>
                                        <td style="display: inline-flex;">
                                            <a class="btn btn-primary" href="{{route('admin.slider.edit',$slider->id)}}"> Redakt et</a>

                                            <form action="{{route('admin.slider.destroy', $slider->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('silmək isdədiyinizdən əminsinizmi?')"   type="submit" class="btn btn-danger">Sil</button>

                                            </form>

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>



                </div>

            </div>
        </section>

    </main>
@endsection
