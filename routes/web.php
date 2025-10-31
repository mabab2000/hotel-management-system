<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\ClientController;
Route::get('/', [ClientController::class, 'index']);
Route::get('/admin', [ClientController::class, 'admin']);
Route::get('/finedining', [ClientController::class, 'finedining']);
Route::get('/rooftop', [ClientController::class, 'rooftop']);
Route::get('/coffeelounge', [ClientController::class, 'coffeelounge']);
Route::get('/businesslounge', [ClientController::class, 'businesslounge']);
Route::get('/services', [ClientController::class, 'services']);
Route::get('/luxuryshuttle', [ClientController::class, 'luxuryshuttle']);
Route::get('/digitalconcierge', [ClientController::class, 'digitalconcierge']);




use App\Http\Controllers\BookController;
Route::get('/book', [BookController::class, 'index'])->name('book');
Route::post('/book', [BookController::class, 'book']);
Route::get('/clientdashboard', [BookController::class, 'clientdashboard'])->middleware('auth');




use App\Http\Controllers\ReservationController;
Route::get('/reservation', [ReservationController::class, 'index']);
Route::post('/reservation/store', [ReservationController::class, 'store']);


use App\Http\Controllers\RegisterController;
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// dashboard after login :


// use App\Http\Controllers\adminController;
// Route::get('/admin', [adminController::class, 'dashboard']);


// --- Admin Auth Routes ---
// Route::get('/loginAdmin', [App\Http\Controllers\AdminAuthController::class, 'showLoginForm'])->name('admin.loginAdmin');
// Route::post('/loginAdmin', [App\Http\Controllers\AdminAuthController::class, 'login'])->name('admin.login');

// Route::get('/registerAdmin', [App\Http\Controllers\AdminAuthController::class, 'showRegisterForm'])->name('admin.registerAdmin');
// Route::post('/registerAdmin', [App\Http\Controllers\AdminAuthController::class, 'register'])->name('admin.register');

// Route::post('/logout', [App\Http\Controllers\AdminAuthController::class, 'logout'])->name('admin.logout');

// --- Admin Dashboard ---
// Route::get('/dashboard', function () {
//     return view('admin.admindashboard');
// });
Route::get('/clear-cache', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Caches cleared';
});


