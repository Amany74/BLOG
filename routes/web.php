<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;


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

Route::get('/welcome', 'App\http\Controllers\BlogController@welcome');
Route::get('/', 'App\http\Controllers\BlogController@welcome');

Auth::routes();


// Route::get('/links', function () {
//     return view('frontend.links');
// })->name('links');
Route::get('/votes', function () {
    return view('frontend.votes');
})->name('votes');
// Route::get('/profile', function () {
//     return view('frontend.profile');
// })->name('profile');




// showing all blogs
Route::get('/profile', 'App\Http\Controllers\HomeController@profile')->name('profile');
Route::get('/blogs', 'App\Http\Controllers\BlogController@show')->name('blogs');
Route::get('/blogs/delete/{id}', 'App\Http\Controllers\BlogController@delete');
Route::get('/blogs/update/{id}', 'App\Http\Controllers\BlogController@update');
Route::post('/blogs/update_action/', 'App\Http\Controllers\BlogController@update_action')->name('update_action');
Route::get('/create', 'App\Http\Controllers\BlogController@create')->name('create');
Route::post('/welcome', 'App\Http\Controllers\BlogController@store');
Route::get('/links', 'App\Http\Controllers\LinkController@index');
Route::post('/create-comment', 'App\Http\Controllers\CommentController@create')->name('create-comment');
Route::get('/blogs/{id}', 'App\Http\Controllers\BlogController@index')->name('blog');
