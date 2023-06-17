@extends('peminjamMain.home.index')

@section('content')
<div id="main" class="mx-auto">
    <h2 class="mb-3" style="font-weight: 600;">Keranjang</h2>
    @if (session('cart'))
    <div class="card">
        <table class="table">
            <thead style="background-color: #227c9d; color:white">
                <tr>
                    <th>Gambar</th>
                    <th>Judul Buku</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach (session('cart') as $id => $item)
                    <tr>
                        <td><img src="{{ asset('images/buku/'.$item['image']) }}" alt="Gambar Buku" width="100"></td>
                        <td>{{ $item['judul_buku'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>
                            <form action="{{ route('removefromcart', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <p>Keranjang belanja kosong.</p>
    @endif
    <div class="d-flex justify-content-end align-items-center">
        <form action="{{ route('pinjam') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary mt-3">Pinjam Buku</button>
        </form>
    </div>

</div>
@endsection
