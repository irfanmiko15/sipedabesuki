<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class BuktiPenerimaanController extends Controller
{
    public function index(){
        $data=DB::table('tb_bukti_pelajar')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_bukti_pelajar')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.buktipenerimaan',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $data = new \App\BuktiPelajarModel;
        $file->move(public_path('dist/img/buktipenerimaan'), $new_name);
      
        $data->id_user=Auth::user()->id;
        $data->nama_file=$new_name;
        $data->save();
        return redirect()->back()->with(['success' => 'Tambah Foto berhasil']);;  
    }
    public function delete($id){
        $data = DB::table('tb_bukti_pelajar')->whereId($id);
        $datas=$data->first();
            if(file_exists(public_path("dist/img/buktipenerimaan/$datas->nama_file"))){
                unlink(public_path("dist/img/buktipenerimaan/$datas->nama_file"));
                $data->delete();
                return redirect()->back()->with(['success' => 'Hapus Foto Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
