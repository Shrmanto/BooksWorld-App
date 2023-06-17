@extends('layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <a href="{{ route('buku') }}" class="btn mb-3" style="background-color: #227c9d;">
    <i class="fa-sharp fa-solid fa-arrow-left" style="color: #ffffff;"></i>
    </a>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="card-title h2 mb-3 text-center" style="font-weight: 600;">Edit Buku</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ isset($buku) ? route('buku.update', $buku->id) : route('buku.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($buku))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ isset($buku) ? $buku->judul_buku : old('judul_buku') }}" required>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ isset($buku) ? $buku->pengarang : old('pengarang') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ isset($buku) ? $buku->penerbit : old('penerbit') }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select class="form-control" id="kategori_id" name="kategori_id" required>
                                @foreach($kategori as $kategoriItem)
                                    <option value="{{ $kategoriItem->id }}" {{ isset($buku) && $buku->kategori_id == $kategoriItem->id ? 'selected' : '' }}>{{ $kategoriItem->jenis_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ isset($buku) ? $buku->jumlah : old('jumlah') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="status_id">Status</label>
                            <select class="form-control" id="status_id" name="status_id" required>
                                @foreach($status as $statusItem)
                                <option value="{{ $statusItem->id }}" {{ isset($buku) && $buku->status_id == $statusItem->id ? 'selected' : '' }}>{{ $statusItem->status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea class="form-control" id="sinopsis" name="sinopsis" rows="5" required>{{ isset($buku) ? $buku->sinopsis : old('sinopsis') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($buku) ? 'Update' : 'Simpan' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
