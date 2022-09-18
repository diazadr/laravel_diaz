<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="https://i.pinimg.com/originals/00/57/e6/0057e6e8eef771ce6b160d981dc038bc.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">

                  @if ($message = Session::get('sukses'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong style="font-size: 14px">{{ $message }}</strong>
            </div>
            @endif

            <h4 class="text-dark font-weight-normal">Selamat Datang di<span class="font-weight-bold"> DATABASE SMKN 2</span></h4>
            <p class="text-muted">Sebelum memulai, anda harus masuk atau mendaftar jika anda belum memiliki akun</p>

            <form method="POST" action="/authlogin" class="needs-validation" novalidate="">
              @csrf
              @if ($message = Session::get('message'))
                <div class="alert alert-warning alert-block" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                  <strong style="font-size: 14px">{{$message}}</strong>
                </div>
              @endif


              <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="name" class="form-control" name="name" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Tolong Isi Nama
                </div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="2" required autofocus>
                <div class="invalid-feedback">
                  Tolong Isi Email Dengan Benar
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Kata Sandi</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="3" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="4" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                </div>
              </div>

              <div class="form-group text-right">
                <a href="/forgot" class="float-left mt-3">
                  Lupa Kata Sandi ?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Masuk
                </button>
              </div>

              <div class="mt-5 text-center">
                Tidak memiliki akun? <a href="/addReg">Buat akun</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; RPL 1 Dibuat 💙 oleh Diaz Adriansyah
              <div class="mt-2">
                <a href="#">Privacy Diaz</a>
                <div class="bullet"></div>
                <a href="#">Syarat Layanan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="https://images.unsplash.com/photo-1524860769472-246b6afea403?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Selamat Datang</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bandung, Indonesia</h5>
              </div>
              Foto oleh <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Diaz Adriansyah</a> di <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>