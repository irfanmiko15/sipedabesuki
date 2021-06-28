<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class IdentitasController extends Controller
{
    public function index(){
        $data=DB::table('tb_identitas')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_identitas')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.identitas',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $data = new \App\IdentitasModel;
      
        
        $file->move(public_path('berkas/identitas'), $new_name);
        $data->id_user=Auth::user()->id;
        $data->nama_file=$new_name;
        $data->save();
        return redirect('identitas')->with(['success' => 'Tambah Berkas berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_identitas')->whereId($id);
        $datas=$data->first();
            if(file_exists(public_path("berkas/identitas/$datas->nama_file"))){
                unlink(public_path("berkas/identitas/$datas->nama_file"));
                $data->delete();
                return redirect('identitas')->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
