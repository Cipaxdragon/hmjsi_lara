@extends('admin.layout.main')

@section('container')
    <div class="container mt-2">
        <h1 class="h2">Tambah Foto Baru </h1>
        <form action="/dashboard/galeri/" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Foto</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " placeholder="bisa kosong" id="nama"
                            name="nama" autofocus autocomplete="off" value="{{ old('name') }}" >
                        @error('nama')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Kegiatan</label>
                        <select class="form-select" name="divisi_id">
                            {{-- <option selected>Open this select menu</option> --}}
                            <option value="NULL">tidak ada</option>
                            @foreach ($kegiatan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="col-lg-8">

                    <div class="mb-3">
                        <img src="" class="img-preview img-fluid mt-3 col-sm-6  rounded-3 " alt="">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                            name="gambar"  value="{{ old('gambar') }}" onchange="previewImage()">
                        @error('gambar')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                @if ($message === "field gambar harus di isi ges")
                                    Gambar Harus di Isi
                                @elseif ($message === "The gambar must be an image.")
                                    Harus Gambar Cuk
                                @else
                                    {{$message}}
                            @endif
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">link Gambar</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" " placeholder="https://....png"
                            name="link" autofocus autocomplete="off"  >
                        <div class="form-text">Jika Malas Upload Gambar File Bisa Juga kirim link gambar (yang mengarah langsung) </div>
                        @error('link')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{$message}}
                        </div>
                        @enderror
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

            function previewImage() {
                const image = document.querySelector('#link');
                const imgPreview = document.querySelector('.img-preview');

                if (image.files.length > 0) {
                    imgPreview.style.display = 'block';
                    const oFReader = new FileReader();

                    oFReader.readAsDataURL(image.files[0]);
                    oFReader.onload = function(oFREvent) {
                        imgPreview.src = oFREvent.target.result;
                    }
                } else {
                    // Reset preview jika tidak ada berkas yang dipilih
                    imgPreview.style.display = 'none';
                    imgPreview.src = '';
                }
            }
        </script>
    @endsection
