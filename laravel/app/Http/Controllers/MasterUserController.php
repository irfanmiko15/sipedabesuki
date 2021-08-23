<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
class MasterUserController extends Controller
{
    public function indexsma(){
        $pesertasma=DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.id','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah')->where('users.role','=','SMA')->get();
        $sekolah=DB::table('tb_sekolah')->get();
        return view('cms.pages.master-user-sma',['pesertasma'=>$pesertasma,'sekolah'=>$sekolah]);
    }
    public function indexs1(){
       $pesertas1=DB::table('users')->join('tb_sekolah','users.asal_sekolah','=','tb_sekolah.id')->select('users.id','tb_sekolah.nama_sekolah','users.alamat_user','users.name','users.no_telp','users.status_user','users.email','users.role','users.tahun_penerimaan','users.asal_sekolah')->where('users.role','=','S1')->get();
       $sekolah=DB::table('tb_sekolah')->get();
       return view('cms.pages.master-user-s1',['pesertas1'=>$pesertas1,'sekolah'=>$sekolah]);
    }
    public function create(Request $request){
        $data = new \App\User;
        $data1 = new \App\NilaiAkhirModel;
        if($data::where('email',$request->email)->exists()){
            return redirect()->back()->with('error', 'Gagal Menambahkan Data,Email Sudah Terdaftar');
        }
        else{
            if($request->role=='SMA'){
                $data->name=$request->name;
                $data->email=$request->email;
                $data->password=Hash::make($request->password);
                $data->asal_sekolah=$request->asal_sekolah;
                $data->role='SMA';
                $data->tahun_penerimaan=$request->tahun_penerimaan;
                $data->status_user='aktif';
                $data->status_daftar='Belum Terdaftar';
                $data->save();
                $data1->id_user=$data->id;
                $data1->save();
                return redirect('master-user-sma')->with(['success' => 'Tambah User SMA berhasil']);
            }
            else{
                $data->name=$request->name;
                $data->email=$request->email;
                $data->password=Hash::make($request->password);
                $data->asal_sekolah=$request->asal_sekolah;
                $data->role='S1';
                $data->tahun_penerimaan=$request->tahun_penerimaan;
                $data->status_user='aktif';
                $data->status_daftar='Belum Terdaftar';
                $data->save();
                $data1->id_user=$data->id;
                $data1->save(); 
                return redirect('master-user-s1')->with(['success' => 'Tambah User S1 berhasil']);
            }
        }
        
       
    }
    public function update(Request $request){

        $form_data = array(
            'name'=>$request->name,
            'asal_sekolah'=>$request->asal_sekolah,
            'tahun_penerimaan'=>$request->tahun_penerimaan
            );
            DB::table('users')->where('id',$request->id)->update($form_data);
            return redirect()->back()->with('success', 'Update User User Berhasil');  
    }
    public function delete($id){
        $data = DB::table('users')->whereId($id)->delete();
        return redirect()->back()->with('success', 'Hapus Data User Berhasil');  
    }
    public function nonaktif($id){
        $form_data = array(
            'status_user' => 'nonaktif',
            
            );
            DB::table('users')->where('id',$id)->update($form_data);
            return redirect()->back()->with('success', 'Nonaktif User Berhasil');  
      
    }
    public function aktif($id){
        $form_data = array(
            'status_user' => 'aktif',
            
            );
            DB::table('users')->where('id',$id)->update($form_data);
            return redirect()->back()->with('success', 'User Berhasil di aktifkan');   
    }
}
