<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminOfficeController;
<<<<<<< HEAD

=======
>>>>>>> b4b6f60 (Add user resource)
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
    return view('admin.dashboard');
});

<<<<<<< HEAD
Route::get('admin/offices/{id}', [AdminOfficeController::class, 'show']);
=======
>>>>>>> b4b6f60 (Add user resource)
Route::get('admin/offices', [AdminOfficeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
