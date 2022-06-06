@extends('layouts.tempKabar')
@section('content')
<br>
<section class="ftco-section ftco-no-pt ftco-no-pb">
<div class="container">
<div class="col-12 grid-margin">
  
              <div class="card">
                <div class="card-body">
    
@if($errors->any())
<div class="alert alert-danger">
  <strong>Data Tidak disimpan</strong> {{$errors->first()}}
</div>
@endif
@if (\Session::has('success'))
<div class="alert alert-success">
    <strong>Data Tersimpan</strong> {!! \Session::get('success') !!}
  </div>
@endif
@csrf
{!! form($form) !!}
                </div>
    </div>
</div>
</div>
</section>
<br>
@endsection