<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\lpk;
use App\Models\pj;
use App\Models\kegiatanpengembangan;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


class lpk_controller extends Controller
{
    public function index()
    {
        $lpk = lpk::all();
        $kegiatanpengembangan = kegiatanpengembangan::all();
        return view('lpk', ['listlpk'=>$lpk]);
    }
    public function index2()
    {
        $lpk = lpk::with(['kegiatanpengembangan'])->get();
        return view('rekap-umum', ['listlpk'=>$lpk]);
    }

    public function detail($id)
    {
        $lpk = lpk::findOrFail($id);
        return view('detail-page',['listlpk' => $lpk]);
    }

    // public function view_pdf()
    // {
    //     $mpdf = new \Mpdf\Mpdf();
    //     $lpk = lpk::all();
    //     $mpdf->WriteHTML(view("pdf.rekap-umum-eksport",['listlpk' => $lpk]));
    //     $mpdf->Output();
    // }

    public function export()
    {
        $lpk = lpk::all();
        $pdf = Pdf::loadView('pdf.rekap-umum-eksport',['listlpk' => $lpk]);
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('data-umum-'.Carbon::now()->timestamp.'.pdf');
    }

    public function create()
    {
     
        $kegiatanpengembangan = kegiatanpengembangan::all();

        return view('rekap-umum-add', compact('kegiatanpengembangan'));
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
        $lpk = lpk::with( ['kegiatanpengembangan'])->findOrFail($id);
        $kegiatanpengembangan = kegiatanpengembangan::all();

        // $kegiatanpengembangan = kegiatanpengembangan::where('id','!=',$lpk->id)->get(['id','nama_lpk']);
        return view('rekap-umum-edit',['lpk' =>$lpk,'kegiatanpengembangan'=>$kegiatanpengembangan, ]);
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

    public function destroy($id)
    {
        $lpk = lpk::find($id)->delete();

        if($lpk){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('rekap-umum');
    }
}
