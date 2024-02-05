<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>{{ $web['title'] }}</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Description nya :v.">
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
  <meta name="author" content="x">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon"> <!-- [Font] Family -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/inter/inter.css') }}" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
<link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

@yield('css')

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
<div class="loader-track">
<div class="loader-fill"></div>
</div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
<div class="navbar-wrapper">
<div class="m-header">
<a href="{{ asset('dashboard/index.html') }}" class="b-brand text-primary">
<!-- ========   Change your logo from here   ============ -->
<img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
</a>
</div>
<div class="navbar-content">

<!-- Menu -->
@if ($web['menu'] == 'member')
@include('layouts.menu.member')
@else
@include('layouts.menu.admin')
@endif

<!-- End Menu -->

</div>
</div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
<div class="header-wrapper">
<!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
<ul class="list-unstyled">
<!-- ======= Menu collapse Icon ===== -->
<li class="pc-h-item pc-sidebar-collapse">
<button type="button" class="pc-head-link ms-0" id="sidebar-hide" style="background:none; border: none;">
<i class="ti ti-menu-2"></i>
</button>
</li>
<li class="pc-h-item pc-sidebar-popup">
<button type="button" class="pc-head-link ms-0" id="mobile-collapse" style="background:none; border: none;">
<i class="ti ti-menu-2"></i>
</button>
</li>
</ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
<ul class="list-unstyled">

<li class="dropdown pc-h-item">
<a class="pc-head-link dropdown-toggle arrow-none me-0"
data-bs-toggle="dropdown"
href="#test_settings" role="button" aria-haspopup="false" aria-expanded="false">
<svg class="pc-icon">
<use xlink:href="#custom-sun-1"></use>
</svg>
</a>
<div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
<a href="#!" class="dropdown-item" onclick="layout_change('dark')">
<svg class="pc-icon">
<use xlink:href="#custom-moon"></use>
</svg>
<span>Dark</span>
</a>
<a href="#!" class="dropdown-item" onclick="layout_change('light')">
<svg class="pc-icon">
<use xlink:href="#custom-sun-1"></use>
</svg>
<span>Light</span>
</a>
<a href="#!" class="dropdown-item" onclick="layout_change_default()">
<svg class="pc-icon">
<use xlink:href="#custom-setting-2"></use>
</svg>
<span>Default</span>
</a>
</div>
</li>

<li class="dropdown pc-h-item header-user-profile">
<a
class="pc-head-link dropdown-toggle arrow-none me-0"
data-bs-toggle="dropdown"
href="#"
role="button"
aria-haspopup="false"
data-bs-auto-close="outside"
aria-expanded="false"
>
<img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image" class="user-avtar" />
</a>
<div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
<div class="dropdown-header d-flex align-items-center justify-content-between">
<h5 class="m-0">Profile</h5>
</div>
<div class="dropdown-body">
<div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
<div class="d-flex mb-1">
<div class="flex-shrink-0">
<img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image" class="user-avtar wid-35" />
</div>
<div class="flex-grow-1 ms-3">
<h6 class="mb-1">Carson Darrin 🖖</h6>
<span>carson.darrin@company.io</span>
</div>
</div>
<hr class="border-secondary border-opacity-50" />
<p class="text-span">
Manage
</p>
<a href="{{ route('profile_settings') }}" class="dropdown-item">
<span>
<svg class="pc-icon text-muted me-2">
<use xlink:href="#custom-setting-outline"></use>
</svg>
<span>Pengaturan</span>
</span>
</a>
<a href="{{ route('profile_saldo') }}" class="dropdown-item">
<span>
<svg class="pc-icon text-muted me-2">
<use xlink:href="#custom-share-bold"></use>
</svg>
<span>Mutasi Saldo</span>
</span>
</a>
<hr class="border-secondary border-opacity-50" />
<div class="d-grid mb-3">
<button class="btn btn-primary">
<svg class="pc-icon me-2">
<use xlink:href="#custom-logout-1-outline"></use></svg
>Logout
</button>
</div>

</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</header>
<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<div class="pc-container">
<div class="pc-content">


<!-- [ Main Content ] start -->
@yield('content')
<!-- [ Main Content ] end -->

</div>
</div>
<!-- [ Main Content ] end -->
<footer class="pc-footer">
<div class="footer-wrapper container-fluid">
<div class="row">
<div class="col my-1">
<p class="m-0">
{{ env('APP_NAME') }} &#9829; crafted by Team <a href="#" target="_blank">X</a>
</p>
</div>

</div>
</div>
</footer>
<!-- Required Js -->
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

<script>
layout_change('light');
</script>

<script>
layout_theme_contrast_change('false');
</script>

<script>
change_box_container('false');
</script>

<script>
layout_caption_change('true');
</script>

<script>
layout_rtl_change('false');
</script>

<script>
preset_change("preset-1");
</script>

@yield('js')

</body>
<!-- [Body] end -->

</html>