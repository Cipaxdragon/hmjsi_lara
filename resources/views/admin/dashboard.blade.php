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
                        <h5 class="font-size-20 mt-0 pt-1">{{ App\Models\Galery::count() }}</h5>
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
                        <h5 class="font-size-20 mt-0 pt-1">{{ App\Models\page::count() }}</h5>
                        <p class="text-muted mb-0">Jumlah Custom Halamam</p>
                    </div>
                </div>
            </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-comment text-primary h4 ml-3"></i>
                        </div>
                        <h5 class="font-size-20 mt-0 pt-1">{{ App\Models\Kritik::count() }}</h5>
                        <p class="text-muted mb-0">Jumlah Kritik</p>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="mt-5"> Info Highlight </h2>
        <div class="container  bg-white rounded padding ">
            <section>
                {!! App\Models\Pengumuman::latest()->first()->code ?? null !!}
            </section>
        </div>
        <!-- end row -->

        <!-- end row -->
    </div>
@endsection
