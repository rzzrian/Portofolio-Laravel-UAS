<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ContactController;

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

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Routes
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/home', [DashboardController::class, 'admin_home'])->name('admin.home');
    Route::post('admin/home/post', [DashboardController::class, 'admin_home_post'])->name('admin.home.post');
    
    Route::get('admin/about', [DashboardController::class, 'admin_about'])->name('admin.about');
    Route::post('admin/about/post', [DashboardController::class, 'admin_about_post'])->name('admin.about.post');

    Route::get('admin/services', [DashboardController::class, 'admin_services'])->name('admin.services');
    Route::post('admin/services/post', [DashboardController::class, 'admin_services_post'])->name('admin.services.post');
    
    Route::get('admin/portfolio', [DashboardController::class, 'admin_portfolio'])->name('admin.portfolio');
    Route::post('admin/portfolio/post', [DashboardController::class, 'admin_portfolio_post'])->name('admin.portfolio.post');
    
    // Resource Routes for Contacts (excluding create and store)
    Route::resource('admin/contacts', ContactController::class, ['as' => 'admin'])
        ->except(['create', 'store']);
    
    Route::resource('admin/contacts', ContactController::class, ['as' => 'admin'])->except(['create', 'store']);


    // Custom Route for contacts list
    Route::get('admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
});

// Authentication Routes
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login_admin', [AuthController::class, 'login_admin'])->name('login.admin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
