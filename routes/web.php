<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo;
use App\Http\Controllers\About;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;


// Route::get('/demo/{name}/{id?}', function ($name,$id) {
// //  echo('welcome laravel 8');
// //  echo($name);
// //  echo($id);
// $data = compact('name','id');
//  return view("demo")-> with($data);
// });

// Route::get( '/{name?}',function($name) {
//     $demo = '<h1>user</h1>';
//     $data = compact('name','demo');

//     return view('home')->with($data);
// });

Route::get('/home', [Demo::class, 'index']);

Route::get('/about', [About::class, 'about']);
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/course', function () {
   return view('course');
});

Route::resource('photo', PhotoController::class);

Route::get('/customerdata', function () {
   $customers = Customer::all();
   echo "<pre>";
   print_r($customers->toArray([0]));
});

Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/view', [CustomerController::class, 'view']);
