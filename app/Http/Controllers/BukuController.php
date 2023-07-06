<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = Buku::with('kategori', 'status')->paginate(5);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $kategori = Kategori::all();
        return view('buku.form', compact('kategori', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('images');


        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'sinopsis' => 'required|string|max:1000',
            'kategori_id' => 'required|exists:kategori,id',
            'jumlah' => 'required|integer|max:100',
            'status_id' => 'required|exists:status,id'
        ]);

        $buku = new Buku();
        $buku->judul_buku = $request->judul_buku;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/buku'), $imageName);
            $buku->image = $imageName;
        }
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->sinopsis = $request->sinopsis;
        $buku->kategori_id = $request->kategori_id;
        $buku->jumlah = $request->jumlah;
        $buku->status_id = $request->status_id;
        $buku->save();

        return redirect()->route('buku')->with('success', 'Buku berhasil ditambahkan.');
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
    public function lihat($id)
    {
        //
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        $status = Status::all();
        return view('buku.detail', compact('buku', 'kategori', 'status'));
    }

    public function edit($id)
    {
        //
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        $status = Status::all();
        return view('buku.edit', compact('buku', 'kategori', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku, $id)
    {
        //
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'sinopsis' => 'required|string|max:1000',
            'kategori_id' => 'required|exists:kategori,id',
            'jumlah' => 'required|integer|max:100',
            'status_id' => 'required|exists:status,id'
        ]);

        $buku = Buku::findOrFail($id);

        $buku->judul_buku = $request->judul_buku;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/buku'), $imageName);
            $buku->image = $imageName;
        }
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->sinopsis = $request->sinopsis;
        $buku->kategori_id = $request->kategori_id;
        $buku->jumlah = $request->jumlah;
        $buku->status_id = $request->status_id;

        if ($buku->jumlah === 0) {
            $buku->status_id = 2; // ID status stok habis
        } else {
            $buku->status_id = 1; // ID status tersedia
        }

        $buku->save();

        return redirect()->route('buku')->with('success', 'Data Buku berhasil diubah.');
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
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku')->with('success', 'Data Kategori berhasil dihapus.');
    }
}
