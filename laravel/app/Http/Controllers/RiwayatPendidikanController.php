<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class RiwayatPendidikanController extends Controller
{
    public function index(){
        $data=DB::table('tb_riwayat_pendidikan')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_riwayat_pendidikan')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.riwayatpendidikan',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $data = new \App\RiwayatPendidikanModel;
        $data->id_user=Auth::user()->id;
        $data->jenjang=$request->jenjang;
        $data->nama_sekolah=$request->nama_sekolah;
        $data->lokasi=$request->lokasi;
        $data->tahun_lulus=$request->tahun_lulus;
       
        $data->save();
        return redirect()->back()->with(['success' => 'Tambah Data berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_riwayat_pendidikan')->whereId($id);
        $data->delete();
        return redirect()->back()->with(['success' => 'Hapus Data Berhasil']);;  
        
    }
}
