<?php

use App\Models\Kandidat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\DashboardController;

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


Route::middleware(['guest'])->group(function () {

    Route::get('/', function () {

        $data = Kandidat::all();

        return view('users.home', compact('data'));
    });

    Route::get('/login', [SessionController::class, 'login'])->name('login');
    Route::post('/login/action', [SessionController::class, 'login_action']);
    Route::get('/register', [SessionController::class, 'register']);
    Route::post('/register/create', [SessionController::class, 'register_action']);
    Route::get('/register', [SessionController::class, 'register']);
    Route::get('/kandidat/daftar', [KandidatController::class, 'daftar_kandidat']);
    Route::post('/kandidat/daftar', [KandidatController::class, 'daftar_kandidat_action']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return redirect('/dashboard');
    });

    Route::get('/vote', [VoteController::class, 'index']);
    Route::post('/vote/create', [VoteController::class, 'create_action']);


    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/kandidat', [KandidatController::class, 'index']);
    Route::get('/kandidat/create', [KandidatController::class, 'create']);
    Route::post('/kandidat/create', [KandidatController::class, 'create_action']);
    Route::get('/kandidat/{id}/update', [KandidatController::class, 'update']);
    Route::post('/kandidat/{id}/update', [KandidatController::class, 'update_action']);



    // Route::get('/pemilihan', [PemilihanController::class, 'index']);
    // Route::get('/pemilihan/create', [PemilihanController::class, 'create']);
    // Route::post('/pemilihan/create', [PemilihanController::class, 'create_action']);
    // Route::get('/pemilihan/{id}update', [PemilihanController::class, 'update']);
    // Route::post('/pemilihan/{id}update', [PemilihanController::class, 'update_action']);



    Route::get('/logout', [SessionController::class, 'logout']);

    // Route::post('/register/create', [SessionController::class, 'register_action']);
});
