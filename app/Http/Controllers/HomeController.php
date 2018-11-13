<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;

use App\ListKunjin;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $nama = Auth::user()->name;
      // $listkunjin = ListKunjin::where('nama_ketua',$nama)->first();
      // dd($listkunjin);
      $user = User::find(Auth::user()->id);
        return view('user.home',['user' => $user]);
    }
    public function EditProfil()
    {
      return view('user.EditProfil');
    }
    public function ProssesEditProfil(Request $request)
    {

      $user = User::find($request->id);
      // dd($user);
      $user->password =  Hash::make($request['password']);
      $image = $request->foto_profil->store('public/user');
      $user->foto = basename($image);
      $user->save();
      return Redirect('/home');



    }


}
