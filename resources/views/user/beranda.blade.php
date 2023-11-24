
@extends('layout.main')

@section('container')

<div class="container  ">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>

  {{-- //visi misi --}}
  <hr>
  <div class="container px-4 py-5" id="hanging-icons">
    <h1 class="pb-2
     text-center">Visi Misi</h1>
    <div class="row g-5 py-5 row-cols-1 row-cols-lg-3 justify-content-center">
      <div class="col  d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Visi</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>

      <div class="col d-flex justify-content-center  align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Misi</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- //info penting --}}
  <div class="container my-5">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
      {{-- <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button> --}}
      <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"></use></svg>
      <h1 class="text-body-emphasis">Placeholder jumbotron</h1>
      <p class="col-lg-6 mx-auto mb-4">
        This faded back jumbotron is useful for placeholder content. It's also a great way to add a bit of context to a page or section when no content is available and to encourage visitors to take a specific action.
      </p>
      <button class="btn btn-primary px-5 mb-5" type="button">
        Call to action
      </button>
    </div>
  </div>

@endsection
