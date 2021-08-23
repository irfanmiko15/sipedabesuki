<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Crypt;
class SeleksiWawancaraController extends Controller
{
    public function indexsma(){
        $pesertasma=DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.tanggal_wawancara','users.jam_wawancara','users.pic_wawancara','users.id','users.jenis_kelamin','users.no_telp','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah')->where('users.role','=','SMA')->where('users.status_user','=','aktif')->where('users.seleksi_berkas','=','Lolos')->where('users.tahun_penerimaan','=', date('Y'))->orderBy('tb_sekolah.id','ASC')->get();  
        
        return view('cms.pages.seleksiwawancarasma',['pesertasma'=>$pesertasma]);
    }
    public function indexs1(){
       
        $pesertas1=DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.tanggal_wawancara','users.jam_wawancara','users.pic_wawancara','users.id','users.jenis_kelamin','users.no_telp','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah')->where('users.role','=','S1')->where('users.status_user','=','aktif')->where('users.seleksi_berkas','=','Lolos')->where('users.tahun_penerimaan','=', date('Y'))->orderBy('tb_sekolah.id','ASC')->get();  
        return view('cms.pages.seleksiwawancaras1',['pesertas1'=>$pesertas1]);
        
    }
    
    public function jadwal(Request $request){
        $form_data = array(
            'tanggal_wawancara'=>$request->tanggal_wawancara,
            'jam_wawancara'=>$request->jam_wawancara,
            'pic_wawancara'=>$request->pic_wawancara,
             );
            DB::table('users')->where('id',$request->id)->update($form_data);
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
        
        return view('cms.pages.detailseleksiwawancaras1',[
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
        return view('cms.pages.detailseleksiwawancarasma',[
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
            ]);
    }

    public function loloss1($id){
        $form_data = array(
            'seleksi_berkas'=>'Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect('seleksi-administrasi-s1')->with('success', 'Update Data Berhasil');  
    }
    public function lolosssma($id){
        $form_data = array(
            'seleksi_berkas'=>'Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect('seleksi-administrasi-sma')->with('success', 'Update Data Berhasil');  
    }
    public function tidakloloss1($id){
        $form_data = array(
            'seleksi_berkas'=>'Tidak Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect('seleksi-administrasi-s1')->with('success', 'Update Data Berhasil');  
    }
    public function tidaklolosssma($id){
        $form_data = array(
            'seleksi_berkas'=>'Tidak Lolos',
            );
            DB::table('users')->whereId($id)->update($form_data);
            return redirect('seleksi-administrasi-sma')->with('success', 'Update Data Berhasil');  
    }
}
