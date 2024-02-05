<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

/* Auth Route */
Route::get('auth/login', function () {
  return view('auth.login', [
    'web' => [
      'title' => 'V Smm | Login',
    ]
  ]);
});
Route::get('auth/register', function () {
  return view('auth.register', [
    'web' => [
      'title' => 'V Smm | Registrasi',
    ]
  ]);
});
Route::get('auth/forgot', function () {
  return view('auth.forgot', [
    'web' => [
      'title' => 'V Smm | Lupa Password',
    ]
  ]);
});
/* End Auth */

/* Dashboard Member */

Route::get('dashboard', function () {
  return view('dashboard', [
    'web' => [
      'title' => 'V Smm | Dashboard',
      'menu' => 'member'
    ],
  ]);
})->name('dashboard');

Route::get('page/informations', function () {
  return view('page.informations', [
    'web' => [
      'title' => 'V Smm | Informasi',
      'menu' => 'member'
    ],
  ]);
})->name('informations');

/* End Dashboard Member */

/* Order */

Route::get('order/new', function () {
  return view('order.new', [
    'web' => [
      'title' => 'V Smm | Order',
      'menu' => 'member'
    ],
  ]);
})->name('new_order');

Route::get('history/order', function () {
  return view('order.history', [
    'web' => [
      'title' => 'V Smm | History',
      'menu' => 'member'
    ],
  ]);
})->name('history_order');

Route::get('history/refil', function () {
  return view('order.refill', [
    'web' => [
      'title' => 'V Smm | History',
      'menu' => 'member'
    ],
  ]);
})->name('history_refill');

/* End Order */

/* Deposit */

Route::get('deposit/new', function () {
  return view('deposit.new', [
    'web' => [
      'title' => 'V Smm | Deposit',
      'menu' => 'member'
    ],
  ]);
})->name('new_deposit');

Route::get('deposit/history', function () {
  return view('deposit.history', [
    'web' => [
      'title' => 'V Smm | History Deposit',
      'menu' => 'member'
    ],
  ]);
})->name('history_deposit');

/* End Deposit */

/* Ticket */
Route::get('ticket/new', function () {
  return view('page.new_ticket', [
    'web' => [
      'title' => 'V Smm | Ticket',
      'menu' => 'member'
    ],
  ]);
})->name('new_ticket');

Route::get('ticket/list', function () {
  return view('page.list_ticket', [
    'web' => [
      'title' => 'V Smm | Ticket',
      'menu' => 'member'
    ],
  ]);
})->name('list_ticket');
/* End Ticket */

/* Lainya */

Route::get('page/layanan', function () {
  return view('page.layanan', [
    'web' => [
      'title' => 'V Smm | Daftar layanan',
      'menu' => 'member'
    ],
  ]);
})->name('list_layanan');

Route::get('page/api', function () {
  return view('page.api', [
    'web' => [
      'title' => 'V Smm | Api Dokumentasi',
      'menu' => 'member'
    ],
  ]);
})->name('api_doc');

Route::get('page/ketentuan', function () {
  return view('page.ketentuan_layanan', [
    'web' => [
      'title' => 'V Smm | Ketentuan Layanan',
      'menu' => 'member'
    ],
  ]);
})->name('page_layanan');

/* Profile */

Route::get('profile/settings', function () {
  return view('profile.settings', [
    'web' => [
      'title' => 'V Smm | Pengaturan',
      'menu' => 'member'
    ],
  ]);
})->name('profile_settings');

Route::get('profile/saldo', function () {
  return view('profile.saldo', [
    'web' => [
      'title' => 'V Smm | Mutasi Saldo',
      'menu' => 'member'
    ],
  ]);
})->name('profile_saldo');