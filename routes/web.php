<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

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
    return view('front.coba');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index', [
            'title' => "DASHBOARD"
        ]);
    })->name('dashboard');
});

route::prefix('/dashboard')->group(function () {    
    route::get('/blog/index', [BlogsController::class, 'index'])->name('blog.index');
    route::get('/blog/image/upload', [BlogsController::class, 'imageUpload'])->name('imageUpload');
    route::get('/blog/create', [BlogsController::class, 'create'])->name('blog.create');
    route::get('/blog/{id}/edit', [BlogsController::class, 'edit'])->name('blog.edit');
});
