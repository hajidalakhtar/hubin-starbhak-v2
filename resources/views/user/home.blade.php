@extends('layouts.main')
@section('sidebar')
  <li class="active">
      <a href="{{Route('admin.home')}}">
          <i class="pe-7s-graph"></i>
          <p>Home</p>
      </a>

  </li>
  <li>
  <a href={{route('ShowEditProfil')}}>
      <i class="pe-7s-note2"></i>
      <p>Edit Profil</p>
  </a>
  </li>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h1>Hello {{Auth::user()->name}} </h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--  --}}

                @if (Auth::user()->status == "Siap Berangkat")
                  <h1>Setatus anda adalah {{$user->Status()}}</h1>
                  <h1>anda akan kunjin ke {{$user->NamaPerusahaan()}} </h1>

                @else
                  @if (Auth::user()->kelas == "kelas 10")
                    <a href="{{route('form_kunjin', Auth::user()->id)}}" class="btn btn-primary">Daftar Kunjin</a>
                  @else
                    <a href="{{route('form_kunjin', Auth::user()->id)}}" class="btn btn-primary">Daftar Magang</a>
                  @endif

            @endif


                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                </div>
                <div class="content">
                    <div class="author">
                         <a href="#">
                        <img class="avatar border-gray" src="/storage/user/{{Auth::user()->foto}}" alt="..."/>

                          <h4 class="title">{{Auth::user()->name}}<br />
                             <small>{{Auth::user()->email}}</small>
                          </h4>
                        </a>
                    </div>
                    <p class="description text-center">
                    "
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut."
                    </p>
                </div>
                <hr>
                <div class="text-center">
                    <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                    <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
