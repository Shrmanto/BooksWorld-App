<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function cart()
    {
        return view('peminjamMain.keranjang.cart');
    }

    // public function addToCart($id)
    // {
    //     $buku = Buku::findOrFail($id);
 
    //     $cart = session()->get('cart', []);
 
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     }  else {
    //         $cart[$id] = [
    //             "judul_buku" => $buku->judul_buku,
    //             "image" => $buku->image,
    //             "quantity" => 1
    //         ];
    //     }
 
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('Berhasil', 'Buku berhasil ditambahkan di keranjang!!');
    // }

    public function addToCart(Request $request, $id)
    {
        Buku::where('id', $request->id)->update(['status'=>'sudah dikeranjang']);

        return redirect()->back()->with('success', 'berhasil masukkan ke keranjang');
    }

    // public function pinjam($id)
    // {
    //     $cart = session()->get('cart', []);

    //     if (empty($cart)) {
    //         return redirect()->back()->with('Gagal', 'Keranjang belanja kosong!');
    //     }

    //     $buku = Buku::findOrFail($id);

    //     if ($buku->status == 'tersedia'){
    //         // Buat transaksi baru
    //         $transaksi = new Transaksi();
    //         $transaksi->user_id = Auth::user()->id;
    //         $transaksi_detail->buku_id = $buku->id;
    //         $transaksi->status = 'Menunggu ACC';
    //         $transaksi->save();
            
    //         $transaksi_detail=new transaksi_detail();
    //         $transaksi_detail->jumlah_pinjam = 1;
    //         $transaksi_detail->transaksi_id = $transaksi->id;
    //         $transaksi_detail->save();

    //         // Kosongkan keranjang belanja
    //         session()->forget('cart');
    
    //         return redirect()->back()->with('Berhasil', 'Menunggu Acc Admin!');
    //     }


    // }

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
