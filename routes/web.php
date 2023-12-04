<?php

use App\Http\Controllers\Home\HomeContentController;
use App\Http\Controllers\Home\HomeNavigateController;
use App\Http\Controllers\Menu\CelebrityController;
use App\Http\Controllers\ProfileController;
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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Celebrity Routes

Route::middleware('auth')->group(function () {

    Route::controller(CelebrityController::class)->group(function () {
        Route::get('/create/celebrity', 'CreateCelebrity')->name('create.celeb');
        Route::post('/store/celebrity', 'StoreCelebrity')->name('celeb.store');
        Route::get('/all/celebrity', 'AllCelebrity')->name('all.celeb');

        Route::get('/profile/page', 'ProfilePage')->name('profile.page');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/edit/celebrity/{id}', 'EditCelebrity')->name('edit.celebrity');
        Route::post('/update/celebrity', 'UpdateCeleb')->name('update.celeb');
        Route::get('/delete/celebrity/{id}', 'DeleteCeleb')->name('delete.celebrity');
    });
});

// Home Routes 

Route::middleware(['auth'])->group(function () {
    Route::controller(HomeContentController::class)->group(function () {
        Route::get('/about/content', 'AboutContent')->name('content.about');
        Route::post('/store/about/content', 'StoreAboutContent')->name('store.about.content');
    });
});


// frontend Routes

Route::controller(HomeNavigateController::class)->group(function () {

    Route::get('/home', 'Home')->name('home');
    Route::get('/about', 'About')->name('about');
    Route::get('/celebrity/list', 'CelebrityList')->name('celebrity.list');
    Route::get('/celebrity/details/{id}', 'CelebrityDetails')->name('celebrity.details');
});

require __DIR__ . '/auth.php';
