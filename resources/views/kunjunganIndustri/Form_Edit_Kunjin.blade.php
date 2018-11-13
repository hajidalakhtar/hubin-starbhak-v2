@extends('layouts.app')

@section('content')
      <div class="row justify-content-center">

                      @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                      @endif
                      <div class="container">
                          <h1 class="text-center mb-5">Form Kunjungan Industri</h1>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="card">
                                      <div class="card-body">
                                        {{-- <a href="{{Route('home')}}" class="btn btn-primary mb-5">Kembali</a> --}}
                                        <h1></h1>

                                          <form action="{{Route('Kunjin.Update')}}" method='post' enctype='multipart/form-data'>
                                              @csrf
                                              <div class="form-grup">
                                                  <label>Ketua Kelompok</label>
                                                  <input type="text" name="KetuaKelompok" value="{{$ListKunjin->nama_ketua}}" class="form-control">
                                                  <label>Angota</label>
                                                    <input type="hidden" name="id" value="{{$ListKunjin->id}}">

                                                  <input type="text" name="anggota_1" value="{{$ListKunjin->anggota_1}}" class="form-control" placeholder="Nama Anggota 1">
                                                  <input type="text" name="anggota_2" value="{{$ListKunjin->anggota_2}}" class="form-control" placeholder="Nama Anggota 2">
                                                  <input type="text" name="anggota_3" value="{{$ListKunjin->anggota_3}}" class="form-control" placeholder="Nama Anggota 3">
                                                  <input type="text" name="anggota_4" value="{{$ListKunjin->anggota_4}}" class="form-control" placeholder="Nama Anggota 4">
                                                  <input type="text" name="anggota_5" value="{{$ListKunjin->anggota_5}}" class="form-control" placeholder="Nama Anggota 5">
                                                  <input type="text" name="anggota_6" value="{{$ListKunjin->anggota_6}}" class="form-control" placeholder="Nama Anggota 6">
                                                  <input type="text" name="anggota_7" value="{{$ListKunjin->anggota_7}}" class="form-control" placeholder="Nama Anggota 7">
                                                  <input type="text" name="anggota_8" value="{{$ListKunjin->anggota_8}}" class="form-control" placeholder="Nama Anggota 8">
                                                  <input type="text" name="anggota_9" value="{{$ListKunjin->anggota_9}}" class="form-control" placeholder="Nama Anggota 9">
                                                  <input type="text" name="anggota_10" value="{{$ListKunjin->anggota_10}}" class="form-control" placeholder="Nama Anggota 10">
                                                  <input type="text" name="anggota_11" value="{{$ListKunjin->anggota_11}}" class="form-control" placeholder="Nama Anggota 11">
                                                  <input type="text" name="anggota_12" value="{{$ListKunjin->anggota_12}}" class="form-control" placeholder="Nama Anggota 12">
                                                  <input type="text" name="anggota_13" value="{{$ListKunjin->anggota_13}}" class="form-control" placeholder="Nama Anggota 13">

                                              </div>

                                              <div class="form-grup">
                                                  <label>Nama Perusahaan</label>
                                                  <select name="perusahaan" class="form-control" >
                                                    @foreach ($perusahaan as $data )
                                                    <option  value="{{$data->id}}">{{$data->name}}</option>
                                                    @endforeach
                                                  </select>
                                                  {{-- <input type="text" name="perusahaan" value="{{$ListKunjin->namaPerusahaan()}}" class="form-control" placeholder="Nama Perusahaan"> --}}
                                              </div>
                                              {{-- <div class="form-grup">
                                                  <label>Alamat Perusahaan</label>
                                                  <input type="text" name="alamat_perusahaan" value="{{$ListKunjin->alamat_perusahaan}}" class="form-control" placeholder="Alamat Perusahaan ">
                                              </div> --}}
                                              <div class="form-grup">
                                                  <label>Tanggal Keberangkatan</label>
                                                  <input type="date" name="tanggal_keberangkatan" value="{{$ListKunjin->tanggal_keberangkatan}}" class="form-control">
                                              </div>

                                             {{-- <div class="form-grup">
                                                 <label>Screenshot Email Persetujuan Perusahaan</label>
                                                 <input type="file" name="ssemail" value="tes" class="form-control">
                                             </div> --}}
                                              <div class="form-grup">
                                                  <label>Pembimbing</label>
                                                  <input type="text" name="pembimbing" value="{{$ListKunjin->pembimbing}}" class="form-control" placeholder="Masukan Guru Pembimbing">
                                              </div>


                                              <br>
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{-- akhir form --}}
                  </div>
              </div>
          </div>
      </div>
@endsection
@section('javascript')
<script type="text/javascript">
$(document).ready(function(){
        // var url = $('ssemail').attr('src');
        // console.log(url);
        $('#ssemail').val('tes.png');
});
</script>

@endsection
