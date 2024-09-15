<?php

use App\Http\Controllers\HomeController;
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
    return redirect("/dashboard");
});
Route::get("/dashboard",function(){
    return view("pages.index");
});

Route::get('/home', [HomeController::class, 'index']);
// Mengelompokkan rute-rute terkait dengan data umum
Route::prefix('data-umum')->group(function () {
    Route::get('/daftar-kelas', function () {
        return view('pages.data-umum.kelas');
    });

    Route::get('/daftar-prodi', function () {
        return view('pages.data-umum.prodi');
    });

    Route::get('/daftar-ruangan', function () {
        return view('pages.data-umum.ruang');
    });

    Route::get('/daftar-semester', function () {
        return view('pages.data-umum.semester');
    });

    Route::get('/tahun-ajaran', function () {
        return view('pages.data-umum.tahun-ajaran');
    });

    Route::get('/mata-kuliah', function () {
        return view('pages.data-umum.mata-kuliah');
    });

    Route::get('/kaprodi', function () {
        return view('pages.data-umum.kaprodi');
    });
    Route::get('/wakil-direktur', function () {
        return view('pages.data-umum.wadir');
    });
});

Route::get("/jadwal-mengajar",function(){
    return view("pages.jadwal-mengajar.index");
});
Route::get("/jadwal-mengajar/create",function(){
    return view("pages.jadwal-mengajar.tambah-jadwal");
});

Route::get("/data-direktur",function(){
    return view("pages.data-direktur.index");
});
Route::get("/data-dosen",function(){
    return view("pages.data-dosen.index");
});