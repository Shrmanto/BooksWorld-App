@extends('customer.home.index')

@section('content')
<div id="main" class="mx-auto">
    <h2 class="mb-3" style="font-weight: 600;">List Buku</h2>
    <div class="row">
        @foreach ($buku as $bk)
        <div class="col-lg-3 mb-3"> 
            <div class="card">
                <img class="img-brand" src="{{ asset('images/buku/'.$bk->image) }}" alt="image brand">
                <a class="prg text-decoration-none mt-3">{{ $bk -> pengarang}}</a>
                <a href="" class="jdl-buku h3 text-decoration-none mt-0">{{ $bk->judul_buku }}</a>
                <div class="rating mt-2">
                    <i class="fa-sharp fa-solid fa-star fa-xs" style="color: #ffd500;"></i>
                    <i class="fa-sharp fa-solid fa-star fa-xs" style="color: #ffd500;"></i>
                    <i class="fa-sharp fa-solid fa-star fa-xs" style="color: #ffd500;"></i>
                    <i class="fa-sharp fa-solid fa-star fa-xs" style="color: #ffd500;"></i>
                    <i class="fa-sharp fa-regular fa-star fa-xs" style="color: #ffd500;"></i>
                </div>
                <div class="status d-flex align-items-center justify-content-between">
                    <h2 class="mt-2">{{ $bk->status->status }}</h2>
                    <a class="btn btn-2 text-white mt-2" href="{{ route('detailbuku', $bk->id ) }}"><i class="fa-solid fa-eye fa-xs"></i></a>
                    <form action="" method="post">
                        @csrf
                        <a class="btn text-white mt-2" href="#"><i class="fa-solid fa-basket-shopping fa-xs"></i></a>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
