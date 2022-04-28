@extends('layouts.lay')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Alumni</h4>
                  
            
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataAlum as $da)
                        <tr>
                        <td>
                        {{$da->nim}}
                          </td>
                          <td>
                          {{$da->nama}}
                          </td>
                          <td>
                          {{$da->prodi}}
                          </td>
                          <td>
                          {{$da->tahunLulus}}
                          </td>
                          <td>
                          {{$da->jk}}
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            @endsection