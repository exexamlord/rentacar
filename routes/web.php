<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\carsmainController;
use App\Admin\Controllers\MainusersControllers;
use Illuminate\Support\Facades\DB;

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



route::get('/',[TemplateController::class,'index']);
Route::get('/cars', [carsmainController::class, 'list'])->name('cars.list');
// Route::get('/cars/{id}', [carsmainController::class, 'show'])->name('cars.show');
Route::post('/login', [MainusersControllers::class, 'login'])->name('login');
Route::get('/dashboard', [MainusersControllers::class, 'dashboard'])->name('dashboard');



Route::get('/', function () {
    $posts = DB::table('carmain2')->get();
    return view('frontend.master', [
        'posts' => $posts
    ]);
});

Route::get('/login', function () {
    $posts = DB::table('mainusers')->get();
    return view('frontend.login', [
        'posts' => $posts
    ]);
});



Route::get('/car-list', function () {
    $posts = DB::table('carmain2')->get();
    return view('frontend.car-list', [
        'posts' => $posts
    ]);
});

Route::get('/cars/{id}', function ($id) {
    
    $posts = DB::table('carmain2')->find($id);
    
    
    if (!$posts) {
        return view('frontend.404');
    }

    return view('frontend.car-single', [
        'posts' => $posts 
    ]);
});




