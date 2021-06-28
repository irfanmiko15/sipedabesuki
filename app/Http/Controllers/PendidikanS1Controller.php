<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class PendidikanS1Controller extends Controller
{
    public function index(){
        $data=DB::table('tb_pendidikan_s1')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_pendidikan_s1')->where('id_user','=',Auth::user()->id)->count();
        $jurusan=DB::table('tb_jurusan')->get();
        return view('cms.pages.pendidikans1',['data'=>$data,'total'=>$total,'jurusan'=>$jurusan]);
    }
   
    public function create(Request $request){
        $data = new \App\PendidikanS1Model;
        $data->id_user=Auth::user()->id;
        $data->universitas=$request->universitas;
        $data->fakultas=$request->fakultas;
        $data->id_jurusan=$request->jurusan;
       
        $data->penerimaan=$request->penerimaan;
        $data->save();
        return redirect()->back()->with(['success' => 'Tambah Data berhasil']);;  
        
    }
    
    public function update(Request $request){
       
        $form_data = array(
            'universitas' => $request->universitas,
            'fakultas'=>$request->fakultas,
            'id_jurusan'=>$request->jurusan,
            
            'penerimaan'=>$request->penerimaan
            );
            DB::table('tb_pendidikan_s1')->where('id',$request->id)->update($form_data);
            return redirect()->back()->with(['success' => 'Update Data Berhasil']);
    }
    public function delete($id){
        $data = DB::table('tb_pendidikan_s1')->whereId($id);
        $data->delete();
        return redirect()->back()->with(['success' => 'Hapus Data Berhasil']);;  
        
    }
}
