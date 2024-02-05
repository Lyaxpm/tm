@extends('layouts.main')

@section('css')
@endsection

@section('content')
<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></li>
          <li class="breadcrumb-item" aria-current="page">Page</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Ketentuan Layanan</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-12">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Ketentuan Layanan</h5>
      </div>
      <div class="card-body pb-3">
        <p>
          Ini ketentuan layanan
        </p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')

@endsection