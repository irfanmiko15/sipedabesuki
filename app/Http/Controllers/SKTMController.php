<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SKTMController extends Controller
{
    public function index(){
        $data=DB::table('tb_sktm')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_sktm')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.sktm',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $data = new \App\SktmModel;
      
        
        $file->move(public_path('berkas/sktm'), $new_name);
        $data->id_user=Auth::user()->id;
        $data->nama_file=$new_name;
        $data->save();
        return redirect('sktm')->with(['success' => 'Tambah Berkas sktm berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_sktm')->whereId($id);
        $datas=$data->first();
            if(file_exists(public_path("berkas/sktm/$datas->nama_file"))){
                unlink(public_path("berkas/sktm/$datas->nama_file"));
                $data->delete();
                return redirect('sktm')->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
