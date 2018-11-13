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
                                        <a href="{{Route('home')}}" class="btn btn-primary mb-5">Kembali</a>
                                        <h1></h1>
                                          <form action="{{Route('Kunjin.ProsesAdd')}}" method='post' enctype='multipart/form-data'>
                                              @csrf
                                              <div class="form-grup">
                                                  <label>Ketua Kelompok</label>
                                                  <input type="text" name="KetuaKelompok" value="{{Auth::user()->name}}" disabled class="form-control{{$errors->has('KetuaKelompok')? ' has-error' : ''}}">
                                                    @if ($errors->has('KetuaKelompok'))
                                                        <span class="help-block">
                                                          <p class="text-danger">{{$errors->first('KetuaKelompok')}}</p>
                                                        </span>
                                                    @endif
                                                    <br>

                                                  <label>Angota</label>



                                                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">


                                                    @foreach (range(1,13) as $x)

                                                      <input type="text" name="anggota_{{$x}}" id="anggota_{{ $x }}" value="" class="form-control" placeholder="Nama Anggota {{$x}}">

                                                      @if ($errors->has('anggota_'.$x))
                                                        <span>
                                                          <p class="text-danger">{{$errors->first('anggota_'.$x)}}</p>
                                                        </span>
                                                      @endif

                                                    @endforeach


                                              </div>

                                              <div class="form-grup">
                                                  <label>Nama Perusahaan </label>
                                                  {{-- <input type="text" name="perusahaan" value="" class="form-control" placeholder="Nama Perusahaan"> --}}
                                                  <select name="perusahaan" class="form-control" >
                                                    <option value="">Pilih Perusahaan</option>
                                                    @foreach ($perusahaan as $data )
                                                    <option  value="{{$data->id}}">{{$data->name}}</option>
                                                    @endforeach
                                                  </select>
                                                  @if ($errors->has('perusahaan'))
                                                      <span class="help-block">
                                                        <p class="text-danger">{{$errors->first('perusahaan')}}</p>
                                                      </span>
                                                  @endif
                                              </div>


                                              {{-- </div> --}}
                                              <div class="form-grup">
                                                  <label>Tanggal Keberangkatan</label>
                                                  <input type="date" name="tanggal_keberangkatan" value="" class="form-control">

                                              </div>

                                              @if ($errors->has('tanggal_keberangkatan'))
                                                  <span class="help-block">
                                                    <p class="text-danger">{{$errors->first('tanggal_keberangkatan')}}</p>
                                                  </span>
                                              @endif
                                              <div class="form-grup">
                                                  <label>Screenshot Email Persetujuan Perusahaan</label>
                                                  <input type="file" name="ssemail" class="form-control">
                                              </div>
                                              @if ($errors->has('ssemail'))
                                                  <span class="help-block">
                                                    <p class="text-danger">{{$errors->first('ssemail')}}</p>
                                                  </span>
                                              @endif
                                              <div class="form-grup">
                                                  <label>Pembimbing</label>
                                                  <input type="text" name="pembimbing" value="" class="form-control" placeholder="Masukan Guru Pembimbing">
                                              </div>
                                              @if ($errors->has('pembimbing'))
                                                  <span class="help-block">
                                                    <p class="text-danger">{{$errors->first('pembimbing')}}</p>
                                                  </span>
                                              @endif


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
