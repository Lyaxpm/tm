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
          <li class="breadcrumb-item" aria-current="page">Pemesanan</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Pemesanan Baru</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <a class="btn mb-4 btn-primary" data-bs-toggle="collapse" href="#filterCategory"><i class="fas fa-filter fs-6 me-2"></i>Filter Kategori</a>
  </div>
  <div class="col-md-12">
    <div class="collapse multi-collapse" id="filterCategory">
      <div class="row gx-1 mb-4">
        <div class="col-6 col-lg-4 col-xl-3 d-grid">
          <button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnAll" id="resetFC1" onclick="filterCategory('btnAll', '0');"><span class="d-flex align-items-center"><i class="fas fa-adjust fs-4 me-2" style="margin-top: 1px;"></i>Semua</span></span></button>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-grid">
        <button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnInstagram" id="resetFC2" onclick="filterCategory('btnInstagram', 'Instagram');"><span class="d-flex align-items-center"><i class="fab fa-instagram fs-4 me-2" style="margin-top: 1px;"></i>Instagram</span></span></button>
    </div>
    <div class="col-6 col-lg-4 col-xl-3 d-grid">
      <button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnFacebook" id="resetFC3" onclick="filterCategory('btnFacebook', 'Facebook');"><span class="d-flex align-items-center"><i class="fab fa-facebook fs-4 me-2" style="margin-top: 1px;"></i>Facebook</span></span></button>
  </div>
  <div class="col-6 col-lg-4 col-xl-3 d-grid">
    <button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnTwitter" id="resetFC4" onclick="filterCategory('btnTwitter', 'Twitter');"><span class="d-flex align-items-center"><i class="fab fa-twitter fs-4 me-2" style="margin-top: 1px;"></i>Twitter</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
  <button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnTiktok" id="resetFC5" onclick="filterCategory('btnTiktok', 'Tiktok,Tik tok');"><span class="d-flex align-items-center"><i class="fab fa-tiktok fs-4 me-2" style="margin-top: 1px;"></i>Tiktok</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnSpotify" id="resetFC6" onclick="filterCategory('btnSpotify', 'Spotify');"><span class="d-flex align-items-center"><i class="fab fa-spotify fs-4 me-2" style="margin-top: 1px;"></i>Spotify</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnGoogle" id="resetFC7" onclick="filterCategory('btnGoogle', 'Google');"><span class="d-flex align-items-center"><i class="fab fa-google fs-4 me-2" style="margin-top: 1px;"></i>Google</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnTelegram" id="resetFC8" onclick="filterCategory('btnTelegram', 'Telegram');"><span class="d-flex align-items-center"><i class="fab fa-telegram fs-4 me-2" style="margin-top: 1px;"></i>Telegram</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnDiscord" id="resetFC9" onclick="filterCategory('btnDiscord', 'Discord');"><span class="d-flex align-items-center"><i class="fab fa-discord fs-4 me-2" style="margin-top: 1px;"></i>Discord</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnTwitch" id="resetFC10" onclick="filterCategory('btnTwitch', 'Twitch');"><span class="d-flex align-items-center"><i class="fab fa-twitch fs-4 me-2" style="margin-top: 1px;"></i>Twitch</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnWebTraffic" id="resetFC11" onclick="filterCategory('btnWebTraffic', 'Web Traffic,Website Traffic');"><span class="d-flex align-items-center"><i class="fas fa-globe fs-4 me-2" style="margin-top: 1px;"></i>Web Traffic</span></span></button>
</div>
<div class="col-6 col-lg-4 col-xl-3 d-grid">
<button type="button" class="p-2 btn btn-outline-primary btn-sm d-block text-nowrap mb-1 btn-brand btnYoutube" id="resetFC12" onclick="filterCategory('btnYoutube', 'Youtube');"><span class="d-flex align-items-center"><i class="fab fa-youtube fs-4 me-2" style="margin-top: 1px;"></i>Youtube</span></span></button>
</div>
</div>
</div>
</div>

<div class="col-md-8">
<div class="card">
<div class="card-header">
<h5 class="mb-0">
<span class="pc-micon">
<i data-feather="shopping-cart" class="me-2"></i>
</span>Pemesanan Baru</h5>
</div>
<div class="card-body pb-3">

<form action="" method="POST" accept-charset="utf-8">
@csrf
<div class="form-group">
<label class="form-label">Kategori <span class="text-danger">*</span></label>
<select class="select2 form-control" name="category" id="category">
<option value="0">-- Pilih Kategori --</option>
</select>
</div>

<div class="form-group">
<div class="d-flex justify-content-between">
<label class="form-label">Layanan <span class="text-danger">*</span> <span id="fav_service" style="cursor:pointer;"></span></label>

<!-- Refil true/false edit colornya aja -->
<span class="fw-bolder text-secondary small mt-1" id="is_refill"><i class="fas fa-question-circle"></i> Refill Button</span>
</div>
<select class="select2 form-control" name="service" id="service">
<option value="0">-- Pilih Layanan --</option>
</select>
</div>

<div class="form-group">
<label class="form-label">Deskripsi</label>
<span class="form-control text-break" style="height: auto;" id="description" disabled>Ini Adalah Deskripsi jaksksisjsjsjeiiejejejekej ueueueieiieiieie ududieiid jejeuie ueueuue hehehue hehehe</span>
</div>

