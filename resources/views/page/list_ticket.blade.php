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
          <li class="breadcrumb-item" aria-current="page">Tiket</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Riwayat Tiket</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <!-- [ basic-table ] start -->
  <div class="col-xl-12">
    <a href="javascript:;" class="btn btn-warning mb-3" data-pc-animate="3d-flip-vertical" data-bs-toggle="modal" data-bs-target=".info-refil"><i class="fas fa-info-circle fs-6 me-2"></i>Informasi Tiket</a>

    <div class="modal fade info-refil" id="modal" tabindex="-1"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-info-circle me-2"></i>Informasi Tiket</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning mb-0">
              <h5 class="alert-heading"><i class="fas fa-info-circle me-2"></i>Informasi Untuk Tata Cara Memakai Fitur Tiket</h5>
              <div class="alert-body">
                <ul class="mb-0">
                  <li>Pastikan sudah membuat tiket dengan pertanyaan yang anda ingin tanyakan</li>
                  <li>Pastikan <b><em>Email</em></b> atau <b><em>WhatsApp</em></b> anda aktif</li>
                  <li>Tunggu beberapa saat admin akan merespon anda melalui <b><em>Email</em></b> atau <b><em>WhatsApp</em></b> yang tertera diakun kalian.</li>
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
        <h5>Data Tiket</h5>
      </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table" id="pc-dt-simple">
            <thead>
              <tr>
                <th>ID</th>
                <th>TGL. DIBUAT</th>
                <th>TGL. PEMBARUAN</th>
                <th>TIPE</th>
                <th>SUBJEK</th>
                <th>STATUS</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1</td>
                <td>Kemarin - 14:19</td>
                <td>Kemarin - 14:19</td>
                <td>Layanan</td>
                <td>New Layanan Instagram</td>
                <td><span class="badge bg-light-warning rounded-pill f-12">OPEN</span></td>
                <td class="text-center">
                  <ul class="list-inline me-auto mb-0">
                    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="lihat">
                      <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default" data-bs-toggle="modal"
                        data-bs-target="#tiket_modal">
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