<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Zay Shop - About Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/templatemo.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.min.css" /> -->
  </head>

  <body>
    <!-- Header -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand align-items-center" href="#">BOOKSWORLD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav d-flex justify-content-center">
            <li class="nav-item">
              <a href="#hero" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link text-white">Book</a>
            </li>
          </ul>
          <div class="get ms-auto">
            <a href="{{ route('register') }}" class="text-decoration-none">
                <button type="button" class="btn button-1">Daftar</button>
            </a>
            <a href="{{ route('login') }}" class="text-decoration-none">
                <button type="button" class="btn button-2">Masuk</button>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Close Header -->

    <section id="hero" style="background-image: url('/assets/img/bg-jumbot.png'); background-size: cover; padding-top: 15rem; padding-bottom: 15rem">
      <div class="container">
        <div class="row" style="justify-content: center; align-items: center">
          <div class="col-lg-6 text-center text-light">
            <h2 data-aos="fade-down" style="font-weight: 600">Welcome to <span>BOOKS WORLD</span></h2>
            <p data-aos="fade-up" style="font-weight: 500">Books World adalah sebuah platform yang berkaitan dengan buku dan literatur. Di sini, pengguna dapat menemukan berbagai jenis buku, dan mendapatkan rekomendasi.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="{{ route('login') }}" class="btn button-3">MULAI</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section id="service" class="container py-5">
      <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Service</h1>
          <p class="mt-3">Books World menyediakan berbagai layanan terkait buku dan literatur. Beberapa layanan yang ditawarkan oleh Books World</p>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-6 col-lg-3 pb-5">
          <div class="h-100 py-5 services-icon-wap shadow">
            <div class="h1 text-center"><i class="fa-solid fa-book"></i></div>
            <h2 class="h5 mt-4 text-center">Delivery Services</h2>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
          <div class="h-100 py-5 services-icon-wap shadow">
            <div class="h1 text-center"><i class="fa-solid fa-bookmark"></i></div>
            <h2 class="h5 mt-4 text-center">Recommand Books</h2>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
          <div class="h-100 py-5 services-icon-wap shadow">
            <div class="h1 text-center"><i class="fa fa-user"></i></div>
            <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->

    <!-- Start Brands -->
    <section id="book" class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Books Recommended</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet.</p>
            </div>
            </div>
            <div class="row">
            @foreach($buku as $bk)
            <div class="col-lg-3">
                <div class="product-card position-relative">
                    <div class="image-holder">
                        <img src="{{ asset('images/buku/'.$bk->image) }}" alt="product-item" class="img-fluid">
                    </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-2">
                    <h3 class="h5 card-title text-decoration-none mb-1">
                        <a href="#" class="text-decoration-none" style="color: black;">{{ $bk->judul_buku }}</a>
                    </h3>
                </div>
                    <div class="">
                        <p class="mb-1">{{ $bk->pengarang }}</p>
                        @if ($bk->jumlah > 0)
                            <form action="{{ route('addtocart', $bk->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart <i class="fa-sharp fa-solid fa-basket-shopping"></i></button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- End Brands -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class="h2 text-white pb-3 logo">BOOKSWORLD</h2>
            <ul class="list-unstyled text-light footer-link-list">
              <li>  
                <i class="fas fa-map-marker-alt fa-fw"></i>
                Perpustakaan universitas di Jember, Jawa Timur
              </li>
            </ul>
          </div>

        <div class="row text-light mb-4">
          <div class="col-auto ms-auto">
            <ul class="list-inline text-left footer-icons">
              <li class="list-inline-item">
                <a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="http://fb.com/templatemo"><i class="fa-brands fa-facebook fa-xl"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-xl"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://kit.fontawesome.com/0aaed5ac2e.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/templatemo.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <script>
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    <!-- End Script -->
  </body>
</html>

