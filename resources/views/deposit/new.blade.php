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
          <li class="breadcrumb-item" aria-current="page">Deposit</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Deposit Baru</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Deposit Baru</h5>
      </div>
      <div class="card-body pb-3">
        <form method="POST">
          @csrf
          <div class="form-group">
            <label class="form-label">Jenis Pembayaran <span class="text-danger">*</span></label>
            <select class="select2 form-control" name="payment" id="payment">
              <option value="te">TRANSFER EWALLET</option>
              <option value="va">VIRTUAL ACCOUNT</option>
              <option value="mm">MINIMARKET</option>
            </select>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="address-check border rounded">
                <div class="form-check">
                  <input type="radio" name="method" value="1" class="form-check-input input-primary"
                  id="pay-1">
                  <label class="form-check-label d-block" for="pay-1">
                    <span class="card-body p-3 d-block">
                      <span class="h5 mb-3 d-block">QRIS (Fee Rp750 + 0.70%)</span>
                      <span class="d-flex align-items-center">
                        <img src="https://freyapp.my.id/assets/images/payment/qris.png" alt="img" width="59" height="16" class="img-fluid ms-1 ">
                      </span>
                    </span>
                  </label>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="address-check border rounded">
                <div class="form-check">
                  <input type="radio" name="method" value="1" class="form-check-input input-primary"
                  id="pay-2">
                  <label class="form-check-label d-block" for="pay-2">
                    <span class="card-body p-3 d-block">
                      <span class="h5 mb-3 d-block">DANA (Fee 3%)</span>
                      <span class="d-flex align-items-center">
                        <img src="https://freyapp.my.id/assets/images/payment/dana.svg" alt="img" width="59" height="16" class="img-fluid ms-1">
                      </span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group" id="form-bonus">
            <div class="table-responsive">
              <table class="table table-bordered mb-0">
                <thead>
                  <tr>
                    <th>Minimal Deposit</th>
                    <th>Bonus Deposit</th>
                  </tr>
                </thead>
                <tbody id="data-bonus">
                  <tr>
                    <td>
                      Rp 1.000
                    </td>
                    <td>
                      0%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="row">
            <div class="form-group col-md-6">
              <label class="form-label">Jumlah Deposit <span class="text-danger">*</span></label>
              <div class="input-group">
                <div class="input-group-text">
                  Rp.
                </div>
                <input type="number" class="form-control" name="amount" id="post-amount" placeholder="50000">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label class="form-label">Saldo Diterima</label>
              <div class="input-group">
                <div class="input-group-text">
                  Rp.
                </div>
                <input type="text" class="form-control" id="amount" value="0" disabled>
              </div>
            </div>
          </div>

          <div class="mb-0">
            <button type="submit" class="btn btn-primary float-end"><i class="fas fa-credit-card fs-6 me-2"></i>Deposit</button>
            <button type="reset" class="btn btn-danger float-end me-2"><i class="fas fa-sync fs-6 me-2"></i>Ulangi</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Informasi</h5>
      </div>
      <div class="card-body pb-3">
        <strong>Cara Melakukan Deposit Baru :</strong>
        <ul>
          <li>Pilih <em>Jenis Permintaan</em>.</li>
          <li>Pilih <em>Jenis Pembayaran</em>.</li>
          <li>Pilih <em>Metode Pembayaran</em>.</li>
          <li>Input <em>Jumlah Deposit</em> yang Anda inginkan.</li>
          <li>Transfer Pembayaran sesuai dengan nominal yang tertera.</li>
          <li>Saldo akan otomatis bertambah dalam beberapa menit apabila Anda menggunakan <em>Jenis Permintaan</em> <b><em>OTOMATIS</em></b>.</li>
        </ul>
        <strong>Penting !</strong>
        <ul>
          <li>Kami berhak menghapus atau memblokir akun Anda apabila terbukti melakukan kecurangan pada Deposit.</li>
          <li>Jika menggunakan <em>Jenis Permintaan</em> <b><em>MANUAL</em></b>, harap konfirmasi ke Admin agar Permintaan Deposit segera diterima.</li>
        </ul>
      </div>
    </div>
  </div>

</div>
@endsection

@section('js')

<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>

<script>
  var r1 = new Choices(document.getElementById('payment'));

  var r1 = new Choices('#payment',
    {
      removeItemButton: true
    });
</script>

@endsection