@extends('admin.layout.main')

@section('container')

    <div class="container mt-2">
        <h1 class="h2">Kegiatan </h1>
        <a href="/dashboard/kegiatan/create" class="btn btn-sm  btn-primary my-2">Tambahkan Kegiatan</a>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
        <div class="table-responsive small ">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Galery</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kegiatan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->divisi->nama }}</td>
                            <td>
                                @if ($item->galery_id === null)
                                    tidak memakai galery
                                @else
                                    {{ $item->galery->count() }} foto
                                @endif
                            </td>
                            <td>
                                @if ($item->gambar)
                                    <div class="" style="width: 50px;">
                                        <img src="{{ $item->gambar }}" alt="" class="w-100 img-thumbnail ">
                                    </div>
                                @else
                                    tidak ada gambar
                                @endif
                            </td>
                            <td>{{ $item->tanggal }}</td>
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

    </div>
@endsection
