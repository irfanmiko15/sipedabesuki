<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $role=Auth::user()->role;
            $status=Auth::user()->status_user;
            if($role == 'admin'){
                return redirect()->intended('dashboard');
            }
            else{
                if($status=='aktif'){
                    
                    return redirect()->intended('dashboard-user');
                }
                else{
                    Auth::logout();
                    return redirect('/')->with('error', 'Akun Anda Sudah Tidak Aktif');
                }
                
            }
            
        }

        return redirect('/')->with('error', 'Opps! You have entered invalid credentials');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
