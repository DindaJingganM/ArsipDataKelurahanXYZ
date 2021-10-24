<?php

namespace App\Http\Controllers;
use App\Models\data;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        $datas = data::all();
        return view('arsip', compact('datas'));
    }


    public function input(Request $request){
        $datas = new data;
        $datas->nomor_surat = $request->nomor_surat;
        $datas->kategori = $request->kategori;
        $datas->judul = $request->judul;
        $datas->tanggal_arsip = $request->tanggal_arsip;
        $datas->surat= $request->surat;
        if($datas->save())
        {
            return redirect('arsip')->with('status','Data Berhasil Disimpan');
        }
        else{
            return redirect('arsip')->with('status','Data Gagal Disimpan');
        }
            // dd($request);
    }

}
