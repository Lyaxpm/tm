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
          <h2 class="mb-0">Tiket Baru</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Tiket Baru</h5>
      </div>
      <div class="card-body pb-3">
        <form method="POST">
          @csrf
          <div class="form-group">
            <label class="form-label">Subjek <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="subject">
          </div>
          <div class="form-group">
            <label class="form-label">Tipe <span class="text-danger">*</span></label>
            <select class="select2 form-control" name="type" id="type">
              <option value="order">Pesanan</option>
              <option value="deposit">Deposit</option>
              <option value="other">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Pesan <span class="text-danger">*</span></label>
            <textarea class="form-control" name="content" rows="4"></textarea>
          </div>
          <div class="mb-0">
            <button type="submit" class="btn btn-primary float-end">Kirim</button>
            <button type="reset" class="btn btn-danger float-end me-2">Ulangi</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h4 class="mb-0"><i class="fas fa-info-circle me-2"></i>Informasi</h4>
      </div>
      <div class="card-body pb-3">
        <strong>Cara Membuat Tiket Baru :</strong>
        <ul>
          <li>Input <em>Subjek</em> yang Anda inginkan.</li>
          <li>Pilih <em>Tipe Tiket</em> (Pesanan, Deposit, Lainnya).</li>
          <li>Kami akan segera merespon tiket Anda.</li>
        </ul>
        <strong>Penting !</strong>
        <ul>
          <li>Kami berhak menghapus atau memblokir akun Anda apabila terbukti melakukan tindakan pelanggaran pada Tiket.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')

<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>

<script>
  var r1 = new Choices(document.getElementById('type'));

  var r1 = new Choices('#type',
    {
      removeItemButton: true
    });
</script>

@endsection