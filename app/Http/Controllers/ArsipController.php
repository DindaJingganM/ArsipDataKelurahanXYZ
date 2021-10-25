<?php

namespace App\Http\Controllers;
use App\Models\data;
use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;



class ArsipController extends Controller
{
    public function index()
    {
        $datas = data::all();
        return view('arsip', compact('datas'));
    }


    public function input(Request $request){
        $datas = new data;
        $files = $request->file('surat');
        if($files){
            $nama_files = date('Y-m-d H:i:s').$files->getClientOriginalName();
                    
            
        }
        $datas->nomor_surat = $request->nomor_surat;
        $datas->kategori = $request->kategori;
        $datas->judul = $request->judul;
        $datas->tanggal_arsip = $request->tanggal_arsip;
        $datas->surat= $request->surat;
        if($datas->save())
        {
            
        alert()->success('Success ', 'Success');
        return redirect('arsip');
        }
        else{
            alert()->error('Failed !', 'Error');
        return redirect('arsip');
        }
            // dd($request);
    }

    
    public function delete($id)
    {
        $datas= Data::where('id', $id)->first();
        $datas->delete();

        alert()->error('Delete', 'Deleted');
        return redirect('arsip');
    }

}
