@extends('layouts.lay')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h3 style="font-size: 30px;">List Testimoni</h3><br><br>
<table class="table table-bordered table-hover table-responsive">
  <tr>
    <th style="width:50%;">Nama</th>
    <th style="width:50%;">Testimoni</th>
    <th colspan="3" style="text-align:center;">Aksi</th>
  </tr>
  @foreach($testim as $testim) 
  <tr>
    <td>{{$testim->id_testimoni}}</td>
    <!-- <td>{{$testim->testimoni}}</td> -->
    <td><p>{{ Str::limit($testim->testimoni, 50) }}</p></td>
    <td>

          <form method="POST" action="{{ url('listTestii/delete', $testim->id_testimoni ) }}">
              @csrf
            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class='fa fa-trash'></i></button>
          </form> </td>
    
          <td>
          <form method="POST" action="{{ url('listTestii/update', $testim->id_testimoni) }}">
              @csrf
              <button class="btn btn-info btn-sm" onclick="return confirm('Apakah data yang di setujui sudah benar?');"><i class="fa fa-paper-plane"></i></button>  
          </form> </td>

          <td>
          @if ($message = Session::get('sukses'))
				    <div class="alert alert-success alert-block">
					    <button type="button" class="close" data-dismiss="alert">×</button> 
					    <strong>{{ $message }}</strong>
				    </div>
				  @endif
            <a href="/pesan" class="btn btn-success">SUKSES</a> </td>
  </td>
  @endforeach
</table>

        
@endsection