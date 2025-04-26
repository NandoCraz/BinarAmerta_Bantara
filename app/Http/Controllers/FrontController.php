<?php

namespace App\Http\Controllers;

use App\Models\DetailKota;
use App\Models\Kota;
use App\Models\Kuliner;
use App\Models\ProdukLokal;
use App\Models\Provinsi;
use App\Models\Volunter;
use App\Models\Wisata;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::all();
        $kotas = Kota::with('provinsi')->get();
        $wisatas = Wisata::with('kota.provinsi')->where('rating', '>=', 4.5)->get();
        $kuliners = Kuliner::with('kota.provinsi')->take(4)->get();
        $kategoris = ProdukLokal::select('kategori')->distinct()->pluck('kategori');
        $produks = ProdukLokal::with('wisata.kota.provinsi')->get();
        $jenis_masakan = Kuliner::select('jenis_masakan')->distinct()->pluck('jenis_masakan');
        $komunitas = Volunter::where('nama_acara', 'like', '%komunitas%')->get();
        $relawan = Volunter::where('nama_acara', 'not like', '%komunitas%')->get();
        return view('front.components.index', compact('wisatas', 'kuliners', 'provinsis', 'kotas', 'kategoris', 'produks', 'jenis_masakan', 'komunitas', 'relawan'));
    }

    public function wisata() {
        $wisatas = Wisata::with('kota.provinsi')->get();
        return view('front.components.wisata', compact('wisatas'));
    }
    public function umkm() {
        $produks = ProdukLokal::with('wisata.kota.provinsi')->get();
        return view('front.components.umkm', compact('produks'));
    }
    public function kuliner() {
        $kuliners = Kuliner::with('kota.provinsi')->get();
        return view('front.components.kuliner', compact('kuliners'));
    }
    public function komunitas()
    {
        return view('front.components.komunitas');
    }

    public function filter(Request $request)
    {
        $data = DetailKota::where('kota_id', $request->city)
            ->with('kota.provinsi')
            ->get();

        return response()->json($data);
    }
}
