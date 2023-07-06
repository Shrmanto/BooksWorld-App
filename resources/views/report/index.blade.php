@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Filter Form -->
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('report.show') }}" method="GET">
                <h2 class="text-center mb-3">Reporting Peminjaman Buku</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="start_date">Tanggal Pinjam</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ request('start_date') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="end_date">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ request('end_date') }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>

    <!-- Display Table if Filter Applied -->
    @if (request('start_date') || request('end_date'))
        @if ($transaksi_detail->count() > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #227c9d; color: white;">
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Jumlah Pinjam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi_detail as $index => $detail)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $detail->judul_buku }}</td>
                                <td>{{ $detail->name }}</td>
                                <td>{{ $detail->tanggal_pinjam }}</td>
                                <td>{{ $detail->tanggal_kembali }}</td>
                                <td>{{ $detail->status }}</td>
                                <td>{{ $detail->jumlah_pinjam }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-12">
                <p>Tidak ada data peminjaman yang cocok dengan filter tanggal.</p>
            </div>
        </div>
        @endif
    @else
    <!-- Display Empty Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background-color: #227c9d; color: white;">
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th>Jumlah Pinjam</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

</div>
@endsection
