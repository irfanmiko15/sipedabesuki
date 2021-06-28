<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class IjazahSkhuController extends Controller
{
    public function index(){
        $data=DB::table('tb_ijazah_skhu')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_ijazah_skhu')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.ijazahskhu',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $data = new \App\IjazahSkhuModel;

        
        $file->move(public_path('berkas/ijazahskhu'), $new_name);
        $data->id_user=Auth::user()->id;
        $data->jenis=$request->jenis;
        $data->nama_file=$new_name;
        $data->save();
        return redirect('ijazah-skhu')->with(['success' => 'Tambah Berkas  berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_ijazah_skhu')->whereId($id);
        $datas=$data->first();
            if(file_exists(public_path("berkas/ijazahskhu/$datas->nama_file"))){
                unlink(public_path("berkas/ijazahskhu/$datas->nama_file"));
                $data->delete();
                return redirect('ijazahskhu')->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
