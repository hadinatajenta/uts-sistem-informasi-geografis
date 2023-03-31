<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeospasialModel;
class GeospasialController extends Controller
{
    public function index()
    {

        return view('admin/dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        GeospasialModel::create([
            'nama' => $request->nama,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);
        return redirect('/dashboardAdmin')->with('success', 'Data berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $geospasial = GeospasialModel::findOrFail($id);
        return view('admin.edit', compact('geospasial'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
    
        $geospasial = GeospasialModel::findOrFail($id);
        $geospasial->nama = $request->nama;
        $geospasial->latitude = $request->latitude;
        $geospasial->longitude = $request->longitude;
        $geospasial->save();
    
        return redirect('/dashboardAdmin')->with('success', 'Data berhasil diubah.');
    }
    
    public function destroy($id)
    {
        $geospasial = GeospasialModel::findOrFail($id);
        $geospasial->delete();
    
        return redirect('/dashboardAdmin')->with('success', 'Data berhasil dihapus.');
    }
    
}
