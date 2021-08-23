<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatePasswordRequest;
use Hash;
class PasswordController extends Controller
{
    public function index()
    {
        return view('cms.pages.changepassword');
    }
    /**
     * @param UpdatePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->back()->with(['success' => 'Ganti Password berhasil']);;  
    }
}
