<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class ValidasiController extends Controller
{
    public function index(){
        $data=DB::table('users')->where('id','=',Auth::user()->id)->get();
       
        return view('cms.pages.finalisasi',['data'=>$data]);
    }
    public function submit(){
        if(Auth::user()->role=='S1'){
            $buktipelajar=DB::table('tb_bukti_pelajar')->where('id_user','=',Auth::user()->id)->count();
            $datadiri=DB::table('users')->where('id','=',Auth::user()->id)->count();
            $datarumah=DB::table('tb_data_rumah')->where('id_user','=',Auth::user()->id)->count();
            $fotodiri=DB::table('tb_foto_diri')->where('id_user','=',Auth::user()->id)->count();
            $fotorumah=DB::table('tb_foto_rumah')->where('id_user','=',Auth::user()->id)->count();
            $identitas=DB::table('tb_identitas')->where('id_user','=',Auth::user()->id)->count();
            $ijazahskhu=DB::table('tb_ijazah_skhu')->where('id_user','=',Auth::user()->id)->count();
            $rapor=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','rapor')->count();
            $un=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','un')->count();
            $us=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','us')->count();
            $dataorangtua=DB::table('tb_data_orang_tua')->where('id_user','=',Auth::user()->id)->count();
            $pendidikans1=DB::table('tb_pendidikan_s1')->where('id_user','=',Auth::user()->id)->count();
            $penghasilan=DB::table('tb_penghasilan')->where('id_user','=',Auth::user()->id)->count();
            $berkasrapor=DB::table('tb_rapor')->where('id_user','=',Auth::user()->id)->count();
            $riwayatpendidikan=DB::table('tb_riwayat_pendidikan')->where('id_user','=',Auth::user()->id)->count();
            $sktm=DB::table('tb_sktm')->where('id_user','=',Auth::user()->id)->count();
            $suratpernyataan=DB::table('tb_surat_pernyataan')->where('id_user','=',Auth::user()->id)->count();
            $tagihan=DB::table('tb_tagihan')->where('id_user','=',Auth::user()->id)->count();
            $tanggungan=DB::table('tb_tanggungan')->where('id_user','=',Auth::user()->id)->count();
            $ukt=DB::table('tb_ukt')->where('id_user','=',Auth::user()->id)->count();

            if($buktipelajar==0){
                return redirect()->back()->with(['error'=>'bukti penerimaan belum diupload']);
            }
            else if($datadiri==0){
                return redirect()->back()->with(['error'=>'data diri belum lengkap']);
            }
            else if($datarumah==0){
                return redirect()->back()->with(['error'=>'data rumah belum lengkap']);
            }
            else if($fotodiri==0){
                return redirect()->back()->with(['error'=>'foto diri belum diupload']);
            }
            else if($fotorumah==0){
                return redirect()->back()->with(['error'=>'foto rumah belum diupload']);
            }
            else if($identitas==0){
                return redirect()->back()->with(['error'=>'identitas belum diupload']);
            }
            else if($ijazahskhu==0){
                return redirect()->back()->with(['error'=>'ijazah/skhu belum diupload']);
            }
            else if($rapor==0){
                return redirect()->back()->with(['error'=>'nilai rapor belum lengkap']);
            }
            else if($un==0){
                return redirect()->back()->with(['error'=>'nilai UN belum lengkap']);
            }
            else if($us==0){
                return redirect()->back()->with(['error'=>'nilai US belum lengkap']);
            }
            else if($dataorangtua==0){
                return redirect()->back()->with(['error'=>'data orangtua belum lengkap']);
            }
            else if($pendidikans1==0){
                return redirect()->back()->with(['error'=>'data pendidikan S1 belum lengkap']);
            }
            else if($penghasilan==0){
                return redirect()->back()->with(['error'=>'berkas penghasilan belum diupload']);
            }
            else if($berkasrapor==0){
                return redirect()->back()->with(['error'=>'berkas rapor belum diupload']);
            }
            else if($riwayatpendidikan==0){
                return redirect()->back()->with(['error'=>'data riwayat pendidikan belum lengkap']);
            }
            else if($sktm==0){
                return redirect()->back()->with(['error'=>'berkas SKTM belum diupload']);
            }
            else if($suratpernyataan==0){
                return redirect()->back()->with(['error'=>'berkas surat pernyataan belum diupload']);
            }
            else if($tanggungan==0){
                return redirect()->back()->with(['error'=>'data tanggungan belum lengkap']);
            }
            else if($ukt==0){
                return redirect()->back()->with(['error'=>'berkas pembayaran UKT semester 1 belum diupload']);
            }
            else{
                $form_data = array(
                    'status_daftar'=>'Terdaftar'
                    );
                    DB::table('users')->where('id',Auth::user()->id)->update($form_data);
                    return redirect()->back()->with('success', 'Validasi File Berhasil');  
            }
        }
        else{
            $buktipelajar=DB::table('tb_bukti_pelajar')->where('id_user','=',Auth::user()->id)->count();
            $datadiri=DB::table('users')->where('id','=',Auth::user()->id)->count();
            $datarumah=DB::table('tb_data_rumah')->where('id_user','=',Auth::user()->id)->count();
            $fotodiri=DB::table('tb_foto_diri')->where('id_user','=',Auth::user()->id)->count();
            $fotorumah=DB::table('tb_foto_rumah')->where('id_user','=',Auth::user()->id)->count();
            $identitas=DB::table('tb_identitas')->where('id_user','=',Auth::user()->id)->count();
            $ijazahskhu=DB::table('tb_ijazah_skhu')->where('id_user','=',Auth::user()->id)->count();
            $rapor=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','rapor')->count();
            $un=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','un')->count();
            $us=DB::table('tb_nilai_rapor')->where('id_user','=',Auth::user()->id)->where('jenis','=','us')->count();
            $dataorangtua=DB::table('tb_data_orang_tua')->where('id_user','=',Auth::user()->id)->count();
            $penghasilan=DB::table('tb_penghasilan')->where('id_user','=',Auth::user()->id)->count();
            $berkasrapor=DB::table('tb_rapor')->where('id_user','=',Auth::user()->id)->count();
            $riwayatpendidikan=DB::table('tb_riwayat_pendidikan')->where('id_user','=',Auth::user()->id)->count();
            $sktm=DB::table('tb_sktm')->where('id_user','=',Auth::user()->id)->count();
            $suratpernyataan=DB::table('tb_surat_pernyataan')->where('id_user','=',Auth::user()->id)->count();
            $tagihan=DB::table('tb_tagihan')->where('id_user','=',Auth::user()->id)->count();
            $tanggungan=DB::table('tb_tanggungan')->where('id_user','=',Auth::user()->id)->count();
            if($buktipelajar==0){
                return redirect()->back()->with(['error'=>'bukti penerimaan belum diupload']);
            }
            else if($datadiri==0){
                return redirect()->back()->with(['error'=>'data diri belum lengkap']);
            }
            else if($datarumah==0){
                return redirect()->back()->with(['error'=>'data rumah belum lengkap']);
            }
            else if($fotodiri==0){
                return redirect()->back()->with(['error'=>'foto diri belum diupload']);
            }
            else if($fotorumah==0){
                return redirect()->back()->with(['error'=>'foto rumah belum diupload']);
            }
            else if($identitas==0){
                return redirect()->back()->with(['error'=>'identitas belum diupload']);
            }
            else if($ijazahskhu==0){
                return redirect()->back()->with(['error'=>'ijazah/skhu belum diupload']);
            }
            else if($rapor==0){
                return redirect()->back()->with(['error'=>'nilai rapor belum lengkap']);
            }
            else if($un==0){
                return redirect()->back()->with(['error'=>'nilai UN belum lengkap']);
            }
            else if($us==0){
                return redirect()->back()->with(['error'=>'nilai US belum lengkap']);
            }
            else if($dataorangtua==0){
                return redirect()->back()->with(['error'=>'data orangtua belum lengkap']);
            }
            else if($penghasilan==0){
                return redirect()->back()->with(['error'=>'berkas penghasilan belum diupload']);
            }
            else if($berkasrapor==0){
                return redirect()->back()->with(['error'=>'berkas rapor belum diupload']);
            }
            else if($riwayatpendidikan==0){
                return redirect()->back()->with(['error'=>'data riwayat pendidikan belum lengkap']);
            }
            else if($sktm==0){
                return redirect()->back()->with(['error'=>'berkas SKTM belum diupload']);
            }
            else if($suratpernyataan==0){
                return redirect()->back()->with(['error'=>'berkas surat pernyataan belum diupload']);
            }
            else if($tanggungan==0){
                return redirect()->back()->with(['error'=>'data tanggungan belum lengkap']);
            }
            else{
                $form_data = array(
                    'status_daftar'=>'Terdaftar'
                    );
                    DB::table('users')->where('id',Auth::user()->id)->update($form_data);
                    return redirect()->back()->with('success', 'Validasi File Berhasil');  
            }
        
        }
    }
}
