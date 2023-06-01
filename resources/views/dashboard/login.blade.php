<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Daxil ol</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{asset('adminka/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{asset('adminka/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Daxil ol</h5>
                                    <p class="text-center small">Daxil olmaq üçün Email və Şifrəni qeyd edin</p>
                                </div>

                                <form class="row g-3 needs-validation" action="{{route('admin.login.submit')}}" method="post">

                                    @csrf

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Şifrə</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Daxil ol</button>
                                    </div>


                                    @if (session('danger'))
                                        <div style="color: red">
                                            {{ session('danger') }}
                                        </div>
                                    @endif



                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



</body>

</html>
