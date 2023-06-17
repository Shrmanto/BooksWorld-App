@extends('layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <h2 class="mb-3" style="font-weight: 600;">Daftar Peminjam</h2>
    <!-- <a href="#" class="btn btn-primary mb-3">+</a> -->

    <table class="table">
        <thead class="table-dark" style="background-color: #227c9d;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>alamat</th>
                <th>No Handphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjam as $index => $pjm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pjm->name }}</td>
                    <td>{{ $pjm->email }}</td>
                    <td>{{ $pjm->alamat }}</td>
                    <td>{{ $pjm->no_handphone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection