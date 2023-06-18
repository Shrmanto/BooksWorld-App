<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar to BooksWorld</title>
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
              <div class="card shadow">
                <div class="card-body p-5 text-center">
                  <h3 class="mb-5">Daftar</h3>
                  <form action="{{ route('register-user') }}" method="POST">
                  @csrf
                  <div class="form-outline mb-4">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-outline mb-4">
                        <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-outline mb-4">
                        <input id="no_handphone" type="no_handphone" class="form-control @error('no_handphone') is-invalid @enderror" placeholder="no. hp" name="no_handphone" value="{{ old('no_handphone') }}" required autocomplete="no_handphone">

                        @error('no_handphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                  </div>

                  <button class="btn" type="submit">Daftar</button>

                  <div class="text-center mt-3">
                    <a class="small text-decoration-none" href="#" style="color: #227c9d; font-weight: 500">Punya Akun!</a>
                  </div>
                  </form>
                </div>
              </div>
            </div>
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
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
