@extends('layouts.lay')
@section('content')
<div class="row">
<div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="font-size: 30px;">Kata Alumni</h4>
                  <form class="form-sample" method="POST" action="/ktAlumni" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="idUser" value="{{ Auth::user()->id }}"/>
                    <!-- <p class="card-description">
                    Kata Alumni
                    </p> -->
                      <div class="col-md-12">
                        <div class="form-group row">
                          <p style="font-size: 15px;"> Pada halaman ini, alumni bisa memberikan tanggapan tentang
                            sistem pendidikan yang sudah di dapatkan saat berkuliah di JTI Polinema
                          </p>
                          <!-- <label class="col-sm-3 col-form-label" style="font-size: 20px;">Testimoni</label> -->
                          <div class="col-sm-9">
                          <!-- <textarea type="text" class="form-control" name="description"></textarea> -->
                          <textarea class="form-control" name="testimoni" id="exampleFormControlTextarea1" cols="100" rows="10" style="align: center;"></textarea>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>

                </div>
</div>
@endsection