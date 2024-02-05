@extends('layouts.auth')

@section('content')
<div class="auth-main">
  <div class="auth-wrapper v1">
    <div class="auth-form">
      <div class="card my-5">
        <div class="card-body">
          <div class="text-center">
            <a href="#"><img src="{{ asset('assets/images/logo-dark.svg') }}" alt="img"></a>
            <div class="d-grid my-3">
              <button type="button" class="btn mt-2 btn-light-primary bg-light text-white">
                <img src="{{ asset('assets/images/authentication/google.svg') }}" alt="img"> <span> Daftar dengan google</span>
              </button>
            </div>
          </div>
          <div class="saprator my-3">
            <span>OR</span>
          </div>
          <form action="">
              <div class="form-group mb-3">
                <input type="mail" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group mb-3">
                <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap">
              </div>
          <div class="form-group mb-3">
            <input type="text" name="whatsapp" class="form-control" placeholder="Whatsapp">
          </div>
          <div class="form-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group mb-3">
            <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password">
          </div>
          <div class="d-flex mt-1 justify-content-between">
            <div class="form-check">
              <input class="form-check-input input-primary" type="checkbox" name="terms" id="customCheckc1" checked="">
              <label class="form-check-label text-muted" for="customCheckc1">Saya setuju dengan <a href="#!" class="link-primary">Syarat & Ketentuan</a></label>
            </div>
          </div>
          <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
          </form>
          <div class="d-flex justify-content-between align-items-end mt-4">
            <h6 class="f-w-500 mb-0">Sudah punya akun?</h6>
            <a href="{{ url('auth/login') }}" class="link-primary">Masuk sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection