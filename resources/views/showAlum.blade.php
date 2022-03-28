@extends('layouts.lay')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Biodata Alumni</h4>
                  
            
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alum as $a)
                        <tr>
                        <td>
                        {{$a->nim}}
                          </td>
                          <td>
                          {{$a->nama}}
                          </td>
                          <td>
                          {{$a->prodi}}
                          </td>
                          <td>
                          {{$a->tahunLulus}}
                          </td>
                          <td>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$a->nim}}">
                          Detail
                        </button>
                        
                          </td>
                          <td>
                          <a class="btn btn-success btn-sm" href="/editAlum/{{$a->nim}}">
                           <i class="ti-pencil"></i>
                          </a>
                          |
                          <a class="btn btn-danger btn-sm" href="/deleteAlum/{{$a->nim}}">
                           <i class="ti-trash"></i>
                          </a>
                          </td>
                          
                          
                        </tr>
                        @endforeach
                        </tbody>
                        
                      
          
        
    </table>
    @foreach($alum as $b)
    <div class="modal fade bd-example-modal-lg" id="exampleModal{{$b->nim}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$b->nama}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table>
        <thead>
        <th>Data Diri</th>
        <th>Domisili</th>
      </thead>
      <tbody>
      <tr >
                        
                        <td >
                        <br>
                        
                        No Handphone : {{$b->noHp}}
                          <br>
                        Kota Lahir : {{$b->kotaLahir}}
                        
                        <br>
                        Tangal Lahir : {{$b->tanggalLahir}}
                        
                        <br>
                        Jenis Kelamin : {{$b->jk}}
                        
                        <br>
                        Email : {{$b->email}}
                        
                      </td>
                        <td>
                        
                        Provinsi : {{$b->provinsi}}
                        <br>
                        Kota : {{$b->kota}}
                        <br>
                        Alamat : {{$b->alamat}}
                        <br>
                        Kode Pos : {{$b->kodePos}}
                      
                        </td>
                        </table>
                        <br>
                        <table>
        <thead>
        <th>Pekerjaan</th>
       
      </thead>
                       
                        <tr>
                        <td>
                        <br>  
                        Nama Pekerajaan : {{$b->pekerjaan}}
                       
                        <br>
                        Jenis Pekerajaan : {{$b->jp}}
                        <br>
                        Nama Perusahaan : {{$b->namaPerusahaan}}
                        <br>
                        Alamat Perusahaan : {{$b->alamatPerusahaan}}
                        </td>
                      </tr>
                      </tbody>
                        
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>
@endforeach
                </div>
              </div>
            </div>
            @endsection