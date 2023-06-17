@extends('layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <a href="{{ route('kategori') }}" class="btn mb-3" style="background-color: #227c9d;">
    <i class="fa-sharp fa-solid fa-arrow-left" style="color: #ffffff;"></i>
    </a>

    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title text-center mb-3" style="font-weight: 600;">Tambah Kategori Baru</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="jenis_kategori">Jenis Kategori</label>
                    <input type="text" name="jenis_kategori" id="jenis_kategori" class="form-control" value="{{ old('jenis_kategori') }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>
@endsection
