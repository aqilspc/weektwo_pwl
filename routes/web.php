<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Praktikum 1

// Route::get('/{nama}', function ($nama) {
// 	echo "Selamat Datang".' '.$nama;
// });

// Route::get('/about/{nim}/{nama}', function ($nim,$nama) {
// 	echo "Selamat Datang".' '.$nama.' Nim'. ':'.$nim;
// });

// Route::get('/articles/{id}', function ($id) {
// 	echo "Halaman artikel dengan id ".$id;
// });


//Praktikum 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

 // Route::get('/', [HomeController::class, 'index']);
 // Route::get('/about', [AboutController::class, 'about']);
 // Route::get('/articles/{id}', [ArticlesController::class, 'articles']);


//Praktikum 3
// Route::prefix('category')->group(function () {
//     Route::get('/games/{category}', function ($category) {
//         return 'games'.' '.$category;
//     });
// });

 // Route::get('/news/{slug}', function ($slug) {
 // 	echo "Halaman news dengan slug ".$slug;
 // });

// Route::prefix('program')->group(function ($category) {
//     Route::get('/category/{category}', function ($category) {
//         return $category;
//      });
//  });

Route::resource('contact', ContactController::class);