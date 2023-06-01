@extends('dashboard.layout.layout')
@section('content')
    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a style="float: right; position: relative; top: 30px;" class="btn btn-success float-right" href="{{route('admin.blog.create')}}">Xəbər əlavə et</a>

                            <h5 class="card-title">Xəbərlər</h5>


                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Ətraflı mətn</th>
                                    <th scope="col">Şəkil</th>
                                    <th scope="col">Əməliyyat</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <th>{{$blog->name_ru}}</th>
                                        <td>{!! Str::limit($blog->description_ru,50)  !!}</td>



                                        <td><img style="width: 100px;" src="{{asset('back/'.$blog->img)}}" alt=""></td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('admin.blog.edit',$blog->id)}}">Redakt et</a>
                                            <form style="display:inline;" action="{{route('admin.blog.destroy', $blog->id)}}" method="post">
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
