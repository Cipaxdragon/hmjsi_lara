@extends('admin.layout.main')

@section('container')

<div class="container mt-2">
<h1 class="h2">Kegiatan </h1>
<a href="/dashboard/kegiatan/create" class="btn btn-sm  btn-primary my-2">Tambahkan Kegiatan</a>
<div class="table-responsive small ">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kegiatan</th>
          <th scope="col">Divisi</th>
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
          <td>{{ $item->tanggal }}</td>
          <td>
            <a href="/dashboard/kegiatan/{{ $item->slug }}" class="badge bg-primary"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/kegiatan/{{ $item->slug }}" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
            <a href="/dashboard/kegiatan/{{ $item->slug }}" class="badge bg-danger"><i class="bi bi-trash"></i></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
@endsection
