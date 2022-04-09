@extends('layouts.tempKabar')
@section('content')

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      
<div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
@csrf
{!! form($form) !!}
</div>
</div>
</div>
</section>
@endsection
        