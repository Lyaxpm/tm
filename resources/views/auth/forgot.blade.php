@extends('layouts.auth')

@section('content')
<div class="auth-main">
  <div class="auth-wrapper v1">
    <div class="auth-form">
      <div class="card my-5">
        <div class="card-body">
          <form action="">
            <a href="#"><img src="{{ asset('assets/images/logo-dark.svg') }}" class="mb-4 img-fluid" alt="img"></a>
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Lupa Password</b></h3>
              <a href="{{ url('auth/login') }}" class="link-primary">Kembali masuk</a>
            </div>
            <div class="form-group mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
            </div>
            <div class="d-grid mt-3">
              <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection