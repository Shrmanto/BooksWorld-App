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

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 600;">Tambah Buku Baru</h2>
        <!-- <div class="card-body"> -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="{{ old('judul_buku') }}">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ old('pengarang') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ old('penerbit') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="" class="text-center">-- Pilih Kategori --</option>
                                @foreach ($kategori as $kg)
                                    <option value="{{ $kg->id }}"{{ old('kategori_id') == $kg->id ? 'selected' : '' }}>{{ $kg->jenis_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
        
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="status_id">Status</label>
                            <select name="status_id" id="status_id" class="form-control">
                                <option value="" class="text-center">-- Pilih Status --</option>
                                @foreach ($status as $st)
                                    <option value="{{ $st->id }}"{{ old('status_id') == $st->id ? 'selected' : '' }}>{{ $st->status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea class="form-control" id="sinopsis" name="sinopsis" style="height: 100px"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <!-- </div> -->
    <!-- </div> -->

</div>
@endsection
