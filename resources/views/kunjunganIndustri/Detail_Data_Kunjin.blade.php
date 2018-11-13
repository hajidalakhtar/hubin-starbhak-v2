@extends('layouts.app')

@section('content')
<div class="container">

<a href="{{route('ListKunjin')}}" class="btn btn-primary mb-3">Kembali</a>
 <a href="{{route('downloadPDF',$ListKunjin->id)}}"class="btn btn-danger mb-3 text-right" style="float:right" >Downlaod PDF</a>

<div class="card">

  <div class="card-body ">

<h4>ID = {{$ListKunjin->id}} </h4>
<h4>Nama Ketua = {{$ListKunjin->nama_ketua}}</h4>
<h4>Anggota =</h4>
<ol>
  <li>{{$ListKunjin->anggota_1}}</li>
  <li> {{$ListKunjin->anggota_2}}</li>
  <li>{{$ListKunjin->anggota_3}}</li>
  <li>{{$ListKunjin->anggota_4}}</li>
  <li>{{$ListKunjin->anggota_4}}</
    <lkelasunjin->{{$ListKunjin->anggota_6}}</li>
  <li>{{$ListKunjin->anggota_7}}</li>
  <li>{{$ListKunjin->anggota_8}}</li>
  <li>{{$ListKunjin->anggota_9}}</li>
  <li>{{$ListKunjin->anggota_10}}</li>
  <li>{{$ListKunjin->anggota_11}}</li>
  <li>{{$ListKunjin->anggota_12}}</li>
  <li>{{$ListKunjin->anggota_13}}</li>
</ol>


<h4>Perusahaan =   {{$ListKunjin->NamaPerusahaan()}}</h4>
<h4>kelas = {{$ListKunjin->kelas}}</h4>

<h4>Pembimbing = {{$ListKunjin->pembimbing}}</h4>
<h4>Alamat Perusahaan = {{$ListKunjin->alamatPerusahaan()}}</h4>
<h4>Tanggal Keberangkatan = {{$ListKunjin->tanggal_keberangkatan}}</h4>
<h4>SS Email</h4> <img src="/storage/place/{{$ListKunjin->ssemail}}" width="300px;" alt="">











   </table>
  </div>

</div>
</div>
</div>
@endsection
