<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function mobil(){
        $video = 'video/Lamborghini Revuelto – From Now On.mp4';
        $mobils = Mobil::all();
        return view('mobil', compact('mobils'));
    }

    public function tambahMobil(){
        return view('tambahMobil');
    }

    public function simpan(Request $request){
    $request->validate([
        'nama_mobil' => 'required|string|max:255',
        'merk' => 'required|string|max:255',
        'kapasitas_mesin' => 'required|string|max:255',
    ]);

    Mobil::create([
        'nama_mobil' => $request->nama_mobil,
        'merk' => $request->merk,
        'kapasitas_mesin' => $request->kapasitas_mesin,
    ]);

    return redirect()->route('mobil')->with('success', 'Data mobil berhasil disimpan!');
    }

    public function companyProfile(){
        $video = 'public/video/Lamborghini Revuelto – From Now On.mp4';
        return view('companyProfile', compact('video'));
    }
}