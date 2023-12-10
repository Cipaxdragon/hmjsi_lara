@extends('admin.layout.main')

@section('container')
<section>
    <div class="container mt-5">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Galery</h3>
        <div class="gallery-container ">
            @foreach ($galeri as $galeri)
            {{$galeri->link}}
            @endforeach
        </div>

    </div>
</section>
@endsection
