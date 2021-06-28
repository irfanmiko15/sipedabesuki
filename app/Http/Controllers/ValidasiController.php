<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class ValidasiController extends Controller
{
    public function index(){
        return view('cms.pages.finalisasi');
    }
    public function submit(){
        
    }
}
