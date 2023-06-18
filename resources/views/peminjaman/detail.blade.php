@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Peminjaman</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Jumlah Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $transaksi_detail->id }}</td>
                    <td>{{ $transaksi_detail->name }}</td>
                    <td>{{ $transaksi_detail->judul_buku }}</td>
                    <td>{{ $transaksi_detail->jumlah_pinjam }}</td>
                    <td>{{ $transaksi_detail->tanggal_pinjam }}</td>
                    <td>{{ $transaksi_detail->tanggal_kembali }}</td>
                    <td>
                        @if ($transaksi_detail->status == 'Menunggu ACC')
                            <span class="badge badge-danger">{{ $transaksi_detail->status }}</span>
                        @else
                            <span class="badge badge-success">{{ $transaksi_detail->status }}</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
