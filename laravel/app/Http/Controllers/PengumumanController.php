<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PengumumanController extends Controller
{

    public function index(){
        $result=null;
        return view('webpublic.pengumuman',['result'=>$result]);
    }
    public function search(Request $request){
        $result = DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.id','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah','users.seleksi_akhir','users.tanggal_lahir','users.tempat_lahir')->where('email','=',$request->email)->where('users.tahun_penerimaan','=', date('Y'))->get();
        if(count($result)==0){
            
            return redirect('pengumuman')->with(['error' => 'Email Tidak Terdaftar']);; 
        }
        else{
         
            return view('webpublic.pengumuman',['result'=>$result]);
        }
    }
    
}
