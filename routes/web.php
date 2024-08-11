<?php
// use Filament\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Merchant\RegisterController;
use App\Http\Controllers\Merchant\MerchantRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use Illuminate\Http\Request;
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
// Route for handling login requests
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/merchant/login', [LoginController::class, 'login'])->name('login');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');

Route::get('/branch', function () {
    return view('branch');
})->name('branch');


// Route::get('/merchant', function () {
//     return redirect('/merchant');
// });




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     })->name('welcome');
// });


Route::get('/merchant/register', [MerchantRegisterController::class, 'showRegistrationForm'])
    ->name('merchant.register');

Route::get('/merchant/login', function () {
    return view('auth.merchant.login');
})->name('auth.merchant.login');
