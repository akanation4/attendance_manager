<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $member = Member::where('id', $request->id)->first();

        if (Hash::check($request->password, $member->password)) {
            session('id', $member->id);

            session()->flash('flash_flg', 1);
            session()->flash('flash_msg', 'ログインしました。');

            return redirect()->route('');
        } else {
            return view('login', ['login_error' => '1']);
        }
    }

    public function logout()
    {
        session()->forget('id');
        return redirect()->route('works.index');
    }
}
