@extends('layouts.app')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 600;">Daftar Kategori</h2>
        <!-- <div class="card-body"> -->
            <a href="{{ route('kategori.create') }}" class="btn btn btn-outline-primary mb-3 shadow-sm">
            <i class="fa-sharp fa-solid fa-plus"></i>
            </a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card shadow-sm">
                <table class="table table-striped">
                    <thead class="table-dark" style="background-color: #227c9d;">
                        <tr>
                            <th>No.</th>
                            <th>Jenis Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $index => $kg)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $kg->jenis_kategori }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $kg->id) }}" class="btn btn-sm btn-success">
                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="{{ route('kategori.delete', $kg->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        <!-- </div> -->
    <!-- </div> -->


</div>
@endsection
