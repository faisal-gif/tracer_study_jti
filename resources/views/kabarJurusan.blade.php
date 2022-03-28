@extends('layouts.lay')
@section('content')
<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kabar Jurusan</h4>
                  <form class="form-sample" method="POST" action="/inpKabar" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="idUser" value="{{ Auth::user()->id }}"/>
                    <p class="card-description">
                    Kabar Jurusan
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Judul</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="judul"/>
                          </div>
                        </div>
                      </div>                
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="tag">
                              <option>Lowongan Pekerjaan</option>
                              <option>Lowongan Magang</option>
                              <option>Seminar</option>
                            </select>
                          </div>
                        </div>
                      </div>                
                    </div>
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Isi</label>
                          <div class="col-sm-9">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="18" name="isi"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                      <button type="submit" class="btn btn-primary mb-2">Save</button>
                  </form>
                </div>
              </div>
            </div>
            
@endsection