<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Transaksi_DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi_detail = DB::table('transaksi_detail')
            ->select('transaksi_detail.id', 'transaksi_detail.jumlah_pinjam', 'transaksi.tanggal_pinjam', 'transaksi.tanggal_kembali', 'transaksi.status','buku.judul_buku', 'users.name')
            ->join('transaksi', 'transaksi_detail.transaksi_id', 'transaksi.id')
            ->join('buku', 'transaksi_detail.buku_id', 'buku.id')
            ->join('users', 'transaksi.user_id', 'users.id')
            ->get();
    
        return view('peminjaman.index', compact('transaksi_detail'));
    }

    public function peminjaman()
    {
        $userId = auth()->user()->id;
        $transaksi_detail = DB::table('transaksi_detail')
            ->select('transaksi_detail.id', 'transaksi_detail.jumlah_pinjam', 'transaksi.tanggal_pinjam', 'transaksi.tanggal_kembali', 'transaksi.status','buku.judul_buku', 'users.name')
            ->join('transaksi', 'transaksi_detail.transaksi_id', 'transaksi.id')
            ->join('buku', 'transaksi_detail.buku_id', 'buku.id')
            ->join('users', 'transaksi.user_id', 'users.id')
            ->where('user_id', $userId)
            ->get();
    
        return view('peminjamMain.peminjaman.index', compact('transaksi_detail'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDetail($id)
    {
        $transaksi_detail = DB::table('transaksi_detail')
            ->select('transaksi_detail.id', 'transaksi_detail.jumlah_pinjam', 'transaksi.tanggal_pinjam', 'transaksi.tanggal_kembali', 'transaksi.status', 'buku.judul_buku', 'users.name')
            ->join('transaksi', 'transaksi_detail.transaksi_id', 'transaksi.id')
            ->join('buku', 'transaksi_detail.buku_id', 'buku.id')
            ->join('users', 'transaksi.user_id', 'users.id')
            ->where('transaksi.id', $id)
            ->first();

        return view('peminjaman.detail', compact('transaksi_detail'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
    
        if ($transaksi->status != 'ACC') {
            $transaksi->status = 'ACC';
            
            // Mengatur tanggal kembali 3 hari setelah tanggal pinjam
            $tanggalPinjam = $transaksi->tanggal_pinjam;
            $tanggalKembali = date('Y-m-d', strtotime($tanggalPinjam. ' + 3 days'));
            
            $transaksi->tanggal_kembali = $tanggalKembali;
            
            $transaksi->save();
            
            return redirect()->back()->with('success', 'Berhasil mengubah status menjadi ACC.');
        }
        
        return redirect()->back()->with('error', 'Tidak dapat mengubah status menjadi ACC.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
