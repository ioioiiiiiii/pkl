<?php

namespace App\Http\Controllers;

use App\Models\lpk;

use Illuminate\Http\Request;
use App\Models\kegiatanpengembangan;


class KegiatanPengembanganController extends Controller
{
    public function index()
    {
        $kegiatanpengembangan = kegiatanpengembangan::with('lpk')->get();
        return view('B.kegiatanpengembangan', ['listkegiatanpengembangan' => $kegiatanpengembangan]);
    }

    public function create()
    {
        $lpk = lpk::all();
        return view('B.kegiatanpengembanganadd', compact('lpk'));
    }

    public function store(Request $request){
        $kegiatanpengembangan = kegiatanpengembangan::create($request->all());
        return redirect('/kegiatan-pengembangan');
    }

}
