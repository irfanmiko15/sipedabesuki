<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
class SuratPernyataanController extends Controller
{
    public function index(){
        $data=DB::table('tb_surat_pernyataan')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_surat_pernyataan')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.suratpernyataan',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf|max:1024',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->with(['error'=>'Error Upload Berkas']);
        }
        else{
            $file = $request->file('file');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $data = new \App\SuratPernyataanModel;
        
            
            $file->move('public/berkas/suratpernyataan', $new_name);
            $data->id_user=Auth::user()->id;
            $data->nama_file=$new_name;
            $data->save();
            return redirect('surat-pernyataan')->with(['success' => 'Tambah Berkas berhasil']);;
        }
          
        
    }
    public function delete($id){
        $data = DB::table('tb_surat_pernyataan')->whereId($id);
        $datas=$data->first();
            if(file_exists("public/berkas/suratpernyataan/$datas->nama_file")){
                unlink("public/berkas/suratpernyataan/$datas->nama_file");
                $data->delete();
                return redirect('surat-pernyataan')->with(['success' => 'Hapus Berkas Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
