<?php

namespace App\Http\Controllers;
use Auth;
use App\Perusahaan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PerusahaanLoginController extends Controller
{
  public function ShowPerusahaanLogin()
{

  return view('Perusahaan.login');
}
public function Perusahaanlogin(Request $request)
{
  // dd($admin);
  $login = ["email" => "$request->email", "password" => $request->password];
  if (Auth::guard('perusahaan')->attempt($login)) {
    $perusahaan = perusahaan::where('email', $request->email)->first();
    // dd($perusahaan);
    return redirect('/perusahaan/home/'.$perusahaan->id);
  }
  return redirect('/asds');


}
public function logout()
{
  Auth::guard('admin')->logout();
  return redirect('/admin/login');
}
public function showPerusahaanRegister()
{
    return view('Perusahaan.register');
}
public function create(Request $request)
{
  $Perusahaan = new Perusahaan;
  $Perusahaan->name = $request->name;
  $Perusahaan->email = $request->email;
  $Perusahaan->alamat_perusahaan = $request->alamat_perusahaan;
  $Perusahaan->password = Hash::make($request['password']);
  $Perusahaan->save();
  return Redirect("/admin/home");

}

}
