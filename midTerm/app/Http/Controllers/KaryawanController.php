<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return view("karyawan.index", compact(['karyawan']));
    }
    public function create(){
        $karyawan = Karyawan::all();
        return view("karyawan.create", compact(['karyawan']));
    }
    public function store(Request $request)
    {
       Karyawan::create($request->except(['_token','submit']));
       $this->validate($request, [
        'Nama' => 'required|string|min 5',
        'Umur' => 'required|string|min 5',
        'Alamat' => 'required|string|min 5',
        'Nomor_telephone' => 'required|string|min 5'
        ]);
        return redirect('/karyawan');
    }
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit',compact(['karyawan']));
    }
    public function update($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->update($request->except(['_token','submit']));
        return redirect('/karyawan');

    }
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}
