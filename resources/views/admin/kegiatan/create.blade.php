@extends('admin.layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="h2">Buat Data Kegiatan Baru </h1>
        <div class="col-lg-8">

            <form action="/dashboard/kegiatan/" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama" name="nama" autofocus autocomplete="off" required>
                    <div class="form-text">Cie Mau mi Mubes Baru Ma input</div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control disabled" id="slug" name="slug" disabled readonly >
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Divisi</label>
                    <select class="form-select" name="divisi_id">
                        {{-- <option selected>Open this select menu</option> --}}
                        @foreach ($divisi as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Teks</label>
                    <input id="body" type="hidden" name="body" required>
                    <trix-editor input="body"></trix-editor>
                    <div class="form-text">Kasih rapihki caramu menulis pakai tanda baca yang benar dan gunakan paragraf dan huruf tebal cuk</div>


                </div>


                <button type="submit" class="btn btn-sm btn-primary">Gaskan</button>
            </form>

        </div>
        <script>
            const title = document.querySelector("#nama");
            const slug = document.querySelector("#slug");

            title.addEventListener("keyup", function() {
                let preslug = title.value;
                preslug = preslug.replace(/ /g, "-");
                slug.value = preslug.toLowerCase();
            });
            document.addEventListener('trix-file-accept', function(e){
                e.preventDefault();
            })
        </script>
    @endsection
