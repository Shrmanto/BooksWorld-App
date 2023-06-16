<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Http\Request;


class RegistController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'alamat' => ['required', 'string'],
            'no_handphone' => ['required', 'string', 'max:15'],
        ]);    

        $peminjam = new User();
        $peminjam->name=$request->name;
        $peminjam->email=$request->email;
        $peminjam->email_verified_at=now();
        $peminjam->password=bcrypt($request->password);
        $peminjam->save();

        event(new Registered($peminjam));
        $peminjam->assignRole('user'); // Menggunakan metode assignRole dari trait HasRoles

        $peminjam_detail=new Peminjam();
        $peminjam_detail->alamat = $request->alamat;
        $peminjam_detail->no_handphone = $request->no_handphone;
        $peminjam_detail->user_id = $peminjam->id;
        $peminjam_detail->save();

        return redirect()->route('welcome');
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
