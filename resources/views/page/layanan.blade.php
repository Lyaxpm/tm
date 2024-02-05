@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
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
          <h2 class="mb-0">Daftar Layanan</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <!-- [ basic-table ] start -->
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header">
        <h5>Daftar Layanan</h5>
      </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table" id="pc-dt-simple">
            <thead>
              <tr>
                <th>ID</th>
                <th>Layanan</th>
                <th>MIN</th>
                <th>MAKS</th>
                <th>HARGA/1000</th>
                <th>DETAIL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>125</td>
                <td>INSTAGRAM FOLLOWERS INDONESIA</td>
                <td>100</td>
                <td>1000</td>
                <td>Rp 75.000</td>
                <td class="text-center">
                  <ul class="list-inline me-auto mb-0">
                    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="lihat">
                      <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default" data-bs-toggle="modal"
                        data-bs-target="#layana_modal">
                        <i class="ti ti-eye f-18"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="modal fade" id="layana_modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mb-0">Layanan #125</h5>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
              <i class="ti ti-x f-20"></i>
            </a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="form-label">ID</label>
                  <input type="text" class="form-control" value="125" readonly="">
                </div>
                <div class="form-group">
                  <label class="form-label">Layanan</label>
                  <input type="text" class="form-control" value="INSTAGRAM FOLLOWERS INDONESIA" readonly="">
                </div>
                <div class="form-group">
                  <label class="form-label">Kategori</label>
                  <input type="text" class="form-control" value="INSTAGRAM FOLLOWERS" readonly="">
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label">Min</label>
                      <input type="text" class="form-control" value="100" readonly="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label">Maks</label>
                      <input type="text" class="form-control" value="1000" readonly="">
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <label class="form-label">Harga/1000</label>
                    <input type="text" class="form-control" value="Rp 75.000" readonly="">
                  </div>
                       <div class="form-group">
                    <label class="form-label">Refill</label>
                    <input type="text" class="form-control" value="Tersedia" readonly="">
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <div class="flex-grow-1 text-end">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- [ basic-table ] end -->
</div>

@endsection

@section('js')
<script type="module">
  import {
    DataTable
  } from "{{ asset('assets/js/plugins/module.js') }}"
  window.dt = new DataTable("#pc-dt-simple");
</script>


@endsection