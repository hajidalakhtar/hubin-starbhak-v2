<?php

namespace App\Http\Controllers;
use App\ListKunjin;
use App\Perusahaan;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $listkunjin = ListKunjin::paginate(2);
          $perusahaan = Perusahaan::paginate(2);
          // dd($perusahaan);

          // dd($listkunjin);
          return view('admin.home')->with('ListKunjin', $listkunjin)->with('Perusahaan', $perusahaan);
        // return view('home');
    }

}
