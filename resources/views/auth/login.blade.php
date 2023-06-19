<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login to BooksWorld</title>
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('/login_regist/style.css')}}" />
  </head>
  <body>
    <section class="">
      <!-- Jumbotron -->
      <div class="text-center text-lg-start" style="background-color: hsl(0, 0%, 96%); padding-top: 80px; padding-bottom: 80px">
        <div class="container">
          <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h1 class="my-3 display-3 fw-bold ls-tight">
                Welcome To <br />
                <span style="color: #227c9d">Books World</span>
              </h1>
              <p style="color: hsl(217, 10%, 50.8%)">
                Books World adalah sebuah platform yang berkaitan dengan buku dan literatur. Di sini, pengguna dapat menemukan berbagai jenis buku, membaca ulasan, dan mendapatkan rekomendasi. Books World adalah tempat bagi para pecinta buku untuk
                terhubung dan mengeksplorasi dunia literatur secara online.
              </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="card shadow">
                <div class="card-body p-5 text-center">
                  <h3 class="mb-5">Login</h3>
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
  
                    <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" id="password" required>
                    </div>
  
                    <div class="form-check d-flex justify-content-start mb-4">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                      <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>
  
                    <button class="btn" type="submit">Login</button>
  
                    <div class="text-center mt-3">
                      <a class="small text-decoration-none" href="#" style="color: #227c9d7c; font-weight: 400">Lupa Password?</a>
                    </div>
                    <div class="text-center mt-2">
                      <a class="small text-decoration-none" href="{{ route('register') }}" style="color: #227c9d; font-weight: 500">Buat Akun!</a>
                    </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
