@extends('layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 600;">Daftar Buku</h2>
        <!-- <div class="card-body"> -->
            <a href="{{ route('buku.create') }}" class="btn mb-3" style="background-color: #227c9d;">
            <i class="fa-sharp fa-solid fa-plus" style="color: #ffffff;"></i>
            </a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped table-hover">
                <thead>
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
                            <td><span class="badge">{{ $bk->status->status }}</span></td>
                            <td>
                                <a href="{{ route('buku.edit', $bk->id) }}" class="btn btn-sm btn-success">
                                <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                </a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $buku->links() }}


        <!-- </div> -->
    <!-- </div> -->


</div>
@endsection
