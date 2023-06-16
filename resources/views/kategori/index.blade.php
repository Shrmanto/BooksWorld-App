@extends('layouts.app')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 600;">Daftar Kategori</h2>
        <!-- <div class="card-body"> -->
            <a href="{{ route('kategori.create') }}" class="btn mb-3" style="background-color: #227c9d;">
            <i class="fa-sharp fa-solid fa-plus" style="color: #ffffff;"></i>
            </a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $kg)
                        <tr>
                            <td>{{ $kg->id }}</td>
                            <td>{{ $kg->jenis_kategori }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', $kg->id) }}" class="btn btn-sm btn-success">
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


        <!-- </div> -->
    <!-- </div> -->


</div>
@endsection
