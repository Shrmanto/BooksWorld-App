@extends('peminjamMain.home.index')

@section('content')
<div id="main" class="mx-auto">
    @foreach($buku as $bk)
    <div class="row mb-5">
        <div class="col-lg-4">
            <img src="{{ asset('images/buku/'.$bk->image) }}" alt="Gambar Buku" width="300">
        </div>
        <div class="col-lg-8">
            <h2 class="mb-3" style="font-weight: 600;">{{ $bk->judul_buku }}</h2>
            <p class="mb-2">Pengarang: {{ $bk->pengarang }}</p>
            <p class="mb-2">Penerbit: {{ $bk->penerbit }}</p>
            <p class="mb-2">Kategori: {{ $bk->kategori->jenis_kategori }}</p>
            <p class="mb-2">Sinopsis: {{ $bk->sinopsis }}</p>
            <p class="mb-2">Status: 
            @if ($bk->jumlah == 0)
                <span class="badge badge-danger">Stok Habis</span>
            @else
                @if ($bk->status->status == 'tersedia')
                    <span class="badge badge-success">{{ $bk->status->status }}</span>
                @else
                    {{ $bk->status->status }}
                @endif
            @endif
            </p>
            
            <form action="{{ route('addtocart', $bk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="btn btn-primary">Tambahkan ke Keranjang</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
