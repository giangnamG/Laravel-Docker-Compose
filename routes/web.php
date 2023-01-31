<?php

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


Route::get('/', function () {
    return view('blog.index-2');
});
Route::get('/welcome', function () {
    return view('blog.welcome');
});
Route::get('/index', function () {
    return view('blog.index-2');
});
Route::get('/about', function () {
    return view('blog.about');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/coming-soon', function () {
    return view('blog.coming-soon');
});
Route::get('/faq', function () {
    return view('blog.faq');
});
Route::get('/project', function () {
    return view('blog.project');
});
Route::get('/projects', function () {
    return view('blog.projects');
});
Route::get('/single-projects', function () {
    return view('blog.single-projects');
});
Route::get('/services', function () {
    return view('blog.services');
});
Route::get('/single-services', function () {
    return view('blog.single-services');
});
Route::get('/team', function () {
    return view('blog.team');
});
Route::get('/contact', function () {
    return view('blog.contact');
});
Route::get('/support-code', function () {
    return view('blog.support-code');
});
Route::get('/support-ctf', function () {
    return view('blog.support-ctf');
});


// -------------------- ADMIN ---------------------
Route::get('/admin', [App\Http\Controllers\AdminControllers\AdminController::class, 'index'])->name('admin');
// element
Route::get('/admin/button', [App\Http\Controllers\AdminControllers\AdminController::class, 'ButtonController']);
// Route::get('/button', [App\Http\Controllers\AdminControllers\ButtonController::class, 'index']);
Route::get('/element', [App\Http\Controllers\AdminControllers\ElementController::class, 'index']);
Route::get('/typography', [App\Http\Controllers\AdminControllers\TypographyController::class, 'index']);
Route::get('/widget', [App\Http\Controllers\AdminControllers\widgetController::class, 'index']);
Route::resource('/form', App\Http\Controllers\AdminControllers\FormController::class);
// Route::resource('/form',form::class);
Route::resource('/table', App\Http\Controllers\AdminControllers\TableController::class);
Route::resource('/chart', App\Http\Controllers\AdminControllers\ChartController::class);
Route::get('/signup', function () {
    return view('admin.auth-fake.signup');
});
Route::get('/signin', function () {
    return view('admin.auth-fake.signin');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
