@extends('peminjamMain.home.index')

@section('content')
    <div class="container">
        <h2>Data Peminjaman</h2>
        <div class="card shadow-sm">
            <table class="table">
                <thead style="background-color: #227c9d; color: white;">
                    <tr>
                        <th>No</th>
                        <th>Peminjam</th>
                        <th>Judul</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi_detail as $index => $detail)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $detail->name }}</td>
                            <td>{{ $detail->judul_buku }}</td>
                            <td>{{ $detail->jumlah_pinjam }}</td>
                            <td>{{ $detail->tanggal_pinjam }}</td>
                            <td>{{ $detail->tanggal_kembali }}</td>
                            <td>
                                @if ($detail->status == 'Menunggu ACC')
                                    <span class="badge badge-danger">{{ $detail->status }}</span>
                                @else
                                    <span class="badge badge-success">{{ $detail->status }}</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
