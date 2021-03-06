@extends('layouts.main')
@section('sidebar')
  <li >
      <a href="{{Route('admin.home')}}">
          <i class="pe-7s-graph"></i>
          <p>Dashboard</p>
      </a>

  </li>
  <li class="active">
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

<a href="{{route('admin.home')}}" class="btn btn-primary mb-3 ml-3">Kembali</a>
<br>
<br>
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
         <th scope="col">Status</th>
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
         <td >{{$data->status}}</td>
         @if ($data->status == 'Sudah Di Izinkan')
           <td > <a href="{{route('Kunjin.DetailData',$data->id)}}" class="btn btn-info">More</a> <a href="{{route('Kunjin.Delete',$data->id)}}" class="btn btn-danger">Delete</a> <a href="{{route('Kunjin.edit',$data->id)}}" class="btn btn-primary">
             Edit</a>
             <a href="{{route('downloadPDF',$data->id)}}" class="btn btn-danger">Downlaod PDF</a>
             <a href="{{route('Kunjin.AddStatusKunjin',$data->id)}}" class="btn btn-primary">IZINKAN</a> </td>
             @else
               <td>
               <a href="{{route('Kunjin.AddStatusKunjin',$data->id)}}" class="btn btn-primary">IZINKAN</a> </td>
               </td>
         @endif

</td>
       </tr>

     @endforeach

     </tbody>
   </table>
   {{ $ListKunjin->links() }}
  </div>

</div>




@endsection
