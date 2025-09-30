<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        return view('buku', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('edit-buku', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku, $id)
    {
        $validasi = $request->validate([
            'judul' => 'required|string|sometimes|max:255',
            'pengarang' => 'required|string|sometimes|max:255',
            'penerbit' => 'required|string|sometimes|max:255',
        ]);
        Buku::where('id', $id)->update($validasi);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/buku');
    }
}
