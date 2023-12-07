<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon"
    href="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&amp;is=65633c95&amp;hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&amp;"
    type="image/x-icon">
    <!-- Menggunakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Menambahkan gaya khusus jika diperlukan */
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
        .login-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-icon img {
            width: 100px; /* Sesuaikan ukuran ikon sesuai kebutuhan */
            height: auto;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-8">
            <div class="login-icon">
                <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&amp;is=65633c95&amp;hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&amp;" alt="Logo">
            </div>
            <form action="/register" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

                <div class="form-floating mb-1">
                  <input type="text" class="form-control  @error('name') is-invalid @enderror " autocomplete="off" id="floatingInput" name="name"  placeholder="name@example.com" value="{{ old('name') }}">
                  <label for="floatingInput">nama</label>
                  @error('name')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating mb-1">
                  <input type="text" class="form-control @error('username') is-invalid @enderror  " autocomplete="off"   id="floatingInput" name="username" placeholder="name@example.com" value="{{ old('username') }}">
                  <label for="floatingInput">Username</label>
                  @error('username')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating mb-1">
                  <input type="email" class="form-control @error('email') is-invalid @enderror " autocomplete="off"  id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" >
                  <label for="floatingInput">Email</label>
                  @error('email')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-floating">
                  <input type="password" class="form-control @error('password') is-invalid @enderror " autocomplete="off"  name="password" id="floatingPassword" placeholder="Password" value="{{ old('password') }}">
                  <label for="floatingPassword">Password</label>
                  @error('password')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-check text-start ">
                  <!-- {{-- <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault"> --}}
                  {{-- <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label> --}} -->
                </div>
                <button class="btn btn-primary w-100 py-2" name="submit" type="submit">LOGIN</button>
              </form>
        </div>
    </div>
</div>

<!-- Menggunakan Bootstrap JS dan Popper.js (diperlukan untuk beberapa komponen Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
