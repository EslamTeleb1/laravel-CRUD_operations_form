<?php




use  App\Http\Controllers\islam;
use  App\Http\Controllers;


use Illuminate\Support\Facades\Route;

/*lawyer */



Route::get('/Home', function(){
    return view('Home');
});



//----------------

Route::get('/islam', [islam::class, 'index']);
Route::post('/sizeData', 'App\Http\Controllers\addSize@addSizeData') ;
Route::post('/deletSize/{num}', 'App\Http\Controllers\addSize@deletSize');
Route::post('/search/{num}', 'App\Http\Controllers\addSize@search');
Route::post('/saveData', 'App\Http\Controllers\addSize@saveData');
// Route::get('/islam','App\Http\Controllers\islam@index' );
//image upload 


Route::post('image-upload', 'App\Http\Controllers\addSize@imageUploadPost')->name('image.upload.post');

///

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/addSize', function () {
    return view('addSize');
})->name('home') ;

Route::get('/new', function () {
    return view('new');
})->name('p1');


Route::get('/new2', function () {

    return view('new2');

})->name('p2');

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
})->name('home');
Route::get('/addSize', function () {
    return view('addSize');
})->name('home') ;

Route::get('/new', function () {
    return view('new');
})->name('p1');


Route::get('/new2', function () {

    return view('new2');

})->name('p2');
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
} )->name('dashboard');

require __DIR__.'/auth.php';
