<?php

namespace App\Http\Controllers;
use Auth;
use App\Admin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
      public function ShowAdminLogin()
      {

        return view('admin.AdminLogin');
      }
      public function adminlogin(Request $request)
      {
        // $admin = Admin::all();
        // dd($admin);
        $login = ["email" => "$request->email", "password" => $request->password];
        if (Auth::guard('admin')->attempt($login)) {
          return redirect('admin/home');
        }
        return redirect('admin');


      }
      public function logout()
      {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
      }
  
    }
