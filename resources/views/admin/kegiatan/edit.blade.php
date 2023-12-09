@extends('admin.layout.main')
@section('container')
    <div class="container mt-2">
        <h1 class="h2">Buat Data Kegiatan Baru </h1>
        <form action="/dashboard/kegiatan/{{ $kegiatan->slug }}" method="POST">
            @method('put')
            <div class="row">
                <div class="col-lg-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Edit Nama Kegiatan</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama"
                            name="nama" autofocus autocomplete="off" value="{{ old('nama') ?? $kegiatan->nama }}"
                            required>
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
                            id="slug" name="slug" value="{{ old('slug') ?? $kegiatan->slug }}" readonly>
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
                                @if ($kegiatan->divisi_id === $item->id)
                                    <option value="{{ $item->id }}" selected="{{ $kegiatan->divisi_id }}">
                                        {{ $item->nama }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control @error('gambar') is-invalid @enderror " id="gambar"
                            name="gambar" autofocus autocomplete="off" value="{{ old('name') }}" required>
                        @error('gambar')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-text">link gambar mo biar nda na sessai server</div>
                    </div> --}}
                    <div class="mb-3">
                        <label for="slug" class="form-label">Punya Galery?</label>
                        <select class="form-select" name="galery_id">
                            <option value="">tidak ada </option>
                            @foreach ($galery as $item)
                                @if ($item->kegiatan->nama !== null)
                                    <option value="{{ $item->id }}"> Galery {{ $item->kegiatan->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Kegiatan</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            value="{{ old('tanggal') ?? $kegiatan->tanggal }}" required>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="body_text" class="form-label">Teks</label>
                        <input id="body_text" type="hidden" name="body_text"
                            value="{{ old('body_text') ?? $kegiatan->body_text }}">
                        @error('body_text')
                            <p class="text-danger">
                                Harus di isi ini text kodong
                            </p>
                        @enderror
                        <trix-editor input="body_text"></trix-editor>

                        <div class="form-text">Kasih rapihki caramu menulis pakai tanda baca yang benar dan gunakan paragraf
                            dan huruf tebal cuk</div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Gaskan Edit</button>

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
