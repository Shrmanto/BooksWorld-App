@extends('layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <h2 class="mb-3 text-center" style="font-weight: 600;">Daftar Admin</h2>
    <!-- <a href="#" class="btn btn-primary mb-3">+</a> -->
    <div class="card shadow-sm">
        <table class="table">
            <thead class="table-dark" style="background-color: #227c9d;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                    <tr>
                        <td>{{ $us->id }}</td>
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




    <!-- <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; Kelompok 1</p>
            </div>
            <div class="float-end">
                <p>Dibuat sepenuh  <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://localcoffe.com">Kelompok 1</a></p>
            </div>
        </div>
    </footer> -->
</div>
@endsection