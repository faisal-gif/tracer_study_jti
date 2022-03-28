@extends('layouts.lay')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kabar Berita</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Judul
                          </th>
                          <th>
                            Detail
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      @foreach($kabar as $k)
                      <tbody>
                        <tr>
                          <td>
                          {{$k->id}}
                          </td>
                          <td>
                          {{$k->judul}}
                          </td>
                          <td>
                          <a class="nav-link btn btn-info btn-sm" href="/showKabar/{{$k->id}}" >
                            Detail
                          </td>
                          <td>
                          <a class="btn btn-success btn-sm" href="/editAlum/{{$k->id}}">
                           Status
                          </a>
                          </td>
                          <td>
                          <a class="btn btn-success btn-sm" href="/editAlum/{{$k->id}}">
                           <i class="ti-pencil"></i>
                          </a>
                          |
                          <a class="btn btn-danger btn-sm" href="/deleteAlum/{{$k->id}}">
                           <i class="ti-trash"></i>
                          </a>
                          </td>  
                        </tr>
                                     
               @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection