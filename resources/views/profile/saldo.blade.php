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
          <li class="breadcrumb-item" aria-current="page">Profile</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Mutasi Saldo</h2>
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
        <h5>Mutasi Saldo</h5>
      </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table" id="pc-dt-simple">
            <thead>
              <tr>
                <th>ID</th>
                <th>TGL</th>
                <th>ASAL</th>
                <th>TIPE</th>
                <th>KATEGORI</th>
                <th>JUMLAH</th>
                <th>SALDO SEBELUMNYA</th>
                <th>SALDO AKHIR</th>
                <th>DESKRIPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Rabu, 31 Januari 2024 - 17:15</td>
                <td><span class="badge bg-light-primary rounded-pill f-12">WEB</span></td>
                <td><span class="badge bg-light-primary rounded-pill f-12">DEBIT</span></td>
                <td>Pesanan</td>
                <td>Rp 100.000</td>
                <td>Rp 120.000</td>
                <td>Rp 20.000</td>
                <td>Melaksanakan Pesanan #1</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="modal fade" id="tiket_modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mb-0">Tiket #1</h5>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
              <i class="ti ti-x f-20"></i>
            </a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="form-label">Subjek</label>
                  <input type="text" class="form-control" value="New Layanan Instagram" readonly="">
                </div>
                <div class="form-group">
                  <label class="form-label">Tipe</label>
                  <input type="text" class="form-control" value="Layanan" readonly="">
                </div>
                <div class="form-group">
                  <label class="form-label">Pesan</label>
                  <textarea class="form-control" rows="3" placeholder="Pesan" readonly="">Apakah benar layanan Instagram update?</textarea>
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