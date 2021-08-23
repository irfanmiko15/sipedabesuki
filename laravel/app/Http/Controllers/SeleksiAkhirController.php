<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class SeleksiAkhirController extends Controller
{
    public function indexs1(){
        $pesertas1=DB::table('users')->join('tb_nilai_akhir','tb_nilai_akhir.id_user','=','users.id')->join('tb_sekolah','tb_sekolah.id','=','users.asal_sekolah')->select('tb_sekolah.nama_sekolah','users.id','tb_nilai_akhir.total_nilai','tb_nilai_akhir.total_PA','tb_nilai_akhir.total_TT','tb_nilai_akhir.total_KK','users.seleksi_akhir','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah','users.jenis_kelamin')->where('users.role','=','S1')->where('users.seleksi_berkas','=','Lolos')->orderBy('tb_nilai_akhir.total_nilai','ASC')->get();
        return view('cms.pages.seleksiakhirs1',['pesertas1'=>$pesertas1]);
    }
    public function indexsma(){
        $pesertasma=DB::table('users')->join('tb_nilai_akhir','tb_nilai_akhir.id_user','=','users.id')->join('tb_sekolah','tb_sekolah.id','=','users.asal_sekolah')->select('tb_sekolah.nama_sekolah','users.id','tb_nilai_akhir.total_nilai','tb_nilai_akhir.total_PA','tb_nilai_akhir.total_TT','tb_nilai_akhir.total_KK','tb_nilai_akhir.total_nilai','users.seleksi_akhir','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah','users.jenis_kelamin')->where('users.role','=','SMA')->where('users.seleksi_berkas','=','Lolos')->orderBy('tb_nilai_akhir.total_nilai','ASC')->get();
        return view('cms.pages.seleksiakhirsma',['pesertasma'=>$pesertasma]);
    }
    public function loloss1($id){
        $form_data = array(
            'seleksi_akhir'=>'Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    public function lolossma($id){
        $form_data = array(
            'seleksi_akhir'=>'Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    public function tidakloloss1($id){
        $form_data = array(
            'seleksi_akhir'=>'Tidak Lolos',
            'status_user' => 'nonaktif',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    public function tidaklolossma($id){
        $form_data = array(
            'seleksi_akhir'=>'Tidak Lolos',
            'status_user' => 'nonaktif',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }

}
