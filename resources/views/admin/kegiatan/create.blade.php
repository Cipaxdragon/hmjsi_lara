@extends('admin.layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="h2">Buat Data Kegiatan Baru </h1>
        <form action="/dashboard/kegiatan/" method="POST">
            <div class="row">
                <div class="col-lg-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama"
                            name="nama" autofocus autocomplete="off" value="{{ old('name') }}" required>
                        @error('nama')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-text">Cie Mau mi Mubes Baru Ma input</div>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control disabled @error('slug') is-invalid @enderror"
                            id="slug" name="slug" readonly>
                        @error('slug')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Divisi</label>
                        <select class="form-select" name="divisi_id">
                            {{-- <option selected>Open this select menu</option> --}}
                            @foreach ($divisi as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Kegiatan</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            value="{{ old('tanggal') }}" required>

                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="body_text" class="form-label">Teks</label>
                        <input id="body_text" type="hidden" name="body_text" value="{{ old('body_text') }}">
                        @error('body_text')
                            <p class="text-danger">
                                Harus di isi ini text kodong
                            </p>
                        @enderror
                        <trix-editor input="body_text"></trix-editor>

                        <div class="form-text">Kasih rapihki caramu menulis pakai tanda baca yang benar dan gunakan paragraf
                            dan huruf tebal cuk</div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Gaskan</button>

                </div>

            </div>
        </form>
        <script>
            const title = document.querySelector("#nama");
            const slug = document.querySelector("#slug");

            title.addEventListener("keyup", function() {
                let preslug = title.value;
                preslug = preslug.replace(/ /g, "-");
                slug.value = preslug.toLowerCase();
            });
            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })
        </script>
    @endsection
