<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login(Request $request) {

        $email = $request->email;
        $password = $request->password;

        $login = User::where(['email' => $email, 'password' => $password])->first();


        if (!empty($login)) {

               //Store Session
               auth()->login($login);
               $request->session()->put(['id' => $login->id]);
              //  dd($login->role_user);

               if($login->role_user == '1'){
                     return view('home');
               }
               else{
                     return redirect('/');
               }
        } else {
               return back()->with('error', 'Email Or Password Wrong!');
        }
 }
 
       
       public function logout(Request $request) {
              Session::forget('id');
              if (!Session::has('id')) {
                     return redirect('/');
              }
       }
}
