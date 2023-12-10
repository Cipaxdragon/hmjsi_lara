@extends('admin.layout.main')
@section('container')

<h1>Edit Pengumuan</h1>
<p>Gunakan FrameWork Boostrap</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Tampillan Pengumuman</div>

                <div class="card-body">
                    <form action="/dashboard/pengumuman/{{ $pengumuman->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code">HTML Content</label>
                            <textarea class="form-control" id="code" name="code" rows="12">{{ $pengumuman->code }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Yakin Edit Ini Akan Mengganti Section Pengumuman Yang Terdapat Di Beranda') " >Gaskan Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <h3>Tampilan Sebelumnya</h3>
    <section>
        {!!$pengumuman->code!!}
    </section>
</div>


@endsection
