<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class OrangTuaController extends Controller
{
    public function index(){
        $data=DB::table('tb_data_orang_tua')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_data_orang_tua')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.orangtua',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $data = new \App\OrangTuamodel;
        $data->id_user=Auth::user()->id;
        $data->nama=$request->nama;
        $data->jenis=$request->hubungan;
        $data->tempat_lahir=$request->tempat_lahir;
        $data->tanggal_lahir=$request->tanggal_lahir;
        $data->no_telp=$request->telepon;
        $data->pekerjaan=$request->pekerjaan;
        $data->penghasilan=$request->penghasilan;
        $data->alamat=$request->alamat;
        $data->save();
        return redirect('orang-tua')->with(['success' => 'Tambah Data berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_data_orang_tua')->whereId($id);
        $data->delete();
        return redirect('orang-tua')->with(['success' => 'Hapus Data Berhasil']);;  
        
    }
}
