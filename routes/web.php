<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/service1', [WelcomeController::class, 'service1'])->name('service1');
Route::get('/service2', [WelcomeController::class, 'service2'])->name('service2');
Route::get('/service3', [WelcomeController::class, 'service3'])->name('service3');
Route::get('/service4', [WelcomeController::class, 'service4'])->name('service4');
Route::get('/service5', [WelcomeController::class, 'service5'])->name('service5');
Route::get('/case-single', [WelcomeController::class, 'casesingle'])->name('case-single');
Route::get('/blog-single', [WelcomeController::class, 'blogsingle'])->name('blog-single');
Route::get('/blog-left', [WelcomeController::class, 'blogleft'])->name('blog-left');
Route::get('/blog', [WelcomeController::class, 'blog'])->name('blog');
Route::get('/blog-right', [WelcomeController::class, 'blogright'])->name('blog-right');
Route::get('/case', [WelcomeController::class, 'case'])->name('case');
Route::get('/team', [WelcomeController::class, 'team'])->name('team');
Route::get('/testimonials', [WelcomeController::class, 'testimonials'])->name('testimonials');
Route::get('/pricing', [WelcomeController::class, 'pricing'])->name('pricing');
Route::get('/404', [WelcomeController::class, 'fournotfout'])->name('404');
Route::get('/faq', [WelcomeController::class, 'faq'])->name('faq');

