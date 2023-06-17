<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\transaksi_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('peminjamMain.keranjang.cart', compact('buku'));
    }

    public function addToCart(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        // Memperbarui atau menambahkan item ke dalam keranjang sesuai dengan buku yang ditambahkan
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "judul_buku" => $buku->judul_buku,
                "image" => $buku->image,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang!');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Buku berhasil dihapus dari keranjang!');
    }

    public function pinjam(Request $request)
    {
        // Mendapatkan daftar buku dari keranjang
        $cartItems = session('cart');
    
        // Membuat transaksi baru
        $transaksi = new Transaksi();
        $transaksi->user_id = Auth::id();
        // Tambahkan logika lainnya sesuai kebutuhan, misalnya tanggal transaksi, status, dll.
        $transaksi->save();
    
        // Menyimpan detail transaksi untuk setiap buku dalam keranjang
        foreach ($cartItems as $id => $item) {
            $buku = Buku::findOrFail($id);
    
            $detailTransaksi = new transaksi_detail();
            $detailTransaksi->transaksi_id = $transaksi->id;
            $detailTransaksi->buku_id = $buku->id;
            $detailTransaksi->jumlah_pinjam = $item['quantity'];
            // Tambahkan logika lainnya sesuai kebutuhan, misalnya harga, status peminjaman, dll.
            $detailTransaksi->save();
        }
    
        // Mengosongkan keranjang setelah peminjaman berhasil
        session()->forget('cart');
    
        return redirect()->back()->with('success', 'Buku berhasil dipinjam!');
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
