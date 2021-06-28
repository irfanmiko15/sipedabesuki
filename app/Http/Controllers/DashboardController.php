<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class DashboardController extends Controller
{
    public function indexadmin()
    {   
        $jumlahuser=DB::table('users')->count();
        $userpertahun=DB::table('users')->where('tahun_penerimaan','=',date('Y'))->count();
        $pesetalolospertahun=DB::table('users')->where('seleksi_akhir','=','Lolos')->count();
        $pesertatidaklolospertahun=DB::table('users')->where('seleksi_akhir','=','Tidak Lolos')->count();
        
        return view('cms.pages.dashboardadmin',['jumlahuser'=>$jumlahuser,'userpertahun'=>$userpertahun,'pesertalolos'=>$pesetalolospertahun,'pesertatidaklolos'=>$pesertatidaklolospertahun]);
    }
    public function indexuser()
    {   
        $user=DB::table('users')->whereId(Auth::user()->id)->get();
        $berkas=DB::table('tb_berkas_admin')->get();
        return view('cms.pages.dashboarduser',['user'=>$user,'berkas'=>$berkas]);
    }
    public function downloadfile($id){
        $data=DB::table('tb_berkas_admin')->whereId($id)->get();
        if($data[0]->jenjang=='SMA')
        {
            $myFile = public_path('berkas/masterberkas/SMA/'.$data[0]->nama_file);
            $headers = ['Content-Type: application/pdf'];
            $newName = $data[0]->jenis.'.pdf';

            return response()->download($myFile, $newName, $headers);
        }
        else{
            $myFile = public_path('berkas/masterberkas/S1/'.$data[0]->nama_file);
            $headers = ['Content-Type: application/pdf'];
            $newName = $data[0]->jenis.'.pdf';

            return response()->download($myFile, $newName, $headers);
        }
        

    }
}
