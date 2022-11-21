<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SallerAuthController;


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


   
// Route::post('/newaccount', [SallerAuthController::class,'createSaller'])->name('Saller.Create'); 




Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('optimize');
    // Artisan::call('migrate:fresh');

     return response()->json(['status' => 'Done', 'message' => 'server has been clean'], 200);

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::resources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);
// https://laravel.com/docs/9.x/controllers

// Route::get('contact-us-email', function () {
//     $data = ['first_name' => 'Umar', 'last_name' => 'Aslam', 'email' => 'umar@abc.com', 'message' => 'lorem ipsum', 'phone' => ''];
//     return (new ContactUs($data))->render();
// });