@extends('layouts.app')

@section('content')
<div id="main" class="mx-auto">
    <a href="{{ route('buku') }}" class="btn" style="background-color: #227c9d;">
        <i class="fa-sharp fa-solid fa-arrow-left" style="color: #ffffff;"></i>
    </a>
    <div class="mb-3">
        <!-- <div class="row">
            <div class="col-lg-12" style="background-color: white;"> -->
            <div class="row mb-4">
                <div class="col-lg-5 mt-5">
                    <div class="card-body mb-3" style="background-color: white;">
                        <img class="img-fluid" src="{{ asset('images/buku/'.$buku->image) }}" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="">
                        <div class="card-body" style="background-color: white;">
                            <h1 class="h2">{{ $buku->judul_buku }}</h1>
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
                            <div class="sinopsis">
                                <h6 class="">Sinopsis:</h6>
                                <p>{{ $buku->sinopsis }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div>
        </div> -->
    </div>
</div>
@endsection
