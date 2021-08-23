<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class TanggunganController extends Controller
{
    public function index(){
        $data=DB::table('tb_tanggungan')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_tanggungan')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.tanggungan',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $data = new \App\TanggunganModel;
        $data->id_user=Auth::user()->id;
        $data->jumlah=$request->jumlah;
        $data->save();
        return redirect('tanggungan')->with(['success' => 'Tambah Data berhasil']);
    }
    public function delete($id){
        $data = DB::table('tb_saudara')->whereId($id)->delete();
        return redirect('tanggungan')->with(['success' => 'Hapus Data Berhasil']);
    }
    public function show($id){
        $data = DB::table('tb_saudara')->whereId($id)->get();
        return view('cms.pages.saudara',['data'=>$data]);
    }
    public function update(Request $request){
       
        $form_data = array(
            'jumlah' => $request->jumlah,
           
            );
            DB::table('tb_tanggungan')->where('id',$request->id)->update($form_data);
            return redirect('tanggungan')->with(['success' => 'Update Data Berhasil']);
    }
}
