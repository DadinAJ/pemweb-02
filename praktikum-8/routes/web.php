<?php

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
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello/{nama}/{alamat}/{kata}', function ($nama, $alamat, $kata) {
    return "<h2> Hello $nama dari $alamat $kata </h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id] );
});

use App\Http\Controllers\UserController;

Route::get('/user',
    [UserController::class, 'index']);

Route::get('/user/daftar',
    [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');


use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function(){

    Route::get('/',
        [TokoController::class, 'index']);

    Route::get('/detail',
        [TokoController::class, 'detail']);

    Route::group(['middleware' => ['auth']], function(){

        Route::get('/admin',
            [TokoController::class, 'admin'])->name('produk.admin');
        
        Route::get('create',
            [TokoController::class, 'create'])->name('produk.create');
        
        Route::get('/profile',
            [TokoController::class, 'index']);
        
        Route::post('/',
            [TokoController::class, "store"])->name('produk.store');
    
        Route::get('/{product}/edit',
            [TokoController::class, 'edit'])->name('produk.edit');
    
        Route::delete('/{product}',
            [TokoController::class, 'destroy'])->name('produk.destroy');
    
        Route::put('/{product}',
            [TokoController::class, 'update'])->name('produk.update');
    });










    

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
