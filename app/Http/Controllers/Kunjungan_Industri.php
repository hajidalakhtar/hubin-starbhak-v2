<?php

namespace App\Http\Controllers;
use App\ListKunjin;
use App\User;
use App\Perusahaan;
use Illuminate\Http\Request;

class Kunjungan_Industri extends Controller
{
  public function ShowFormKunjin()
  {
      // return view('admin.AdminLogin');
      // $User = User;
      $perusahaan = Perusahaan::where('id_kelompok', 0)->get();
      // dd($perusahaan);
      return view('kunjunganIndustri.Form_Kunjin',['perusahaan' => $perusahaan]);

  }
  public function getdata()
{
  $listkunjin = ListKunjin::all();
  return $listkunjin;
}
public function ReadKunjin()
{
  $listkunjin = ListKunjin::paginate(6);
  return view('admin.ListKunjin',['ListKunjin' => $listkunjin]);
}
// public function readSudahDiTerima()
// {
//   $listkunjin = ListKunjin::where('Status', 'Sudah Di Izinkan')->paginate(6);
//   return view('admin.ListKunjin_Sudah_Diterima',['ListKunjin' => $listkunjin]);
// }
public function add()
{
return view('addkunjin');

}
public function prosesadd(Request $request)
{
  // dd($request->KetuaKelompok);
  $this->validate($request,[
    'KetuaKelompok' => 'required',
    'anggota_1' => 'required',
    'anggota_2' => 'required',
    'anggota_3' => 'required',
    'anggota_4' => 'required',
    'anggota_5' => 'required',
    'anggota_6' => 'required',
    'anggota_7' => 'required',
    'anggota_8' => 'required',
    'anggota_9' => 'required',
    'anggota_10' => 'required',
    'anggota_11' => 'required',
    'anggota_12' => 'required',
    'anggota_13' => 'required',
    'perusahaan' => 'required',
    'tanggal_keberangkatan' => 'required',
    'ssemail' => 'required',
    'pembimbing' => 'required',





  ],[
    'KetuaKelompok.required' => 'Anda belom memasukan nama Ketua Kelompok'
  ]);
    // dd($request->anggota);
$listkunjin = new ListKunjin;
$listkunjin->nama_ketua = $request->KetuaKelompok;
$listkunjin->anggota_1 = $request->anggota_1;
$listkunjin->anggota_2 = $request->anggota_2;
$listkunjin->anggota_3 = $request->anggota_3;
$listkunjin->anggota_4 = $request->anggota_4;
$listkunjin->anggota_5 = $request->anggota_5;
$listkunjin->anggota_6 = $request->anggota_6;
$listkunjin->anggota_7 = $request->anggota_7;
$listkunjin->anggota_8 = $request->anggota_8;
$listkunjin->anggota_9 = $request->anggota_9;
$listkunjin->anggota_10 = $request->anggota_10;
$listkunjin->anggota_11 = $request->anggota_11;
$listkunjin->anggota_12 = $request->anggota_12;
$listkunjin->anggota_13 = $request->anggota_13;
$listkunjin->perusahaan = $request->perusahaan;
// $listkunjin->alamat_perusahaan = $request->alamat_perusahaan;
$listkunjin->tanggal_keberangkatan = $request->tanggal_keberangkatan;
$image = $request->ssemail->store('public/place');
$listkunjin->ssemail = basename($image);
$listkunjin->kelas = "kelas 10";
$listkunjin->pembimbing = $request->pembimbing;
$listkunjin->save();
return redirect('/kunjin/AddStatusUser/'.$request->id_user.'/'.$request->perusahaan);
}
public function AddStatusUser($id,$perusahaan)
{
  $user = User::find($id);
  $user->status = "Siap Berangkat";
  $user->id_perusahaan = $perusahaan;
  $user->save();
  return redirect('/home');
}
public function AddStatusKunjin($id)
{
  $listkunjin = ListKunjin::find($id);
  $listkunjin->status = "Sudah Di Izinkan";
  $listkunjin->save();

  $perusahaan = Perusahaan::find($listkunjin->perusahaan);
  // dd($perusahaan);
  $perusahaan->id_kelompok = $id;
  $perusahaan->save();
  return redirect('admin/list-kunjin');

}
public function delete($id)
{

  $listkunjin = ListKunjin::find($id);
  $perusahaan = Perusahaan::find($listkunjin->perusahaan);
  // dd($perusahaan);
  $perusahaan->id_kelompok = 0;
  $perusahaan->save();
  $user = User::where('name', $listkunjin->nama_ketua)->first();
  // dd($user);
  $user->id_perusahaan = 0;
  $user->status = "belum Mengisi Form";
  $user->save();

  $listkunjin->delete();
  return redirect('/admin/list-kunjin');

}
public function edit($id)
{
$listkunjin = ListKunjin::find($id);
$perusahaan = Perusahaan::all();
// dd($listkunjin);
return view('kunjunganIndustri.Form_Edit_Kunjin',['ListKunjin' => $listkunjin],['perusahaan' => $perusahaan ]);
}
public function update(Request $request)
{
  $listkunjin = ListKunjin::find($request->id);
  $listkunjin->nama_ketua = $request->KetuaKelompok;
  $listkunjin->anggota_1 = $request->anggota_1;
  $listkunjin->anggota_2 = $request->anggota_2;
  $listkunjin->anggota_3 = $request->anggota_3;
  $listkunjin->anggota_4 = $request->anggota_4;
  $listkunjin->anggota_5 = $request->anggota_5;
  $listkunjin->anggota_6 = $request->anggota_6;
  $listkunjin->anggota_7 = $request->anggota_7;
  $listkunjin->anggota_8 = $request->anggota_8;
  $listkunjin->anggota_9 = $request->anggota_9;
  $listkunjin->anggota_10 = $request->anggota_10;
  $listkunjin->anggota_11 = $request->anggota_11;
  $listkunjin->anggota_12 = $request->anggota_12;
  $listkunjin->anggota_13 = $request->anggota_13;
  $listkunjin->perusahaan = $request->perusahaan;
  $listkunjin->tanggal_keberangkatan = $request->tanggal_keberangkatan;
  // $image = $request->ssemail->store('public/place');
  // $listkunjin->ssemail = basename($image);
  $listkunjin->pembimbing = $request->pembimbing;
  $listkunjin->save();
  return redirect('/admin/list-kunjin');
}
// public function DetailData($id)
// {
//   $listkunjin = ListKunjin::find($id);
// }
public function DetailData($id)
{
  $listkunjin = listkunjin::findOrFail($id);
  // dd($listkunjin);
  return view('kunjunganIndustri.Detail_Data_Kunjin',['ListKunjin' => $listkunjin]);
}


}
