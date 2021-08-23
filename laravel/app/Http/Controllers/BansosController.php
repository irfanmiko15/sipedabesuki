<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use DB;
use Auth;
use Validator;

class BansosController extends Controller
{
    public function index(){
        $data=DB::table('tb_bansos')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_bansos')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.bansos',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf|max:2048',
        ]);
        
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->with(['error'=>'Error Upload Berkas']);
        }
        else{
            $file = $request->file('file');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $data = new \App\BansosModel;
          
            $data->jenis=$request->jenis;
            $file->move('public/berkas/bansos', $new_name);
            $data->id_user=Auth::user()->id;
            $data->nama_file=$new_name;
            $data->save();
            return redirect()->back()->with(['success' => 'Tambah Berkas berhasil']);;  
        }
        
         
    }
    public function delete($id){
        $data = DB::table('tb_bansos')->whereId($id);
        $datas=$data->first();
            if(file_exists("public/berkas/bansos/$datas->nama_file")){
                unlink("public/berkas/bansos/$datas->nama_file");
                $data->delete();
                return  redirect()->back()->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
