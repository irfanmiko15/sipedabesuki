<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterSekolahController extends Controller
{
    public function index(){
        $sekolah=DB::table('tb_sekolah')->get();
        return view('cms.pages.master-sekolah',['sekolah'=>$sekolah]);
    }
    public function create(Request $request){
        $data = new \App\SekolahModel;
        $data->nama_sekolah=$request->nama_sekolah;
        $data->alamat=$request->alamat;
        $data->no_telp=$request->no_telp;
        $data->save();
        return redirect('master-sekolah')->with(['success' => 'Tambah Sekolah berhasil']);
    }
    public function delete($id){
        $data = DB::table('tb_sekolah')->whereId($id)->delete();
        return redirect('master-sekolah')->with(['success' => 'Hapus Data Sekolah Berhasil']);
    }
    public function show($id){
        $data = DB::table('tb_sekolah')->whereId($id)->get();
        return view('cms.pages.master-sekolah',['data'=>$data]);
    }
    public function update(Request $request){
       
        $form_data = array(
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            );
            DB::table('tb_sekolah')->where('id',$request->id)->update($form_data);
            return redirect('master-sekolah')->with(['success' => 'Update Data Sekolah Berhasil']);
    }
}
