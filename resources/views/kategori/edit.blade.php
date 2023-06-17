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
            <div class="card-title h2 mb-3 text-center" style="font-weight: 600;">Edit Kategori</div>
        
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="jenis_kategori">Jenis Kategori</label>
                        <input type="text" name="jenis_kategori" id="jenis_kategori" class="form-control" value="{{ $kategori->jenis_kategori }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
        </div>
    </div>



    <!-- <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; Kelompok </p>
            </div>
            <div class="float-end">
                <p>Dibuat sepenuh with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="http://localcoffe.com">Kelompok</a></p>
            </div>
        </div>
    </footer> -->
</div>
@endsection
