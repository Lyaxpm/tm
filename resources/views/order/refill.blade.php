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
          <li class="breadcrumb-item" aria-current="page">Pemesanan</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Riwayat Refill</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <!-- [ basic-table ] start -->
  <div class="col-xl-12">
    <a href="javascript:;" class="btn btn-warning mb-3" data-pc-animate="3d-flip-vertical" data-bs-toggle="modal" data-bs-target=".info-refil"><i class="fas fa-info-circle fs-6 me-2"></i>Informasi Refill</a>

    <div class="modal fade modal-animate info-refil" id="modal" tabindex="-1"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-info-circle me-2"></i>Informasi Refill</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning mb-0">
              <h5 class="alert-heading"><i class="fas fa-info-circle me-2"></i>Informasi Untuk Layanan Refill</h5>
              <div class="alert-body">
                <ul class="mb-0">
                  <li>Hanya <b><em>tombol refill</em></b> yang berwarna <b><em>merah / biru</em></b> yang bisa dilakukan refill.</li>
                  <li>Gunakan <b><em>tombol refill</em></b> ini hanya ketika pesanan Anda mengalami drop.</li>
                  <li>Anda dapat menggunakan <b><em>tombol refill</em></b> kembali setelah 24 jam terakhir kali Anda menggunakannya.</li>
                  <li>Jika <b><em>tombol refill</em></b> berwarna merah artinya <b><em>tombol refill</em></b> belum bisa digunakan.</li>
                  <li>Jika <b><em>tombol refill</em></b> berwarna biru namun responnya adalah <em>"Refill not allowed"</em> artinya fitur refill pada pesanan tersebut belum bisa digunakan, namun Anda bisa mencoba kembali secara berkala.</li>
                  <li>Anda harus menunggu selama 1-3 hari setelah pesanan Anda <em>Success</em> untuk dapat menggunakan fitur refill.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times-circle fs-6 me-2"></i>Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h5>Riwayat Pemesanan</h5>
      </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table" id="tabel-refill">
            <thead>
              <tr>
                <th>ID REFILL</th>
                <th>Order ID</th>
                <th>LAYANAN</th>
                <th>TARGET</th>
                <th>STATUS</th>
                <th>TGL</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>123456</td>
                <td>VSX15R685</td>
                <td>Instagram Followers Indonesia</td>
                <td>instagram.com/rud.az_/</td>
                <td><span class="badge bg-success">Sukses</span></td>
                <td>31 Jan 2024, 18:38</td>
                <td>
                  <a href="javascript:;" class="btn btn-secondary btn-sm round"><i class="fas fa-ban fs-6 me-2"></i>Refill</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- [ basic-table ] end -->
</div>

@endsection

@section('js')
<script src="{{ asset('assets/js/modal.js') }}"></script>
<script type="module">
  import {
    DataTable
  } from "{{ asset('assets/js/plugins/module.js') }}"
  window.dt = new DataTable("#tabel-refill");
</script>


@endsection