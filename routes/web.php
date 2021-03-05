<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

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
    return redirect()->route('materials.index');
});

Route::get('/yetkili/anasayfa', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

Route::resource('materials', MaterialController::class, ['names' => 'materials'])->middleware('auth');

require __DIR__.'/auth.php';
