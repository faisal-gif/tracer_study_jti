@extends('layouts.tempKabar')
@section('content')


<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    
    <div class="row">
      
<div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
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
</section>
@endsection
        