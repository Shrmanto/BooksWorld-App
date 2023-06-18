@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Peminjaman</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Peminjam</th>
                    <th>Judul</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                        <td>
                            @if ($detail->status == 'Menunggu ACC')
                                <a href="{{ route('peminjaman.update', $detail->id) }}" type="submit" onclick="confirm('Ingin menerima peminjaman?')" class="btn btn-danger">
                                    <i class="fa-solid fa-xmark"></i>   
                                </a>
                            @else
                                <a type="button" class="btn btn-success">
                                    <i class="fa-solid fa-check"></i>
                                </a>
                            @endif
                            <a href="{{ route('detailpeminjaman.detail', $detail->id) }}" type="button" class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
