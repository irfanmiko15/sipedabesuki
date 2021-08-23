<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SaudaraController extends Controller
{
    public function index(){
        $data=DB::table('tb_saudara')->where('id_user','=',Auth::user()->id)->orderBy('anak_ke','ASC')->get();
        $total=DB::table('tb_saudara')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.saudara',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $data = new \App\SaudaraModel;
        $data->id_user=Auth::user()->id;
        $data->anak_ke=$request->anak_ke;
        $data->nama_saudara=$request->nama_saudara;
        $data->umur=$request->umur;
        $data->pendidikan=$request->pendidikan;
        $data->pekerjaan=$request->pekerjaan;
        $data->save();
        return redirect('saudara')->with(['success' => 'Tambah Data berhasil']);
    }
    public function delete($id){
        $data = DB::table('tb_saudara')->whereId($id)->delete();
        return redirect('saudara')->with(['success' => 'Hapus Data Berhasil']);
    }
    public function show($id){
        $data = DB::table('tb_saudara')->whereId($id)->get();
        return view('cms.pages.saudara',['data'=>$data]);
    }
    public function update(Request $request){
       
        $form_data = array(
            'anak_ke' => $request->anak_ke,
            'nama_saudara' => $request->nama_saudara,
            'umur' => $request->umur,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            );
            DB::table('tb_saudara')->where('id',$request->id)->update($form_data);
            return redirect('saudara')->with(['success' => 'Update Data Berhasil']);
    }
}
