<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DataDiriController extends Controller
{
    public function index(){
        $data=DB::table('users')->where('id','=',Auth::user()->id)->get();
        
        return view('cms.pages.datadiri',['data'=>$data]);
    }
    public function update(Request $request){
        
        $form_data = array(
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'no_telp'=>$request->no_telp,
                            'jenis_kelamin'=>$request->jenis_kelamin,
                            'agama'=>$request->agama,
                            'tempat_lahir'=>$request->tempat_lahir,
                            'tanggal_lahir'=>$request->tanggal_lahir,
                            'alamat_kk'=>$request->alamat_kk,
                            'alamat_user'=>$request->alamat_user,
                           );
            DB::table('users')->where('id',$request->id)->update($form_data);
            return redirect()->back()->with('success', 'Update Data Berhasil');  
    }
}
