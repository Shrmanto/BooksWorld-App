@extends('peminjamMain.home.index')

@section('content')
<div id="main" class="mx-auto">
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
                    <span class="item-price text-primary">
                        @if ($bk->jumlah == 0)
                            <span class="badge badge-danger">Stok Habis</span>
                        @else
                            @if ($bk->status->status == 'tersedia')
                                <span class="badge badge-success">{{ $bk->status->status }}</span>
                            @else
                                {{ $bk->status->status }}
                            @endif
                        @endif
                    </span>
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
@endsection
