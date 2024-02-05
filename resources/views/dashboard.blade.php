@extends('layouts.main')

@section('css')
@endsection

@section('content')
<div class="row">
  <div class="col-md-6 col-xl-4">
    <div class="card bg-primary available-balance-card" style="border: var(--bs-card-border-width) solid var(--bs-primary) !important;">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-0 text-white text-opacity-75">
              Saldo Anda
            </p>
            <h4 class="mb-0 text-white">Rp 100.000.000</h4>
          </div>
          <div class="avtar">
            <i class="ti ti-wallet f-18"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card bg-primary available-balance-card" style="border: var(--bs-card-border-width) solid var(--bs-primary) !important;">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-0 text-white text-opacity-75">
              Pesanan Selesai
            </p>
            <h4 class="mb-0 text-white">Rp 0</h4>
          </div>
          <div class="avtar">
            <i class="ti ti-shopping-cart f-18"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-xl-4">
    <div class="card bg-primary available-balance-card" style="border: var(--bs-card-border-width) solid var(--bs-primary) !important;">
      <div class="card-body p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-0 text-white text-opacity-75">
              Deposit Selesai
            </p>
            <h4 class="mb-0 text-white">Rp 0</h4>
          </div>
          <div class="avtar">
            <i class="ti ti-report-money f-18"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-4">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Grafik 7 Hari Terakhir</h5>
      </div>
      <div class="card-body">
        <div id="customer-rate-graph"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-4">
    <div class="card">
      <h5 class="card-header">Informasi Terbaru</h5>
      <div class="card-body">
        <ul class="verti-timeline list-unstyled">

          <li class="list-group-item pt-0 px-0 mt-1">
            <h5 class="fw-bold text-primary mb-1">Informasi</h5>
            <p class="text-muted me-1 mb-2">
              <small>Minggu, 28 Januari 2024 - 21:23</small>
            </p>
            <p class="text-muted" style="margin-bottom: 8px;">
              <p>
                ini adalah Berita 1
              </p>
              <p>
                Rudi Ganteng ganteng ganteng ganteng
                ganteng ganteng
              </p>
            </p>
            <small class="text-muted">Pembaruan terakhir: Minggu, 28 Januari 2024 - 21:23</small>
          </li>
          <li class="list-group-item pt-0 px-0 mt-1">
            <h5 class="fw-bold text-success mb-1">Layanan</h5>
            <p class="text-muted mb-2">
              <small>Kamis, 25 Januari 2024 - 07:55</small>
            </p>
            <p class="text-muted" style="margin-bottom: 8px;">
              <p>
                Ini Adalah berita 2
              </p>
            </p>
            <small class="text-muted">Pembaruan terakhir: Kamis, 25 Januari 2024 - 07:55</small>
          </li>
        </ul>
        <h6 class="text-center mt-4">
          <hr>
          <a href="{{ route('informations') }}" class="d-grid btn btn-primary btn-sm waves-effect waves-light">Lihat Semua</a></h6>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
@endsection