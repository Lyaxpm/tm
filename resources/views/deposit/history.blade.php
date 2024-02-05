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
          <li class="breadcrumb-item" aria-current="page">Deposit</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Riwayat Deposit</h2>
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
        <h5>Riwayat Deposit</h5>
      </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table" id="pc-dt-simple">
            <thead>
              <tr>
                <th>ID</th>
                <th>PEMBAYARAN</th>
                <th>METODE</th>
                <th>JUMLAH TRANSFER</th>
                <th>SALDO DITERIMA</th>
                <th>STATUS</th>
                <th>TANGGAL DEPOSIT</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>VSX15R685</td>
                <td>Transfer eWallet</td>
                <td>QRIS (Fee Rp750 + 0.70%</td>
                <td>Rp 3.707</td>
                <td>Rp 2.936</td>
                <td><span class="badge bg-warning">Unpaid</span></td>
                <td>31 Jan 2024, 18:38</td>
                <td>
                  <a href="javascript:;" class="btn btn-primary btn-sm round" data-pc-animate="3d-flip-vertical" data-bs-toggle="modal" data-bs-target=".info-order"><i class="fas fa-search fs-6 me-2"></i>Lihat Detail</a>
                  <a href="javascript:;" onclick="confirm_cancel('51')" class="btn btn-danger btn-sm round"><i class="fas fa-times-circle fs-6 me-2"></i>Batalkan</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="modal fade info-order" id="modal1" tabindex="-1"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-info-circle me-2"></i>Informasi Deposit #1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-primary">
              <div class="alert-body">
                <i class="fas fa-exclamation-circle me-2"></i>Tagihan akan otomatis dibatalkan setelah melewati <em><b>Kamis, 01 Februari 2024 - 20:03</b></em>.
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Metode Pembayaran</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" value="BCA (Fee Rp 5.500)" disabled>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Jumlah Pembayaran</strong>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-text">
                    Rp.
                  </div>
                  <input type="text" class="form-control" value="15.500" disabled>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Saldo Diterima</strong>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-text">
                    Rp.
                  </div>
                  <input type="text" class="form-control" value="10.000" disabled>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Kode Pembayaran</strong>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control form-group" value="7900117900031758" disabled>
                <style>
                  .unpaid {
                    color: #F64D35;
                    border: 0.15rem solid #F64D35;
                    font-size: 1.5rem;
                    font-weight: 700;
                    display: inline-block;
                    padding: 0.25rem 0.50rem 0.05rem 0.50rem;
                    text-transform: uppercase;
                    border-radius: 1rem;
                    font-family: 'Courier';
                  }
                </style>
                <div class="d-flex justify-content-center">
                  <span class="unpaid">Unpaid</span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <strong>Informasi</strong>
              </div>
              <div class="col-md-6">
                <div class="payment-group accordion card mb-0" id="accordionStyle1">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button " data-bs-toggle="collapse" data-bs-target="#accordionStyle1-1" aria-expanded="false">
                        Internet Banking                                    </button>
                    </h2>
                    <div id="accordionStyle1-1" class="accordion-collapse collapse show" data-bs-parent="#accordionStyle1" style="">
                      <div class="accordion-body pb-0">
                        <ol style="margin-left: -.8rem;">
                          <li>Login ke internet banking klikbca Anda</li>
                          <li>Pilih menu <b>Transfer Dana</b> lalu pilih <b>Transfer ke BCA Virtual Account</b></li>
                          <li>Pilih <b>Dari Rekening</b></li>
                          <li>Masukkan Nomor VA (<b>7900117900031758</b>) lalu klik <b>Lanjutkan</b></li>
                          <li>Detail transaksi akan ditampilkan, pastikan data sudah sesuai lalu masukkan respon <b>Key BCA Appli 1</b></li>
                          <li>Klik <b>Kirim</b></li>
                          <li>Transaksi sukses, simpan bukti transaksi Anda</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-2" aria-expanded="false">
                        Mobile Banking                                    </button>
                    </h2>
                    <div id="accordionStyle1-2" class="accordion-collapse collapse " data-bs-parent="#accordionStyle1" style="">
                      <div class="accordion-body pb-0">
                        <ol style="margin-left: -.8rem;">
                          <li>Login pada aplikasi BCA mobile</li>
                          <li>Pilih <b>m-BCA</b> masukkan kode akses m-BCA</li>
                          <li>Pilih <b>m-Transfer</b></li>
                          <li>Pilih <b>BCA Virtual Account</b></li>
                          <li>Masukkan Nomor VA (<b>7900117900031758</b>) lalu klik <b>OK</b></li>
                          <li>Konfirmasi no virtual account dan rekening pendebetan</li>
                          <li>Periksa kembalian rincian pembayaran anda, lalu klik <b>Ya</b></li>
                          <li>Masukkan pin m-BCA</li>
                          <li>Pembayaran Selesai</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-3" aria-expanded="false">
                        ATM BCA                                    </button>
                    </h2>
                    <div id="accordionStyle1-3" class="accordion-collapse collapse " data-bs-parent="#accordionStyle1" style="">
                      <div class="accordion-body pb-0">
                        <ol style="margin-left: -.8rem;">
                          <li>Masukkan kartu ATM BCA & PIN</li>
                          <li>Pilih menu <b>Transaksi Lainnya > Transfer > Ke Rekening BCA Virtual Account</b></li>
                          <li>Masukkan Nomor VA (<b>7900117900031758</b>)</li>
                          <li>Di halaman konfirmasi, pastikan detail pembayaran sudah sesuai seperti Nomor VA, Nama, Produk dan Total Tagihan</li>
                          <li>Jika sudah benar, klik <b>Ya</b></li>
                          <li>Simpan struk transaksi sebagai bukti pembayaran</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
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
<script type="module">
  import {
    DataTable
  } from "{{ asset('assets/js/plugins/module.js') }}"
  window.dt = new DataTable("#pc-dt-simple");
</script>


@endsection