<div class="row">
<div class="form-group col-md-4">
<label class="form-label">Minimal Pesanan</label>
<input type="text" class="form-control" value="0" id="min-amount" disabled>
</div>
<div class="form-group col-md-4">
<label class="form-label">Maksimal Pesanan</label>
<input type="text" class="form-control" value="0" id="max-amount" disabled>
</div>
<div class="form-group col-md-4">
<label class="form-label" id="label-price">Harga / 1000</label>
<div class="input-group">
<div class="input-group-text">
Rp
</div>
<input type="text" class="form-control" value="0" id="price" disabled>
</div>
</div>
</div>

<div class="row">
<div class="form-group col-md-6">
<label class="form-label">Target <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="target" id="target">
</div>
<div class="form-group col-md-6">
<label class="form-label">Jumlah Pesanan <span class="text-danger">*</span></label>
<input type="number" class="form-control" name="quantity" id="quantity">
</div>
</div>

<!-- JIKA CUSTOM COMMENT, SEO DAN SEBAGAINYA REMOVE CLASS d-none -->

<div class="form-group d-none" id="formCustomComments">
<label class="form-label">Comments <span class="text-danger">*</span></label>
<textarea class="form-control" id="inputCustomComments" rows="4" placeholder="*Comments list separated by Enter."></textarea><span class="text-danger" id="inputCustomCommentsAlert"></span>
</div>


<div class="row">
<div class="form-group col-md-6">
<label class="form-label">Waktu Rata-Rata <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" title="<em>Waktu rata-rata</em> didasarkan pada 10 pesanan terakhir dengan status pesanan <em>Success</em>."><i class="fas fa-exclamation-circle"></i></a></label>
<input type="text" class="form-control" id="average_time" value="-" disabled>
</div>
<div class="form-group col-md-6">
<label class="form-label">Total Harga</label>
<div class="input-group">
<div class="input-group-text">
Rp
</div>
<input type="text" class="form-control" value="0" id="total-price" disabled>
</div>
</div>
</div>

<div class="mb-0">
<button type="submit" class="btn btn-primary float-end"><i class="fas fa-cart-plus fs-6 me-2"></i>Pesan</button>
<button type="reset" class="btn btn-danger float-end me-2"><i class="fas fa-sync fs-6 me-2"></i>Ulangi</button>
</div>
</form>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<div class="card-header">
<h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Informasi</h5>
</div>
<div class="card-body pb-3">
<b>Rules Pemesanan:</b>
<ul>
<li>Pastikan Anda memenginput data yang benar sesuai format yang pada kolom <b>deskripsi</b>, karena kami tidak bisa <b>membatalkan pesanan</b>.</li>
<li><b>Jangan</b> menggunakan <b>lebih dari satu layanan sekaligus</b> untuk data/target yang sama. Harap tunggu status <em>Success</em> pada pesanan sebelumnya baru melakukan pesanan kepada data/target yang sama. Hal ini <b>tidak akan membantu mempercepat orderan Anda</b> karena kedua orderan bisa jadi berstatus <em>Success</em> tetapi hanya tercapai target dari salah satu pesanan dan <b>tidak ada pengembalian dana</b>.</li>
<li>Setelah pesanan berhasil, jika data/target yang diinput tidak ditemukan (diubah atau menjadi private), pesanan akan otomatis menjadi <em>Success</em> dan <b>tidak ada pengembalian dana</b>.</li>
<li>Jika status pesanan <em>Error</em> & <em>Partial</em>, saldo Anda akan otomatis dikembalikan.</li>
<li>Jumlah <b>Maksimal Pesanan</b> menunjukkan kapasitas layanan tersebut untuk satu target, bukan menunjukkan kapasitas sekali pemesanan. Apabila Anda telah menggunakan semua kapasitas <b>Maksimal Pesanan</b> layanan, Anda tidak bisa menggunakan layanan itu lagi dan harus menggunakan layanan yang lain. Oleh karena itu kami menyediakan banyak layanan dengan kapasitas <b>Maksimal Pesanan</b> yang lebih besar.</li>
<li>Dengan melakukan pemesanan, Anda dianggap sudah memahami dan menyetujui <b><em>Syarat & Ketentuan.</em></b></li>
</ul>
<br>
<b>Penting!</b>
<ul>
<li>Jika Anda mendapat pesan gagal saat melakukan pemesanan, silakan informasikan layanan tersebut melalui <em><b><a href="#">Tiket</a></b></em> atau hubungi Admin.</li>
</ul>
</div>
</div>
</div>

</div>

@endsection

@section('js')
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>

<script>

function filterCategory(btn, category) {
for (let i = 0; i <= 12; i++) {
$('#resetFC' + i).removeClass('active');
}
$('.' + btn).addClass('active');
$.ajax({
type: "POST",
url: "",
data: "",
dataType: "html",
success: function(data) {
$('#category').html(data);
$('#service').html('<option value="0">Pilih Kategori</option>');
reset();
},
error: function() {
$('#ajax-result').html('<font color="red">Terjadi kesalahan! Silahkan refresh halaman.</font>');
}
});
}


var r1 = new Choices(document.getElementById('category'));

var r1 = new Choices('#category',
{
removeItemButton: true
});

var r2 = new Choices(document.getElementById('service'));

var r2 = new Choices('#service',
{
removeItemButton: true
});


</script>
@endsection