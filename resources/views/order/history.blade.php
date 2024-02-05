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
          <h2 class="mb-0">Riwayat Pemesanan</h2>
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
          <table class="table" id="pc-dt-simple">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>LAYANAN</th>
                <th>TARGET</th>
                <th>HARGA</th>
                <th>JUMLAH</th>
                <th>JA <i class="fas fa-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Jumlah Awal"></i></th>
                <th>JK <i class="fas fa-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Jumlah Kurang"></i></th>
                <th>STATUS</th>
                <th>Tgl <i class="fas fa-question-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tanggal Pemesanan"></i></th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>VSX15R685</td>
                <td>Instagram Followers Indonesia</td>
                <td>instagram.com/rud.az_/</td>
                <td>Rp 100.000</td>
                <td>3.000</td>
                <td>2.000</td>
                <td>5.000</td>
                <td><span class="badge bg-primary">Processing</span></td>
                <td>31 Jan 2024, 18:38</td>
                <td>
                  <a href="javascript:;" class="btn btn-primary btn-sm round" data-pc-animate="3d-flip-vertical" data-bs-toggle="modal" data-bs-target=".info-order"><i class="fas fa-search fs-6 me-2"></i>Lihat Detail</a>
                  <a href="javascript:;" class="btn btn-secondary btn-sm round"><i class="fas fa-ban fs-6 me-2"></i>Refill</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="modal fade modal-animate info-order" id="modal1" tabindex="-1"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-info-circle me-2"></i>Informasi Refill</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Jumlah Awal</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="12.329" disabled>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Jumlah Kurang</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="99.982" disabled>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Refill</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="Tidak" disabled>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Refund</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="Tidak" disabled>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Asal</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="WEB" disabled>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>IP Address</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="103.96.147.178" disabled>
              </div>
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-6">
                <strong>Pembaruan Terakhir</strong>
              </div>
              <div class="col-md-6">
                <span class="form-control" style="height: auto;" disabled>Hari Ini - 19:31</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times-circle fs-6 me-2"></i>Tutup</button>
          </div>
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
  window.dt = new DataTable("#pc-dt-simple");
</script>


@endsection