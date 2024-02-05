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
          <li class="breadcrumb-item" aria-current="page">Profile</li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0">Pengaturan</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body py-0">
        <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="profile-tab-4" data-bs-toggle="tab" href="#profile" role="tab"
              aria-selected="true">
              <i class="ti ti-user me-2"></i>Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab-5" data-bs-toggle="tab" href="#s-key" role="tab"
              aria-selected="true">
              <i class="ti ti-key me-2"></i>Api
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab-4">
        <div class="card">
          <div class="card-header">
            <h5>Profile</h5>
          </div>
          <div class="card-body pb-3">
            <div class="row">
              <div class="col-md-6">
                <form method="POST" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label class="form-label">Profile</label><br>
                      <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="rounded-circle" style="width: 80px;" alt="Profile">
                    </div>
                    <div class="form-group col-md-9">
                      <label class="form-label">New Profile (.jpg, .jpeg, .png)</label>
                      <input class="form-control mb-0" type="file" name="profile" id="input-profile" accept="image/jpg,image/jpeg,image/png">
                    </div>
                  </div>
                  <div class="mb-0">
                    <button type="submit" class="btn btn-primary float-end"><i class="fas fa-edit fs-6 me-2"></i>Ubah</button>
                    <a href="{{ route('profile_settings') }}" class="btn btn-danger float-end me-2"><i class="fas fa-sync fs-6 me-2"></i>Reset</a>
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <form method="POST" autocomplete="off">
                  @csrf
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" value="rzombok@gmail.com" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Whatsapp</label>
                    <div class="col-md-9">
                      <input type="number" class="form-control" value="6285730882379" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Username</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" value="rudiono" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="full_name" value="Rud Az">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label">Password Saat Ini <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="mb-0">
                    <button type="submit" class="btn btn-primary float-end"><i class="fas fa-cog fs-6 me-2"></i>Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Ubah Password</h5>
            </div>
            <div class="card-body pb-3">
              <form method="POST" action="">
                @csrf
                <div class="form-group">
                  <label class="form-label">Password Baru <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="npassword">
                </div>
                <div class="form-group">
                  <label class="form-label">Konfirmasi Password Baru <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="cnpassword">
                </div>
                <div class="form-group">
                  <label class="form-label">Password Saat Ini <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-0">
                  <button type="submit" class="btn btn-primary float-end"><i class="fas fa-cog fs-6 me-2"></i>Ubah Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane" id="s-key" role="tabpanel" aria-labelledby="profile-tab-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Credentials</h5>
          </div>
          <div class="card-body pb-3">

            <div class="form-group">
              <label class="form-label">API ID</label>
              <input type="text" class="form-control" value="25" disabled="">
            </div>
            <form action="">
              @csrf
              <div class="form-group">
                <label class="form-label">API Key</label>
                <div class="input-group">
                  <input type="text" class="form-control" value="ABCDEFGHIJKLMNOPQRSTUVSXYZ" disabled="">
                  <button type="button" class="btn btn-primary"><i class="fas fa-shuffle fs-6 me-2"></i>Buat API Key</button>

                </div>
              </div>
            </form>
            <form action="">
              @csrf
              <div class="form-group">
                <label class="form-label">Secret Key <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="secret_key">
              </div>
              <div class="form-group">
                <label class="form-label">Password Saat Ini <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="mb-0 float-end">
                <button type="submit" class="btn btn-primary"><i class="fas fa-shuffle fs-6 me-2"></i>Ubah Secret Key</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Whitelist IP</h5>
          </div>
          <div class="card-body pb-3">
            <form method="POST" action="">
              @csrf
              <div class="form-group">
                <label class="form-label">Whitelist IP <span class="text-danger">*</span></label>
                <input type="text" class="form-control mb-1" name="whitelist_ip" value="">
                <small class="text-danger">* Gunakan koma (,) sebagai pemisah apabila IP lebih dari satu.<br>* Maksimal 3 IP.</small>
              </div>
              <div class="form-group">
                <label class="form-label">Password Saat Ini <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="mb-0 float-end">
                <button type="submit" class="btn btn-primary"><i class="fas fa-cogs fs-6 me-2"></i>Ubah Whitelist IP</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
@endsection

@section('js')

@endsection