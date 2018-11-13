@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Perusahaan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--  --}}
                    <h1>   Hallo {{Auth::User()->name}} </h1>
                    @if (Auth::User()->id_kelompok == 0)
                      {{-- {{Auth::User()->id_kelompok}} --}}
                    @else
                      {{-- <h1>tes</h1> --}}
                    {{-- @foreach ($ListKunjin as $data) --}}

                    <h4>ID = {{$ListKunjin->id}} </h4>
                    <h4>Nama Ketua = {{$ListKunjin->nama_ketua}}</h4>
                    <h4>Anggota =</h4>
                    <ol>
                      <li>{{$ListKunjin->anggota_1}}</li>
                      <li> {{$ListKunjin->anggota_2}}</li>
                      <li>{{$ListKunjin->anggota_3}}</li>
                      <li>{{$ListKunjin->anggota_4}}</li>
                      <li>{{$ListKunjin->anggota_5}}</li>
                      <li>{{$ListKunjin->anggota_6}}</li>
                      <li>{{$ListKunjin->anggota_7}}</li>
                      <li>{{$ListKunjin->anggota_8}}</li>
                      <li>{{$ListKunjin->anggota_9}}</li>
                      <li>{{$ListKunjin->anggota_10}}</li>
                      <li>{{$ListKunjin->anggota_11}}</li>
                      <li>{{$ListKunjin->anggota_12}}</li>
                      <li>{{$ListKunjin->anggota_13}}</li>
                    </ol>

@endif
                    {{-- @endforeach --}}
                {{-- <h1>Hello {{Auth::perusahaan()->name_}}</h1> --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
