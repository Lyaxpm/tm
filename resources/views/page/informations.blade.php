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
          <li class="breadcrumb-item" aria-current="page">Informasi</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Informasi</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-4">

    <a href="javascript:;" class="btn btn-primary mb-3" style="margin-bottom: 15px;" data-bs-toggle="modal" data-bs-target=".filter-data"><i class="fas fa-filter fs-6 me-2"></i>Filter Data</a>
    <div class="modal fade modal-fade-in-scale-up filter-data" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-filter me-2"></i>Filter Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-0">
            <form class="row">
              <div class="form-group col-md-3">
                <label class="form-label">Tampilkan</label>
                <select class="select2 form-control" name="row" id="select-r-1">
                  <option value="10">10 baris</option>
                  <option value="25">25 baris</option>
                  <option value="50">50 baris</option>
                  <option value="100">100 baris</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label">Tanggal</label>
                <div class="input-group">
                  <input type="date" class="form-control" name="start_date" value="">
                  <div class="input-group-prepend">
                    <span class="input-group-text">sampai</span>
                  </div>
                  <input type="date" class="form-control" name="end_date" id="table-end-date" value="">
                </div>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label">Filter Tipe</label>
                <select class="select2 form-control" name="filter_type" id="select-r-2">
                  <option value="">Semuanya</option>
                  <option value="info">INFORMASI</option>
                  <option value="service">LAYANAN</option>
                  <option value="maintenance">PERBAIKAN</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="form-label">Kata Kunci Cari</label>
                <input type="text" class="form-control" name="search_value" placeholder="Kata Kunci..." value="">
              </div>
              <div class="form-group col-md-6 d-grid">
                <a href="{{ route('informations') }}" class="btn btn-danger"><i class="fas fa-sync fs-6 me-2"></i>Reset</a>
              </div>
              <div class="form-group col-md-6 d-grid">
                <button type="submit" class="btn btn-primary"><i class="fas fa-filter fs-6 me-2"></i>Filter</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="card">
      <h5 class="card-header">Informasi</h5>
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
        <ul class="pagination pagination-sm text-nowrap mb-1">
          <!-- DATA -->
          <li class="page-item active primary"><a class="page-link" href="{{ route('informations') }}">1</a></li>
        </ul>
        <span class="text-muted">Menampilkan 1 sampai 1 dari 1 data.</span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>

<script>
  var r1 = new Choices(document.getElementById('select-r-1'));

  var r1 = new Choices('#select-r-1',
    {
      removeItemButton: true
    });

  var r2 = new Choices(document.getElementById('select-r-2'));

  var r2 = new Choices('#select-r-2',
    {
      removeItemButton: true
    });


</script>
@endsection