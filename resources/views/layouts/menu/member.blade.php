<ul class="pc-navbar">
  <li class="pc-item pc-caption">
    <label>Navigation</label>
  </li>

  <li class="pc-item">
    <a href="{{ route('dashboard') }}" class="pc-link">
      <span class="pc-micon">
        <svg class="pc-icon">
          <use xlink:href="#custom-status-up"></use>
        </svg>
      </span>
      <span class="pc-mtext">Dashboard</span>
    </a>
  </li>

  <li class="pc-item pc-caption">
    <label>Pemesanan</label>
  </li>

  <li class="pc-item">
    <a href="{{ route('new_order') }}" class="pc-link">
      <span class="pc-micon">
        <i data-feather="shopping-cart"></i>
      </span>
      <span class="pc-mtext">Pemesanan Baru</span>
    </a>
  </li>

  <li class="pc-item">
    <a href="{{ route('history_order') }}" class="pc-link">
      <span class="pc-micon">
        <i data-feather="airplay"></i>
      </span>
      <span class="pc-mtext">Riwayat Pemesanan</span>
    </a>
  </li>

  <li class="pc-item">
    <a href="{{ route('history_refill') }}" class="pc-link">
      <span class="pc-micon">
        <i data-feather="crosshair"></i>
      </span>
      <span class="pc-mtext">Riwayat Refill</span>
    </a>
  </li>

  <li class="pc-item pc-caption">
    <label>Deposit</label>
  </li>

  <li class="pc-item">
    <a href="{{ route('new_deposit') }}" class="pc-link">
      <span class="pc-micon">
        <svg class="pc-icon">
          <use xlink:href="#custom-bag"></use>
        </svg>
      </span>
      <span class="pc-mtext">Deposit Baru</span>
    </a>
  </li>

  <li class="pc-item">
    <a href="{{ route('history_deposit') }}" class="pc-link">
      <span class="pc-micon">
        <i data-feather="credit-card"></i>
      </span>
      <span class="pc-mtext">Riwayat Deposit</span>
    </a>
  </li>

  <li class="pc-item pc-caption">
    <label>TIKET</label>
  </li>

  <li class="pc-item">
    <a href="{{ route('new_ticket') }}" class="pc-link">
      <span class="pc-micon">
        <i data-feather="message-circle"></i>
      </span>
      <span class="pc-mtext">Tiket Baru</span>
    </a>
  </li>

  <li class="pc-item">
    <a href="{{ route('list_ticket') }}" class="pc-link">
      <span class="pc-micon">
        <i class="material-icons-two-tone">headset_mic</i>
      </span>
      <span class="pc-mtext">Riwayat Tiket</span>
    </a>
  </li>

  <li class="pc-item pc-caption">
    <label>PAGE</label>
  </li>

  <li class="pc-item">
    <a href="{{ route('api_doc') }}" class="pc-link">
      <span class="pc-micon">
        <i class="material-icons-two-tone">local_fire_department</i>
      </span>
      <span class="pc-mtext">Api Dokumentasi</span>
    </a>
  </li>

  <li class="pc-item">
    <a href="{{ route('list_layanan') }}" class="pc-link">
      <span class="pc-micon">
        <i class="material-icons-two-tone">toll</i>
      </span>
      <span class="pc-mtext">Daftar Layanan</span>
    </a>
  </li>

  <li class="pc-item pc-caption">
    <label>LAINNYA</label>
  </li>
  
    <li class="pc-item">
    <a href="{{ route('page_layanan') }}" class="pc-link">
      <span class="pc-micon">
        <i class="material-icons-two-tone">privacy_tip</i>
      </span>
      <span class="pc-mtext">Ketentuan Layanan</span>
    </a>
  </li>

</ul>