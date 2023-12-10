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
        <h1 class="mb-2">Data Kritik  </h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="fa fa-archive text-primary h4 ml-3"></i>
                        </div>

                        <h5 class="font-size-20 mt-0 pt-1">{{ App\Models\kritik::count() }}</h5>

                        <p class="text-muted mb-0">Total Kritik </p>
                    </div>
                </div>
            </div>
        </div>
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
                                        <th scope="col">Nama</th>
                                        <th scope="col">email</th>
                                        <th scope="col">teks</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kritik as $item)

                                        <tr>
                                            <th scope="row">{{ $item->id }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                {{ $item->teks }}
                                            </td>
                                            <td class="text-nowrap">
                                            <form action="/dashboard/kritik/{{ $item->id}}" method="POST" class="d-inline">
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

                        {{-- <div class="pt-3">
                            <ul class="pagination justify-content-end mb-0">
                                @if ($kritik->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link" tabindex="-1" aria-disabled="true">Previous</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kritik->previousPageUrl() }}" tabindex="-1">Previous</a>
                                    </li>
                                @endif

                                @foreach ($kritik->getUrlRange(1, $kritik->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $kritik->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                @if ($kritik->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $kritik->nextPageUrl() }}">Next</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link" tabindex="-1" aria-disabled="true">Next</span>
                                    </li>
                                @endif
                            </ul>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
