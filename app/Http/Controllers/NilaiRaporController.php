<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class NilaiRaporController extends Controller
{
    public function index(){
        $data=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','rapor')->orderBy('kelas','ASC')->orderBy('semester','ASC')->get();
        $total=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','rapor')->count();
        return view('cms.pages.nilairapor',['data'=>$data,'total'=>$total]);
    }
    public function indexun(){
        $data=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','un')->get();
        $total=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','un')->count();
        return view('cms.pages.nilaiun',['data'=>$data,'total'=>$total]);
    }
    public function indexus(){
        $data=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','us')->get();
        $total=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','us')->count();
        return view('cms.pages.nilaius',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $data = new \App\NilaiRaporModel;
        $data->id_user=Auth::user()->id;
        $data->kelas=$request->kelas;
        $data->semester=$request->semester;
        $data->nilai=$request->nilai;
        $data->jenis='rapor';
        $data->peringkat=$request->peringkat;
        $data->save();
        return redirect('nilai-rapor')->with(['success' => 'Tambah Data berhasil']);;  
        
    }
    public function createun(Request $request){
        $data = new \App\NilaiRaporModel;
        $data->id_user=Auth::user()->id;
        $data->jenis='un';
        $data->nilai=$request->nilai;
        $data->save();
        return redirect()->back()->with(['success' => 'Tambah Data berhasil']);;  
    }
    public function createus(Request $request){
        $data = new \App\NilaiRaporModel;
        $data->id_user=Auth::user()->id;
        $data->jenis='us';
        $data->nilai=$request->nilai;
        $data->save();
        return redirect()->back()->with(['success' => 'Tambah Data berhasil']);;  
    }
    public function update(Request $request){
       
        $form_data = array(
            'nilai' => $request->nilai,
        
            );
            DB::table('tb_nilai_rapor')->where('id',$request->id)->update($form_data);
            return redirect()->back()->with(['success' => 'Update Data Berhasil']);
    }
    public function delete($id){
        $data = DB::table('tb_nilai_rapor')->whereId($id);
        $data->delete();
        return redirect()->back()->with(['success' => 'Hapus Data Berhasil']);;  
        
    }
}
