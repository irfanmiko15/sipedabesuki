<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class FormPendaftaranController extends Controller
{
    public function index(){
        $data=DB::table('tb_form_pendaftaran')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_form_pendaftaran')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.formpendaftaran',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $data = new \App\FormPendaftaranModel;
      
        
        $file->move('public/berkas/formpendaftaran', $new_name);
        $data->id_user=Auth::user()->id;
        $data->nama_file=$new_name;
        $data->save();
        return redirect('form-pendaftaran')->with(['success' => 'Upload form pendaftaran berhasil']);;  
        
    }
    public function delete($id){
        $data = DB::table('tb_form_pendaftaran')->whereId($id);
        $datas=$data->first();
            if(file_exists("public/berkas/formpendaftaran/$datas->nama_file")){
                unlink("public/berkas/formpendaftaran/$datas->nama_file");
                $data->delete();
                return redirect('form-pendaftaran')->with(['success' => 'Hapus Form Pendaftaran Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
