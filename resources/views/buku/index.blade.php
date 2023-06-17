@extends('layouts.app')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 600;">Daftar Buku</h2>
        <!-- <div class="card-body"> -->
            <a href="{{ route('buku.create') }}" class="btn btn btn-outline-primary mb-3 shadow-sm">
            <i class="fa-sharp fa-solid fa-plus"></i>
            </a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card shadow-sm">
                <table class="table">
                    <thead class="table-dark" style="background-color: #227c9d;">
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Gambar</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $index => $bk)
                            <tr>
                                <td>{{ $index + $buku->firstItem() }}</td>
                                <td>{{ $bk->judul_buku }}</td>
                                <td>
                                    <img src="{{ asset('images/buku/'.$bk->image) }}" alt="image" class="img-thumbnail" width="60">
                                </td>
                                <td>{{ $bk->pengarang }}</td>
                                <td>{{ $bk->penerbit }}</td>
                                <td>{{ $bk->kategori->jenis_kategori }}</td>
                                <td>{{ $bk->jumlah }}</td>
                                <td>
                                    @if ($bk->jumlah == 0)
                                        <span class="badge badge-danger">Stok Habis</span>
                                    @else
                                        @if ($bk->status->status == 'tersedia')
                                            <span class="badge badge-success">{{ $bk->status->status }}</span>
                                        @else
                                            {{ $bk->status->status }}
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('buku.edit', $bk->id) }}" class="btn btn-sm btn-success">
                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="{{ route('buku.delete', $bk->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $buku->links() }}


        <!-- </div> -->
    <!-- </div> -->


</div>
@endsection
