<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Mail\NewUserWelcomeMail;
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



Auth::routes();
route::get('/email',function(){
   return new NewUserWelcomeMail();
});
route::post('/follow/{user}','FollowsController@store');
Route::get('/','PostsController@index');
route::get('/p/create','PostsController@create');
route::post('/p','PostsController@store');
route::get('/p/{post}','PostsController@show');


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
