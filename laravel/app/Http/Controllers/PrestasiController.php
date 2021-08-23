<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
class PrestasiController extends Controller
{
    public function index(){
        
        $data=DB::table('tb_prestasi')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_prestasi')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.prestasi',['data'=>$data]);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpg,png,jpeg|max:1024',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->with(['error'=>'Error Upload Berkas']);
        }
        else{
            $file = $request->file('file');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $data = new \App\PrestasiModel;
            $file->move('public/dist/img/prestasi', $new_name);
            $data->id_user=Auth::user()->id;
            $data->prestasi=$request->prestasi;
            $data->tingkat=$request->tingkat;
            $data->tahun=$request->tahun;
            $data->nama_file=$new_name;
            $data->save();
            return redirect()->back()->with(['success' => 'Tambah Data berhasil']);;  
        }
      
        
    }
    public function delete($id){
        $data = DB::table('tb_prestasi')->whereId($id);
        $datas=$data->first();
            if(file_exists("public/dist/img/prestasi/$datas->nama_file")){
                unlink("public/dist/img/prestasi/$datas->nama_file");
                $data->delete();
                return  redirect()->back()->with(['success' => 'Hapus Data Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
