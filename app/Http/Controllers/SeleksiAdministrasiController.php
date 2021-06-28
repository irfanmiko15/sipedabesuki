<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;
use Auth;
class SeleksiAdministrasiController extends Controller
{
    public function indexsma(){
        $pesertasma=DB::table('users')->join('tb_nilai_akhir','tb_nilai_akhir.id_user','=','users.id')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.id','tb_nilai_akhir.total_nilai','tb_nilai_akhir.total_PA','tb_nilai_akhir.total_TT','tb_nilai_akhir.total_KK','users.jenis_kelamin','users.no_telp','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah','users.status_daftar')->where('users.role','=','SMA')->where('users.status_user','=','aktif')->where('users.seleksi_berkas','=',null)->where('users.tahun_penerimaan','=', date('Y'))->orderBy('tb_sekolah.id','ASC')->get();  
        
        return view('cms.pages.seleksiadministrasisma',['pesertasma'=>$pesertasma]);
    }
    public function indexs1(){
       
        $pesertas1=DB::table('users')->join('tb_nilai_akhir','tb_nilai_akhir.id_user','=','users.id')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.id','users.jenis_kelamin','tb_nilai_akhir.total_nilai','tb_nilai_akhir.total_PA','tb_nilai_akhir.total_TT','tb_nilai_akhir.total_KK','users.no_telp','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah','users.status_daftar')->where('users.role','=','S1')->where('users.status_user','=','aktif')->where('users.seleksi_berkas','=',null)->where('users.tahun_penerimaan','=', date('Y'))->orderBy('tb_sekolah.id','ASC')->get();  
        return view('cms.pages.seleksiadministrasis1',['pesertas1'=>$pesertas1]);
        
    }
    public function insertnilai(Request $request){
        $data = new \App\NilaiAkhirModel;
        $data->id_user=Auth::user()->id;
        $data->PA1=$request->PA1;
        $data->PA2=$request->PA2;
        $data->PA3=$request->PA3;
        $data->PA4=$request->PA4;
        $data->TT1=$request->TT1;
        $data->KK1=$request->KK1;
        $data->KK2=$request->KK2;
        $data->KK3=$request->KK3;
        $data->KK4=$request->KK4;
        $data->KK5=$request->KK5;
        $data->KK6=$request->KK6;
        $data->total_PA=$request->PA1+$request->PA2+$request->PA3+$request->PA4;
        $data->total_TT=$request->TT1;
        $data->total_KK=$request->KK1+$request->KK2+$request->KK3+$request->KK4+$request->KK5+$request->KK6;
        $data->total_nilai=$request->PA1+$request->PA2+$request->PA3+$request->PA4+$request->TT1+$request->KK1+$request->KK2+$request->KK3+$request->KK4+$request->KK5+$request->KK6;
       
        $data->save();
        return redirect()->back()->with(['success' => 'Simpan Data berhasil']);;  
    }
    public function updatenilai(Request $request){
        $form_data = array(
            'PA1'=>$request->PA1,
            'PA2'=>$request->PA2,
            'PA3'=>$request->PA3,
            'PA4'=>$request->PA4,
            'TT1'=>$request->TT1,
            'KK1'=>$request->KK1,
            'KK2'=>$request->KK2,
            'KK3'=>$request->KK3,
            'KK4'=>$request->KK4,
            'KK5'=>$request->KK5,
            'KK6'=>$request->KK6,
            'total_PA'=>$request->PA1+$request->PA2+$request->PA3+$request->PA4,
            'total_TT'=>$request->TT1,
            'total_KK'=>$request->KK1+$request->KK2+$request->KK3+$request->KK4+$request->KK5+$request->KK6,
            'total_nilai'=>$request->PA1+$request->PA2+$request->PA3+$request->PA4+$request->TT1+$request->KK1+$request->KK2+$request->KK3+$request->KK4+$request->KK5+$request->KK6,
            );
            DB::table('tb_nilai_akhir')->where('id',$request->id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }

    public function shows1($id){
        $id=Crypt::decrypt($id);
        $datadiri=DB::table('users')->whereId($id)->get();   
        $datakeluarga=DB::table('tb_data_orang_tua')->where('id_user','=',$id)->get();
        $datatanggungan=DB::table('tb_tanggungan')->where('id_user','=',$id)->get();
        $datasaudara=DB::table('tb_saudara')->where('id_user','=',$id)->orderBy('anak_ke','ASC')->get();
        $sekolah=DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('tb_sekolah.nama_sekolah','tb_sekolah.alamat','tb_sekolah.no_telp')->where('users.id','=',$id)->get();
        $jumlahsaudara=DB::table('tb_saudara')->where('id_user','=',$id)->orderBy('anak_ke','ASC')->count();
        $datarumah=DB::table('tb_data_rumah')->where('id_user','=',$id)->get();
        $datariwayatpendidikan=DB::table('tb_riwayat_pendidikan')->where('id_user','=',$id)->get();
        $datanilairapor=DB::table('tb_nilai_rapor')->where('jenis','=','rapor')->where('id_user','=',$id)->orderBy('kelas','ASC')->orderBy('semester','ASC')->get();
        $nilaiun=DB::table('tb_nilai_rapor')->where('jenis','=','un')->where('id_user','=',$id)->get();
        $nilaius=DB::table('tb_nilai_rapor')->where('jenis','=','us')->where('id_user','=',$id)->get();
        $dataprestasi=DB::table('tb_prestasi')->where('id_user','=',$id)->get();
        $datapendidikans1=DB::table('tb_pendidikan_s1')->join('tb_jurusan','tb_pendidikan_s1.id_jurusan','=','tb_jurusan.id')->where('id_user','=',$id )->get();
        $fotodiri=DB::table('tb_foto_diri')->where('id_user','=',$id)->get();
        $buktiukt=DB::table('tb_ukt')->where('id_user','=',$id)->get();
        $berkasidentitas=DB::table('tb_identitas')->where('id_user','=',$id)->get();
        $fotorumah=DB::table('tb_foto_rumah')->where('id_user','=',$id)->get();
        $sktm=DB::table('tb_sktm')->where('id_user','=',$id)->get();
        $buktitagihan=DB::table('tb_tagihan')->where('id_user','=',$id)->get();
        $bansos=DB::table('tb_bansos')->where('id_user','=',$id)->get();
        $ijazahskhu=DB::table('tb_ijazah_skhu')->where('id_user','=',$id)->get();
        $penghasilan=DB::table('tb_penghasilan')->where('id_user','=',$id)->get();
        $berkasrapor=DB::table('tb_rapor')->where('id_user','=',$id)->get();
        $suratpernyataan=DB::table('tb_surat_pernyataan')->where('id_user','=',$id)->get();
        $buktipenerimaan=DB::table('tb_bukti_pelajar')->where('id_user','=',$id)->get();
        $ceknilaiakhir=DB::table('tb_nilai_akhir')->where('id_user','=',$id)->count();
        $nilaiakhir=DB::table('tb_nilai_akhir')->where('id_user','=',$id)->get();

        
        return view('cms.pages.detailseleksiadministrasis1',[
            'datadiri'=>$datadiri,
            'sekolah'=>$sekolah,
            'datakeluarga'=>$datakeluarga,
            'datatanggungan'=>$datatanggungan,
            'datasaudara'=>$datasaudara,
            'jumlahsaudara'=>$jumlahsaudara,
            'datarumah'=>$datarumah,
            'datariwayatpendidikan'=>$datariwayatpendidikan,
            'datanilairapor'=>$datanilairapor,
            'nilaiun'=>$nilaiun,
            'nilaius'=>$nilaius,
            'dataprestasi'=>$dataprestasi,
            'datapendidikans1'=>$datapendidikans1,
            'fotodiri'=>$fotodiri,
            'buktiukt'=>$buktiukt,
            'berkasidentitas'=>$berkasidentitas,
            'fotorumah'=>$fotorumah,
            'sktm'=>$sktm,
            'buktitagihan'=>$buktitagihan,
            'bansos'=>$bansos,
            'ijazahskhu'=>$ijazahskhu,
            'berkasrapor'=>$berkasrapor,
            'penghasilan'=>$penghasilan,
            'suratpernyataan'=>$suratpernyataan,
            'buktipenerimaan'=>$buktipenerimaan,
            'ceknilaiakhir'=>$ceknilaiakhir,
            'nilaiakhir'=>$nilaiakhir
            ]);
    }
    public function showsma($id){
        $id=Crypt::decrypt($id);
        $datadiri=DB::table('users')->whereId($id)->get();
        $datakeluarga=DB::table('tb_data_orang_tua')->where('id_user','=',$id)->get();
        $datatanggungan=DB::table('tb_tanggungan')->where('id_user','=',$id)->get();
        $datasaudara=DB::table('tb_saudara')->where('id_user','=',$id)->orderBy('anak_ke','ASC')->get();
        $sekolah=DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('tb_sekolah.nama_sekolah','tb_sekolah.alamat','tb_sekolah.no_telp')->where('users.id','=',$id)->get();
        $jumlahsaudara=DB::table('tb_saudara')->where('id_user','=',$id)->orderBy('anak_ke','ASC')->count();
        $datarumah=DB::table('tb_data_rumah')->where('id_user','=',$id)->get();
        $datariwayatpendidikan=DB::table('tb_riwayat_pendidikan')->where('id_user','=',$id)->get();
        $datanilairapor=DB::table('tb_nilai_rapor')->where('jenis','=','rapor')->where('id_user','=',$id)->orderBy('kelas','ASC')->orderBy('semester','ASC')->get();
        $nilaiun=DB::table('tb_nilai_rapor')->where('jenis','=','un')->where('id_user','=',$id)->get();
        $nilaius=DB::table('tb_nilai_rapor')->where('jenis','=','us')->where('id_user','=',$id)->get();
        $dataprestasi=DB::table('tb_prestasi')->where('id_user','=',$id)->get();
        $datapendidikans1=DB::table('tb_pendidikan_s1')->join('tb_jurusan','tb_pendidikan_s1.id_jurusan','=','tb_jurusan.id')->select('tb_pendidikan_s1.universitas','tb_pendidikan_s1.fakultas','tb_pendidikan_s1.penerimaan','tb_jurusan.nama_jurusan')->where('id_user','=',$id)->get();
        $fotodiri=DB::table('tb_foto_diri')->where('id_user','=',$id)->get();
        $buktiukt=DB::table('tb_ukt')->where('id_user','=',$id)->get();
        $berkasidentitas=DB::table('tb_identitas')->where('id_user','=',$id)->get();
        $fotorumah=DB::table('tb_foto_rumah')->where('id_user','=',$id)->get();
        $sktm=DB::table('tb_sktm')->where('id_user','=',$id)->get();
        $buktitagihan=DB::table('tb_tagihan')->where('id_user','=',$id)->get();
        $bansos=DB::table('tb_bansos')->where('id_user','=',$id)->get();
        $ijazahskhu=DB::table('tb_ijazah_skhu')->where('id_user','=',$id)->get();
        $penghasilan=DB::table('tb_penghasilan')->where('id_user','=',$id)->get();
        $berkasrapor=DB::table('tb_rapor')->where('id_user','=',$id)->get();
        $suratpernyataan=DB::table('tb_surat_pernyataan')->where('id_user','=',$id)->get();
        $buktipenerimaan=DB::table('tb_bukti_pelajar')->where('id_user','=',$id)->get();
        $ceknilaiakhir=DB::table('tb_nilai_akhir')->where('id_user','=',$id)->count();
        $nilaiakhir=DB::table('tb_nilai_akhir')->where('id_user','=',$id)->get();
        
        return view('cms.pages.detailseleksiadministrasis1',[
            'datadiri'=>$datadiri,
            'sekolah'=>$sekolah,
            'datakeluarga'=>$datakeluarga,
            'datatanggungan'=>$datatanggungan,
            'datasaudara'=>$datasaudara,
            'jumlahsaudara'=>$jumlahsaudara,
            'datarumah'=>$datarumah,
            'datariwayatpendidikan'=>$datariwayatpendidikan,
            'datanilairapor'=>$datanilairapor,
            'nilaiun'=>$nilaiun,
            'nilaius'=>$nilaius,
            'dataprestasi'=>$dataprestasi,
            'datapendidikans1'=>$datapendidikans1,
            'fotodiri'=>$fotodiri,
            'buktiukt'=>$buktiukt,
            'berkasidentitas'=>$berkasidentitas,
            'fotorumah'=>$fotorumah,
            'sktm'=>$sktm,
            'buktitagihan'=>$buktitagihan,
            'bansos'=>$bansos,
            'ijazahskhu'=>$ijazahskhu,
            'berkasrapor'=>$berkasrapor,
            'penghasilan'=>$penghasilan,
            'suratpernyataan'=>$suratpernyataan,
            'buktipenerimaan'=>$buktipenerimaan,
            'ceknilaiakhir'=>$ceknilaiakhir,
            'nilaiakhir'=>$nilaiakhir
            ]);
    }

    public function loloss1($id){
        $form_data = array(
            'seleksi_berkas'=>'Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    public function lolossma($id){
        $form_data = array(
            'seleksi_berkas'=>'Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    public function tidakloloss1($id){
        $form_data = array(
            'seleksi_berkas'=>'Tidak Lolos',
            'seleksi_akhir'=>'Tidak Lolos',
            'status_user' => 'nonaktif',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    public function tidaklolossma($id){
        $form_data = array(
            'seleksi_berkas'=>'Tidak Lolos',
            'seleksi_akhir'=>'Tidak Lolos',
            'status_user' => 'nonaktif',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
    

}
