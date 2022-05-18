@extends('layouts.lay')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Form</h4>
                  
                  <a class="btn btn-success btn-sm " href="/buatForm"> Tambah </a>
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Form</th>
                <th>Pertanyaan</th>
                <th>Hasil Form</th>
                <th>Rekap Jawaban</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($form as $i)
                        <tr>
                        <td>
                        {{$i->created_at->format('d, M Y')}}
                          </td>
                          <td>
                          {{$i->namaForm}}
                          </td>
                          <td>
                          <a class="btn btn-primary btn-sm" href="/showPertanyaan/{{$i->id}}">
                           <i class="ti-pencil"></i>
                          </a>
                          </td>
                           <td>
                          <a class="btn btn-primary " href="/pertanyaan/{{$i->id}}">
                          Hasil Pertanyaan
                          </a>
                          </td>
                          <td>
                          <a class="btn btn-primary " href="/showJawaban/{{$i->id}}">
                          Rekap jawaban
                          </a>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            @endsection