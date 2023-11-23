<!DOCTYPE html>
<html lang="ID">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMJ</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="boostrap\css\bootstrap.css">
  </head>
  <body>
    @include('partials.navbar')
      <div class="container mt-5">
          @yield('container')      
    </div>
    <?php for ($i=1; $i < 30 ; $i++) { 
        echo "<br>";
    }?>
    <footer class="bg-dark text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <h5>Bootstrap</h5>
              <p>Designed and built with all the love in the world by the Bootstrap team with the help of our contributors.</p>
              <p>Code licensed MIT, docs CC BY 3.0. Currently v5.3.2.</p>
            </div>
            <div class="col-md">
              <h5>Links</h5>
              <ul class="list-unstyled">
                <li><a class="text-light" href="#">Home</a></li>
                <li><a class="text-light" href="#">Docs</a></li>
                <li><a class="text-light" href="#">Examples</a></li>
                <li><a class="text-light" href="#">Icons</a></li>
                <!-- Tambahkan tautan lainnya sesuai kebutuhan -->
              </ul>
            </div>
            <div class="col-md">
              <h5>Projects</h5>
              <ul class="list-unstyled">
                <li><a class="text-light" href="#">Bootstrap 5</a></li>
                <li><a class="text-light" href="#">Bootstrap 4</a></li>
                <li><a class="text-light" href="#">Icons</a></li>
                <!-- Tambahkan proyek lainnya sesuai kebutuhan -->
              </ul>
            </div>
            <div class="col-md">
              <h5>Community</h5>
              <ul class="list-unstyled">
                <li><a class="text-light" href="#">Issues</a></li>
                <li><a class="text-light" href="#">Discussions</a></li>
                <li><a class="text-light" href="#">Corporate sponsors</a></li>
                <!-- Tambahkan komunitas lainnya sesuai kebutuhan -->
              </ul>
            </div>
          </div>
        </div>
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>