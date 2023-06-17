@extends('peminjamMain.home.index')

@section('content')
<div id="main" class="mx-auto">
    <div class="mb-3">
        <!-- <div class="row">
            <div class="col-lg-12" style="background-color: white;"> -->
            <div class="row mb-4">
                <div class="col-lg-5 mt-5">
                    <div class="card-body mb-3" style="background-color: white;">
                        <img class="img-fluid" src="{{ asset('images/buku/'.$buku->image) }}" alt="Card image cap" width="65%" id="product-detail">
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="">
                        <div class="card-body" style="background-color: white;">
                            <h1 class="h2">{{ $buku->judul_buku }}</h1>
                            <p class="py-2">
                            <i class="fa-sharp fa-solid fa-star" style="color: #ffd500;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #ffd500;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #ffd500;"></i>
                            <i class="fa-sharp fa-solid fa-star" style="color: #ffd500;"></i>
                            <i class="fa-sharp fa-regular fa-star" style="color: #ffd500;"></i>
                            <br>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Kategori:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $buku->kategori->jenis_kategori }}</strong></p>
                                </li>
                            </ul>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Status :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $buku->status->status }}</strong></p>
                                </li>
                            </ul>

                            <form action="" method="GET">
                                @csrf
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline">
                                            <li class="list-inline-item text-right">
                                                Jumlah
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-0">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="sinopsis" style="background-color: white; padding: 20px;">
                <h6 class="">Sinopsis:</h6>
                <p>{{ $buku->sinopsis }}</p>
            </div>
            <!-- </div>
        </div> -->
    </div>
</div>
@endsection