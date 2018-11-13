@extends('layouts.main')
@section('sidebar')
  <li class="active">
      <a href="{{Route('admin.home')}}">
          <i class="pe-7s-graph"></i>
          <p>Dashboard</p>
      </a>

  </li>
  <li>
  <a href={{route('ListKunjin')}}>
      <i class="pe-7s-note2"></i>
      <p>List Kunjin</p>
  </a>
  </li>
  <li>
  <a href={{route('ListKunjin')}}>
      <i class="pe-7s-note2"></i>
      <p>PRAKERIN</p>
  </a>
  </li>
  <li>
  <a href={{route('ListKunjin')}}>
      <i class="pe-7s-note2"></i>
      <p>COMPANY LIST</p>
  </a>
  </li>
  <li>
  <a href={{route('ListKunjin')}}>
      <i class="pe-7s-news-paper"></i>
      <p>JOP FAIR</p>
  </a>
  </li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

                <div class="card-body">
                    @if  (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{-- <a href="{{route('ListKunjin')}}" class="btn btn-primary">List Kunjin</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftarkan Siswa</a>
                    <a href="{{route('perusahaan.show.add')}}" class="btn btn-primary">Daftarkan Perusahaan</a> --}}
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                  <h4 class="title">Kunjungan Industri</h4>
                                  <p class="category">now</p>
                              </div>
                              <div class="content table-responsive table-full-width">
                                  <table class="table table-hover table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Ketua Kelompok</th>
                                        <th scope="col">Perusahaan</th>
                                        <th scope="col">Nama Pembimbing</th>
                                        <th scope="col">Status</th>

                                      </tr>
                                    </thead>

                                    <tbody>
                                      @foreach ($ListKunjin as $data)
                                      <tr>
                                        <th scope="row">{{$data->id}}</th>
                                        <td>{{$data->kelas}}</td>
                                        <td>{{$data->nama_ketua}}</td>
                                        <td>{{$data->namaPerusahaan()}}</td>
                                        <td >{{$data->pembimbing}}</td>
                                        <td >{{$data->status}}</td>


                               </td>
                                      </tr>

                                    @endforeach

                                    </tbody>
                                  </table>

                              </div>
                          </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Company List</h4>
                            <p class="category">now</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Nama Perusahaan</th>
                                  <th scope="col">email</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col">Nama Pembimbing</th>
                                  <th scope="col">Status</th>

                                </tr>
                              </thead>

                              <tbody>
                                @foreach ($Perusahaan as $dataperusahaan)
                                <tr>
                                  <th scope="row">{{$dataperusahaan->id}}</th>
                                  <td>{{$dataperusahaan->name}}</td>
                                  <td>{{$dataperusahaan->email}}</td>
                                  <td>{{$dataperusahaan->alamat_perusahaan}}</td>



                         </td>
                                </tr>

                              @endforeach

                              </tbody>
                            </table>

                        </div>
                    </div>

          </div>
        </div>
      </div>

    </div>
</div>
</div>

@endsection
