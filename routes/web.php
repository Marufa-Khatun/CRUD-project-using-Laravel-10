<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


/* Route::prefix('posts')->controller(PostController::class)->name('posts.')->group(function () {

Route::get('/list',  'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store',  'store')->name('store');
Route::get('/show/{id}', 'show')->name('show');
Route::get('/edit/{id}',  'edit')->name('edit');
Route::put('/update/{id}',  'update')->name('update');
Route::delete('/delete/{id}',  'destroy')->name('destroy');

}); */

Route::resource('posts', PostController::class);
Route::get('posts/status/update/{id}', [PostController::class. 'statusUpdate'])->name('posts.status.update');