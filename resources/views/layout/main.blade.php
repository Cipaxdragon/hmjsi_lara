<!DOCTYPE html>
<html lang="ID">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&is=65633c95&hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&" type="image/x-icon">
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\boostrap\css\bootstrap.css">
  </head>
  <body>
    @include('partials.navbar')
      <div class="container-fluid">
          @yield('container')
    </div>
    <?php for ($i=1; $i < 30 ; $i++) {
        echo "<br>";
    }?>
    @include('partials.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>
