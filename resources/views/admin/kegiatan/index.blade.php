@extends('admin.layout.main')

@section('container')
    <style>
        body {
            background: #f3f3f3;
            color: #000000;
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
    <div class="container mt-2">
        <h1 class="mb-2">Data Kegiatan  </h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>

                        <h5 class="font-size-20 mt-0 pt-1">{{ App\Models\Kegiatan::count() }}</h5>

                        <p class="text-muted mb-0">Total Kegiatan </p>
                    </div>
                </div>
            </div>


        </div>
        <a href="/dashboard/kegiatan/create" class="btn btn-sm  btn-primary my-2">Tambahkan Kegiatan</a>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive project-list">
                            <table class="table project-table table-centered table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Galery</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatan as $item)

                                        <tr>
                                            <th scope="row">{{ $item->id }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>
                                                {{ $item->divisi->nama }}
                                            </td>
                                            <td>
                                                @if ($item->gambar)
                                                <div class="" style="width: 50px;">
                                                    @if($item->isImageURL($item->gambar))
                                                        <img src="{{ $item->gambar }}" alt="" class="w-100 img-thumbnail ">
                                                    @else
                                                        <img src="{{ asset('storage/'.$item->gambar)  }}" alt="" class="w-100 img-thumbnail ">
                                                    @endif
                                                </div>
                                            @else
                                                tidak ada gambar
                                            @endif
                                            </td>
                                            <td>
                                                {{ $item->galery->count() }} foto
                                            </td>

                                            <td class="text-nowrap">
                                                <a href="/dashboard/kegiatan/{{ $item->slug }}" class="badge bg-primary"><i
                                                    class="bi bi-eye"></i></a>
                                            <a href="/dashboard/kegiatan/{{ $item->slug }}/edit" class="badge bg-warning"><i
                                                    class="bi bi-pencil"></i></a>
                                            <form action="/dashboard/kegiatan/{{ $item->slug}}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0 " onclick="return confirm('seriusko moko hapus ki?') " ><i class="bi bi-trash"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- end project-list -->

                        <div class="pt-3">
                            <ul class="pagination justify-content-end mb-0">
                                @if ($kegiatan->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link" tabindex="-1" aria-disabled="true">Previous</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatan->previousPageUrl() }}" tabindex="-1">Previous</a>
                                    </li>
                                @endif

                                @foreach ($kegiatan->getUrlRange(1, $kegiatan->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $kegiatan->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                @if ($kegiatan->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kegiatan->nextPageUrl() }}">Next</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link" tabindex="-1" aria-disabled="true">Next</span>
                                    </li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
