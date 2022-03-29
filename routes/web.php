<?php

use Illuminate\Support\Facades\Route;
Route: use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/formulir',function(){
    $Pasiens = App\Models\Pasien::all();
    $Dokters = App\Models\Dokter::all();
    return view ('formulir',['Pasiens'=>$Pasiens,'Dokters'=>$Dokters]);
})->middleware(['auth'])->name('formulir');
Route::get("/article", [PostController::class, 'index'])->middleware(['auth'])->name('article');

// Route::prefix('/rekam_medis'->group(function(){
//     Route::get('/master',function(){
//         return view ('master');
//     });
//     Route::get('/pasien',function(){
//         return view('pasien');
//     });
//     Route::get('dokter',function(){
//         return view('dokter');
//     });
// }));
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
