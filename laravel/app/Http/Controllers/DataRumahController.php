<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class DataRumahController extends Controller
{
    public function index(){
        $data=DB::table('tb_data_rumah')->where('id_user','=',Auth::user()->id)->get();
        $total=DB::table('tb_data_rumah')->where('id_user','=',Auth::user()->id)->count();
        
        return view('cms.pages.datarumah',['data'=>$data,'total'=>$total]);
    }
    public function create(Request $request){
        $data = new \App\DataRumahModel;
       
        $data->id_user=Auth::user()->id;
        $data->kepemilikan=$request->kepemilikan;
        $data->luas_bangunan=$request->luas_bangunan;
        $data->luas_tanah=$request->luas_tanah;
        $data->jumlah_orang=$request->jumlah_orang;
        $data->sumber_air=$request->sumber_air;
        $data->sumber_listrik=$request->sumber_listrik;
        if($request->sumber_listrik=='PLN'){
            if($request->value_listrik==null){
                $data->value_listrik="";
            }
            else{
                $data->value_listrik=$request->value_listrik;
            }
           
        }
        $data->transportasi_harian=$request->transportasi_harian;
        if($request->transportasi_harian=="Lainnya"){
            if($request->value_transportasi==null){
                $data->value_transportasi="";
            }
            else{
                $data->value_transportasi=$request->value_transportasi;
            }
           
        }
        $data->lama_menetap=$request->lama_menetap;
        $data->save();
        return redirect()->back()->with(['success' => 'Tambah Data berhasil']);;  
        
    }
    public function update(Request $request){
        if($request->sumber_listrik=="PLN"){
            if($request->transportasi_harian=="Lainnya"){
                $form_data = array(
                    'kepemilikan'=>$request->kepemilikan,
                    'luas_bangunan'=>$request->luas_bangunan,
                    'luas_tanah'=>$request->luas_tanah,
                    'jumlah_orang'=>$request->jumlah_orang,
                    'sumber_air'=>$request->sumber_air,
                    'sumber_listrik'=>$request->sumber_listrik,
                    'value_listrik'=>$request->value_listrik,
                    'transportasi_harian'=>$request->transportasi_harian,
                    'value_transportasi'=>$request->value_transportasi,
                    'lama_menetap'=>$request->lama_menetap,
                  
                   );
                DB::table('tb_data_rumah')->where('id',$request->id)->update($form_data);
                return redirect()->back()->with('success', 'Update Data Berhasil');  
            }
            else{
                $form_data = array(
                    'kepemilikan'=>$request->kepemilikan,
                    'luas_bangunan'=>$request->luas_bangunan,
                    'luas_tanah'=>$request->luas_tanah,
                    'jumlah_orang'=>$request->jumlah_orang,
                    'sumber_air'=>$request->sumber_air,
                    'sumber_listrik'=>$request->sumber_listrik,
                    'value_listrik'=>$request->value_listrik,
                   
                    'transportasi_harian'=>$request->transportasi_harian,
                    'value_transportasi'=>'',
                    'lama_menetap'=>$request->lama_menetap,
                  
                   );
                DB::table('tb_data_rumah')->where('id',$request->id)->update($form_data);
                return redirect()->back()->with('success', 'Update Data Berhasil');  

            }
        }
        else{
            if($request->transportasi_harian=="Lainnya"){
                $form_data = array(
                    'kepemilikan'=>$request->kepemilikan,
                    'luas_bangunan'=>$request->luas_bangunan,
                    'luas_tanah'=>$request->luas_tanah,
                    'jumlah_orang'=>$request->jumlah_orang,
                    'sumber_air'=>$request->sumber_air,
                    'sumber_listrik'=>$request->sumber_listrik,
                    'value_listrik'=>'',
                    'transportasi_harian'=>$request->transportasi_harian,
                    'value_transportasi'=>$request->value_transportasi,
                    'lama_menetap'=>$request->lama_menetap,
                  
                   );
                DB::table('tb_data_rumah')->where('id',$request->id)->update($form_data);
                return redirect()->back()->with('success', 'Update Data Berhasil');  
            }
            else{
                $form_data = array(
                    'kepemilikan'=>$request->kepemilikan,
                    'luas_bangunan'=>$request->luas_bangunan,
                    'luas_tanah'=>$request->luas_tanah,
                    'jumlah_orang'=>$request->jumlah_orang,
                    'sumber_air'=>$request->sumber_air,
                    'sumber_listrik'=>$request->sumber_listrik,
                    'value_listrik'=>'',
                    'transportasi_harian'=>$request->transportasi_harian,
                    'value_transportasi'=>'',
                    'lama_menetap'=>$request->lama_menetap,
                  
                   );
                DB::table('tb_data_rumah')->where('id',$request->id)->update($form_data);
                return redirect()->back()->with('success', 'Update Data Berhasil');  

            }

        }
       
    }
}
