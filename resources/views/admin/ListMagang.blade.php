@extends('layouts.app')

@section('content')

<a href="{{route('admin.home')}}" class="btn btn-primary mb-3 ml-3">Kembali</a>
<div class="card">
  <div class="card-body justify-content-center">

    <table class="table">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Kelas</th>
         <th scope="col">Ketua Kelompok</th>
         <th scope="col">Perusahaan</th>
         <th scope="col">Nama Pembimbing</th>
         <th scope="col">Action</th>

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
         <td > <a href="{{route('Kunjin.DetailData',$data->id)}}" class="btn btn-info">More</a> <a href="{{route('Kunjin.Delete',$data->id)}}" class="btn btn-danger">Delete</a> <a href="{{route('Kunjin.edit',$data->id)}}" class="btn btn-primary">
           Edit</a>
           <a href="{{route('downloadPDF',$data->id)}}" class="btn btn-danger">Downlaod PDF</a> </td>

       </tr>

     @endforeach

     </tbody>
   </table>
   {{ $ListKunjin->links() }}
  </div>

</div>




@endsection
