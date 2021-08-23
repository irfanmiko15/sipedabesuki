<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class JurusanController extends Controller
{
    public function index(){
        $jurusan=DB::table('tb_jurusan')->get();
        
        return view('cms.pages.masterjurusan',['jurusan'=>$jurusan]);
    }
    public function create(Request $request){
      
        $data = new \App\JurusanModel;
        $data->nama_jurusan=$request->nama_jurusan;
        
        $data->save();
        return redirect('master-jurusan')->with(['success' => 'Tambah Data  berhasil']);;  
        
    }
    public function update(Request $request){
       
        $form_data = array(
            'nama_jurusan' => $request->nama_jurusan,
        
            );
            DB::table('tb_jurusan')->where('id',$request->id)->update($form_data);
            return redirect()->back()->with(['success' => 'Update Data Berhasil']);
    }
    public function delete($id){
        $data = DB::table('tb_jurusan')->whereId($id)->delete();
        return redirect('master-jurusan')->with(['success' => 'Hapus Data Berhasil']);;  
       
    }
}
