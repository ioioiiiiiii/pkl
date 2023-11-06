<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\lpk;
use App\Models\pj;
use App\Models\pimpinan;


class lpk_controller extends Controller
{
    public function index()
    {
        $lpk = lpk::with(['pimpinan','pj'])->get();
        return view('lpk', ['listlpk'=>$lpk]);
    }
    public function index2()
    {
        $lpk = lpk::with(['pimpinan','pj'])->get();
        return view('rekap-umum', ['listlpk'=>$lpk]);
    }

    public function create()
    {
        $pimpinan = pimpinan::all();
        $pj = pj::all();

        return view('rekap-umum-add', compact('pimpinan','pj'));
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nip' => 'unique:pegawai'
        // ]);

        $lpk=lpk::create($request->all());

        if($lpk){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/rekap-umum');
    }

    public function edit(Request $request, $id)
    {
        $lpk = lpk::with( ['pimpinan','pj'])->findOrFail($id);
        $pimpinan = pimpinan::where('id','!=',$lpk->id_pimpinan)->get(['id','nama']);
        $pj = pj::where('id','!=',$lpk->id_pj)->get(['id','nama']);
        return view('rekap-umum-edit',['lpk' =>$lpk,'pimpinan'=>$pimpinan, 'pj'=>$pj]);
    }

    

    public function update(Request $request, $id)
    {
        $lpk = lpk::findOrFail($id);

        $lpk->update($request->all());
        if($lpk){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/rekap-umum');
    }
}
