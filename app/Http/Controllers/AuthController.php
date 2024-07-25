<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    // Đăng nhập
public function showFormLogin(){
return view('auth.login');
}
public function login(Request $request){
    $user = $request->validate([

'email' => ['required','string','email','max:255'],
'password' => ['required','string']        
    ]);
if (Auth::attempt($user)){
    return redirect()->intended('admin');
}
return redirect()->back()->withErrors([
    'email' => 'Thông tin người dùng không đúng'
]);
}
    //Đăng kí 
public function showFormRegister(){
    return view('auth.register');
}
public function register(Request $request){
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:8',

    ]);
    $user = User::query()->create($data);

    Auth::login($user);
    return redirect()->intended('admin');
   
}

    //Đăng xuất
    
public function logout(Request $request){
    Auth::logout();
    return redirect('/login');
}
}