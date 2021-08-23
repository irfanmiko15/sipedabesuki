<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
class FotoRumahController extends Controller
{
    public function index(){
        $data=DB::table('tb_foto_rumah')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_foto_rumah')->where('id_user','=',Auth::user()->id)->count();
        return view('cms.pages.fotorumah',['data'=>$data,'total'=>$total]);
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
            $data = new \App\FotoRumahModel;
            $file->move('public/dist/img/fotorumah', $new_name);
            $data->jenis=$request->jenis;
            $data->id_user=Auth::user()->id;
            $data->nama_file=$new_name;
            $data->save();
            return redirect('foto-rumah')->with(['success' => 'Tambah Foto berhasil']);;  
        }
      
    }
    public function delete($id){
        $data = DB::table('tb_foto_rumah')->whereId($id);
        $datas=$data->first();
            if(file_exists("public/dist/img/fotorumah/$datas->nama_file")){
                unlink("public/dist/img/fotorumah/$datas->nama_file");
                $data->delete();
                return redirect('foto-rumah')->with(['success' => 'Hapus Foto Berhasil']);;  
              }else{
                dd('File does not exists.');
            }
    }
}
