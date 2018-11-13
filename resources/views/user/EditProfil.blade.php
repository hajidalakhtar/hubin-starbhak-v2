@extends('layouts.main')
@section('sidebar')
  <li >
      <a href="{{Route('home')}}">
          <i class="pe-7s-graph"></i>
          <p>Home</p>
      </a>

  </li>
  <li class="active">
  <a href={{route('ShowEditProfil')}}>
      <i class="pe-7s-note2"></i>
      <p>Edit Profil</p>
  </a>
  </li>

@endsection
@section('content')
  <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                      <form action="{{Route('ProssesEditProfil')}}" method='post' enctype='multipart/form-data'>
                                          @csrf
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" disabled placeholder="Username" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>

                                                <input type="email" class="form-control" disabled placeholder="Email" value="{{Auth::user()->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password" >
                                                <input type="hidden" class="form-control" placeholder="Password" value="{{Auth::user()->id}}" name="id">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Foto Profil</label>
                                                <input type="file" class="form-control" name="foto_profil" >
                                            </div>
                                        </div>

                                      </div>




                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
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
        </div>


@endsection
