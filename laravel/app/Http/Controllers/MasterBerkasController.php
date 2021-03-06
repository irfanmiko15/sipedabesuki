<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use Validator;
class MasterBerkasController extends Controller
{
    public function index()
    {
        $sma=DB::table('tb_berkas_admin')->where('jenjang','=','SMA')->get();
        $s1=DB::table('tb_berkas_admin')->where('jenjang','=','S1')->get();
        return view('cms.pages.master-berkas',['sma'=>$sma,'s1'=>$s1]);
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
        $data = new \App\BerkasAdminModel;
        if($request->jenjang=='SMA'){
            $file->move('public/berkas/masterberkas/SMA', $new_name);
            $data->jenis=$request->keterangan;
            $data->jenjang=$request->jenjang;
            $data->nama_file=$new_name;
            $data->save();
             return redirect('master-berkas')->with(['success' => 'Tambah Berkas SMA berhasil']);;  
        }
        else{
            $file->move('public/berkas/masterberkas/S1', $new_name);
            $data->jenis=$request->keterangan;
            $data->jenjang=$request->jenjang;
            $data->nama_file=$new_name;
            $data->save();
          return redirect('master-berkas')->with(['success' => 'Tambah Berkas S1 berhasil']);;  
        }
        }
        
    }
    public function delete(Request $request){
        $data = DB::table('tb_berkas_admin')->whereId($request->id);
        $datas=$data->first();
        if($datas->jenjang=='SMA'){
            if(file_exists("public/berkas/masterberkas/SMA/$datas->nama_file")){
                unlink("public/berkas/masterberkas/SMA/$datas->nama_file");
                $data->delete();
                return redirect('master-berkas')->with(['success' => 'Hapus Berkas SMA Berhasil']);;  
              }else{
                
               return redirect()->back();
              }
        }
        else{
            if(file_exists("public/berkas/masterberkas/S1/$datas->nama_file")){
                unlink("public/berkas/masterberkas/S1/$datas->nama_file");
                $data->delete();
                return redirect('master-berkas')->with(['success' => 'Hapus Berkas S1 Berhasil']);;  
              }else{
                return redirect()->back();
              }
        }
       
        
    }
    public function show($id){
        $data = DB::table('tb_berkas_admin')->whereId($id)->get();
        return view('cms.pages.detail-berkas',['data'=>$data]);
    }
}
