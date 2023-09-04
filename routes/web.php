<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Memberontroller;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});



Route::view('/home', 'template.pages.home');
// Route::view('/produk', 'template.pages.produk');
// Route::view('/member', 'template.pages.member');

// Route::get('/supplier', 'template.pages.supplier');
// Route::get('/supplier/data', [SupplierController::class, 'data'])->name('supplier.data');
// Route::resource('/supplier', SupplierController::class);

// Route::view('/pengeluaran', 'pengeluaran.pengeluaran');
Route::view('/pembelian', 'template.pages.pembelian');
Route::view('/penjualan', 'template.pages.penjualan');
// Route::view('/example-auth', 'template.pages.example-auth');
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);
// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Route::group(['middleware'=> 'auth'], function(){
//     Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
//     Route::resource('/kategori', KategoriController::class);
//     // Route::view('/kategori', 'kategori.kategori');
// });

Route::get('/kategori',[App\Http\Controllers\KategoriController::class,'index'])->name('index');
Route::post('/simpandt',[App\Http\Controllers\KategoriController::class,'store'])->name('simpandt');
Route::get('/admin/{id}/editdt',[App\Http\Controllers\KategoriController::class,'editdt'])->name('editdt');
Route::post('/admin/{id}/updatedt',[App\Http\Controllers\KategoriController::class,'updatedt'])->name('updatedt');
Route::get('/admin/{id}/hapusdt',[App\Http\Controllers\KategoriController::class,'hapusdt'])->name('hapusdt');

Route::get('/produk',[App\Http\Controllers\ProdukController::class,'dtproduk'])->name('dtproduk');
Route::get('/edit_produk/{id}',[App\Http\Controllers\ProdukController::class,'edit1'])->name('edit1');
Route::post('/simpan1',[App\Http\Controllers\ProdukController::class,'store'])->name('simpan1');
// Route::get('/admin/{id}/edit1',[App\Http\Controllers\ProdukController::class,'edit1'])->name('edit1');
Route::post('/admin/{id}/update1',[App\Http\Controllers\ProdukController::class,'update1'])->name('update1');
Route::get('/admin/{id}/hapus1',[App\Http\Controllers\ProdukController::class,'hapus1'])->name('hapus1');

Route::get('/member',[App\Http\Controllers\MemberController::class,'dtmember'])->name('dtmember');
Route::post('/smember',[App\Http\Controllers\MemberController::class,'tmember'])->name('smember');
Route::get('/admin/{id}/emember',[App\Http\Controllers\MemberController::class,'emember'])->name('emember');
Route::post('/admin/{id}/umember',[App\Http\Controllers\MemberController::class,'umember'])->name('umember');
Route::get('/admin/{id}/hps',[App\Http\Controllers\MemberController::class,'hps'])->name('hps');
Route::post('/member/cetak-member',[App\Http\Controllers\MemberController::class,'cetakMember'])->name('member.cetak_member');

Route::get('/supplier',[App\Http\Controllers\SupplierController::class,'dtsup'])->name('dtsup');
Route::post('/ssup',[App\Http\Controllers\SupplierController::class,'tsup'])->name('ssup');
Route::get('/admin/{id}/esup',[App\Http\Controllers\SupplierController::class,'esup'])->name('esup');
Route::post('/admin/{id}/usup',[App\Http\Controllers\SupplierController::class,'usup'])->name('usup');
Route::get('/admin/{id}/hsup',[App\Http\Controllers\SupplierController::class,'hsup'])->name('hsup');

Route::get('/pengeluaran',[App\Http\Controllers\PengeluaranController::class,'dtluar'])->name('dtluar');
Route::post('/tjenis',[App\Http\Controllers\PengeluaranController::class,'tjenis'])->name('tjenis');
