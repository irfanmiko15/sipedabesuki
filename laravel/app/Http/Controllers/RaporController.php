<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
class RaporController extends Controller
{
    public function index(){
        $data=DB::table('tb_rapor')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_rapor')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.rapor',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->with(['error'=>'Error Upload Berkas']);
        }
        else{
            $file = $request->file('file');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $data = new \App\RaporModel;
          
            
            $file->move('public/berkas/rapor', $new_name);
            $data->id_user=Auth::user()->id;
            $data->nama_file=$new_name;
            $data->save();
            return redirect('rapor')->with(['success' => 'Tambah Berkas berhasil']);;  
        }
       
        
    }
    public function delete($id){
        $data = DB::table('tb_rapor')->whereId($id);
        $datas=$data->first();
            if(file_exists("public/berkas/rapor/$datas->nama_file")){
                unlink("public/berkas/rapor/$datas->nama_file");
                $data->delete();
                return redirect('rapor')->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
