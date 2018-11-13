{{-- <a href="{{route('ListKunjin')}}" class="btn btn-primary mb-3">Kembali</a> --}}
<div class="card">
  <div class="card-body ">
<h1>Detail Data Kunjin</h1>
<h4>ID = {{$listkunjin->id}} </h4>
<h4>Nama Ketua = {{$listkunjin->nama_ketua}}</h4>
<h4>Anggota =</h4>
<ol>
  <li>{{$listkunjin->anggota_1}}</li>
  <li> {{$listkunjin->anggota_2}}</li>
  <li>{{$listkunjin->anggota_3}}</li>
  <li>{{$listkunjin->anggota_4}}</li>
  <li>{{$listkunjin->anggota_5}}</li>
  <li>{{$listkunjin->anggota_6}}</li>
  <li>{{$listkunjin->anggota_7}}</li>
  <li>{{$listkunjin->anggota_8}}</li>
  <li>{{$listkunjin->anggota_9}}</li>
  <li>{{$listkunjin->anggota_10}}</li>
  <li>{{$listkunjin->anggota_11}}</li>
  <li>{{$listkunjin->anggota_12}}</li>
  <li>{{$listkunjin->anggota_13}}</li>
</ol>


<h4>Perusahaan =   {{$listkunjin->NamaPerusahaan()}}</h4>

<h4>Pembimbing = {{$listkunjin->pembimbing}}</h4>
<h4>kelas = {{$listkunjin->kelas}}</h4>

<h4>Alamat Perusahaan = {{$listkunjin->alamatPerusahaan()}}</h4>
<h4>Tanggal Keberangkatan = {{$listkunjin->tanggal_keberangkatan}}</h4>
<h4>SS Email</h4> <img src="{{ public_path("storage/place/".$listkunjin->ssemail)}}" width="200px;" alt="">











   </table>
