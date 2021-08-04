<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm()
    {
        // $user = Auth::user();
        return view('auth.login');
    }
    public function Postlogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('msg', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }




    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard');
    }

    public function getRegForm()
    {
        return view('auth.register');
    }

    public function postReg(Request $request)
    {
        $model = new User();
        // gán giá trị cho các thuộc tính của object sử dụng massassign ($fillable trong model)
        $model->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $model->save();
        return redirect(route('loginForm'));
    }
}