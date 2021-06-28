<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class RaporController extends Controller
{
    public function index(){
        $data=DB::table('tb_rapor')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_rapor')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.rapor',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $data = new \App\RaporModel;
      
        
        $file->move(public_path('berkas/rapor'), $new_name);
        $data->id_user=Auth::user()->id;
        $data->nama_file=$new_name;
        $data->save();
        return redirect('rapor')->with(['success' => 'Tambah Berkas berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_rapor')->whereId($id);
        $datas=$data->first();
            if(file_exists(public_path("berkas/rapor/$datas->nama_file"))){
                unlink(public_path("berkas/rapor/$datas->nama_file"));
                $data->delete();
                return redirect('rapor')->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
