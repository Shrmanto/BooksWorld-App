<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $transaksiDetail = DB::table('transaksi_detail')
            ->select('transaksi_detail.id', 'transaksi_detail.jumlah_pinjam', 'transaksi.tanggal_pinjam', 'transaksi.tanggal_kembali', 'transaksi.status', 'buku.judul_buku', 'users.name')
            ->join('transaksi', 'transaksi_detail.transaksi_id', 'transaksi.id')
            ->join('buku', 'transaksi_detail.buku_id', 'buku.id')
            ->join('users', 'transaksi.user_id', 'users.id');

        if ($start_date && $end_date) {
            $transaksiDetail->whereBetween('transaksi.tanggal_pinjam', [$start_date, $end_date]);
        }

        $transaksi_detail = $transaksiDetail->get();

        return view('report.index', compact('transaksi_detail'));
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
    public function show($id)
    {
        //
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
        //
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
