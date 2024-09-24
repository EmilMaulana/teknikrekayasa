<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LogoutController;
use App\Livewire\Blogs\Create;
use App\Livewire\Blogs\Edit;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('front.index');
// });



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

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Route::post('/dashboard/blog/{blogs:slug}', [BlogsController::class, 'update'])->name('blog.update');

route::prefix('/dashboard')->group(function () {    
    route::get('/blog/index', [BlogsController::class, 'index'])->name('blog.index');
    route::get('/blog/image/upload', [BlogsController::class, 'imageUpload'])->name('imageUpload');
    route::get('/blog/create', [BlogsController::class, 'create'])->name('blog.create');
    route::post('/blog/store', [Create::class, 'store'])->name('blog.store');
    route::get('/blog/{blogs:slug}/edit', [BlogsController::class, 'edit'])->name('blog.edit');
    route::post('/blog/{blog:slug}/update', [BlogsController::class, 'update'])->name('blog.update');
        
    // route::post('/blog/{blogs:slug}/update', [Edit::class, 'update'])->name('blog.update');
});


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/{blogs:slug}', [FrontController::class, 'show'])->name('front.post');   