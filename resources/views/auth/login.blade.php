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
                <img src="{{ asset('assets/images/authentication/google.svg') }}" alt="img"> <span> Masuk dengan Google</span>
              </button>
            </div>
          </div>
          <div class="saprator my-3">
            <span>OR</span>
          </div>
          <form action="">
            <div class="form-group mb-3">
              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username atau Whatsapp">
            </div>
            <div class="form-group mb-3">
              <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="Password">
            </div>
            <div class="d-flex mt-1 justify-content-between align-items-center">
              <div class="form-check">
                <input class="form-check-input input-primary" type="checkbox" name="remember" id="customCheckc1" checked="">
                <label class="form-check-label text-muted" for="customCheckc1">Ingat Saya</label>
              </div>
              <h6 class="text-secondary f-w-400 mb-0"><a href="{{ url('auth/forgot') }}" clase="link-primary">Lupa Password?</a></h6>
            </div>
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
          </form>
          <div class="d-flex justify-content-between align-items-end mt-4">
            <h6 class="f-w-500 mb-0">Belum punya akun?</h6>
            <a href="{{ url('auth/register') }}" class="link-primary">Daftar sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection