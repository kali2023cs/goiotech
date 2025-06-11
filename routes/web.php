<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/premium-services', [WelcomeController::class, 'premiumServices'])->name('premium-services');
Route::get('/seo', [WelcomeController::class, 'seo'])->name('seo');
Route::get('/service3', [WelcomeController::class, 'service3'])->name('service3');
Route::get('/eCommerce', [WelcomeController::class, 'eCommerce'])->name('eCommerce');
Route::get('/mobile-app', [WelcomeController::class, 'mobilApp'])->name('mobile-app');
Route::get('/website-development', [WelcomeController::class, 'websiteDevelopment'])->name('website-development');
Route::get('/hotel-management', [WelcomeController::class, 'hotelManagement'])->name('hotel-management');
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
Route::post('/contact.submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/case-hotel-management', [WelcomeController::class, 'case-hotel-management'])->name('case-hotel-management');
Route::get('/case-mobile-app', [WelcomeController::class, 'case-mobile-app'])->name('case-mobile-app');
Route::get('/case-digital-marketing', [WelcomeController::class, 'case-digital-marketing'])->name('case-digital-marketing');
Route::get('/case-ecommerce', [WelcomeController::class, 'case-ecommerce'])->name('case-ecommerce');

