@extends('admin.layout.main')

@section('container')
    <style>
        body {
            background: #f3f3f3;
            color: #616f80;
        }

        .card {
            border: none;
            margin-bottom: 24px;
            -webkit-box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
            box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
        }

        .avatar-xs {
            height: 2.3rem;
            width: 2.3rem;
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container mt-5">
        <h1 class="mb-2">Welcome {{ auth()->user()->name }} </h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{ App\Models\Kegiatan::count() }}</h5>

                        <p class="text-muted mb-0">Total Kegiatan</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-th text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">18</h5>
                        <p class="text-muted mb-0">Foto Galery </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-file text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">Halaman</h5>
                        <p class="text-muted mb-0">Jumlah Custom Halamam</p>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="mt-5"> Info Highlight </h2>

        <div class="container  bg-white rounded padding ">
            <section>
                <div class="container-fluid animated-element">
                    <div class="text-center bg-body-tertiary rounded-3">
                        <div class="container">
                            <div class="row">
                                <div
                                    class="col-lg-6 d-flex flex-column align-items-center justify-content-center order-lg-5  my-5 rounded ">
                                    <div class="container overflow-hidden " style="height: 400px;">
                                        <img src="https://source.unsplash.com/1920x1080?white"
                                            class="img-fluid h-100 object-fit-cover rounded-5" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center my-5">
                                    <h1 class="text-body-emphasis fw-bold">VSGA X HMJ</h1>
                                    <p class="col-lg-8 mx-auto fs-5 text-muted">
                                        This is a custom jumbotron featuring an SVG image at the top, some longer text that
                                        wraps
                                        early thanks to a responsive class, and a customized call to action.
                                    </p>
                                    <div class="d-inline-flex gap-2 ">
                                        <button
                                            class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill fs-6"
                                            type="button">
                                            Segara Daftarkan dirimu
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        <!-- end row -->

        <!-- end row -->
    </div>
@endsection
