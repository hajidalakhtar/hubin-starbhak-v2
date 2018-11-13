<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListKunjin extends Model
{
    public function NamaPerusahaan()
    {
        return Perusahaan::where('id',$this->perusahaan)->first()->name;
    }
    public function alamatPerusahaan()
    {
        return Perusahaan::where('id',$this->perusahaan)->first()->alamat_perusahaan;
    }
    public function Kelas()
    {
        return Perusahaan::where('id',$this->perusahaan)->first()->name;
    }
}
