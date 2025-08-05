<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SolutionsController;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

//  blog
Route::prefix('blog')->group(function () {
    Route::controller(BlogController::class)->group(function () {
            Route::get('/blog','blog')->name('blog');
            Route::get('/blog-2','blog2')->name('blog2');
            Route::get('/blog-details','blogDetails')->name('blogDetails');
    });
});

//  home
Route::prefix('home')->group(function () {
    Route::controller(homeController::class)->group(function () {
        Route::get('/about','about')->name('about');
        Route::get('/contact','contact')->name('contact');
        Route::get('/index','index2')->name('index');
        Route::get('/index-2','index2')->name('index2');
        Route::get('/index-3','index3')->name('index3');
        Route::get('/index-4','index4')->name('index4');
        Route::get('/index-5','index5')->name('index5');
    });
});

//  job
Route::prefix('pages')->group(function () {
    Route::prefix('job')->group(function () {
        Route::controller(PagesController::class)->group(function () {
            Route::get('/job','job')->name('job');
            Route::get('/job-2','job2')->name('job2');
            Route::get('/job-3','job3')->name('job3');
            Route::get('/job-4','job4')->name('job4');
            Route::get('/job-details','jobDetails')->name('jobDetails');
        });
    });
});

//  portfoliyo
Route::prefix('pages')->group(function () {
    Route::prefix('portfoliyo')->group(function () {
        Route::controller(PagesController::class)->group(function () {
            Route::get('/portfolio','portfolio')->name('portfolio');
            Route::get('/portfolio-2','portfolio2')->name('portfolio2');
            Route::get('/portfolio-3','portfolio3')->name('portfolio3');
        });
    });
});

//  portfoliyo
Route::prefix('pages')->group(function () {
        Route::controller(PagesController::class)->group(function () {
            Route::get('/portfolio','portfolio')->name('portfolio');
            Route::get('/page-error','pageError')->name('pageError');
            Route::get('/faq','faq')->name('faq');
            Route::get('/login','login')->name('login');
            Route::get('/signup','signup')->name('signup');
            Route::get('/team','team')->name('team');
            Route::get('/testimonial','testimonial')->name('testimonial');
        });
});

//  portfoliyo
Route::prefix('solutions')->group(function () {
        Route::controller(SolutionsController::class)->group(function () {
            Route::get('/service','service')->name('service');
            Route::get('/service-details','serviceDetails')->name('serviceDetails');
            Route::get('/service-details-2','serviceDetails2')->name('serviceDetails2');
            Route::get('/service-details-3','serviceDetails3')->name('serviceDetails3');
            Route::get('/service-details-4','serviceDetails4')->name('serviceDetails4');
            Route::get('/service-details-5','serviceDetails5')->name('serviceDetails5');
            Route::get('/service-details-6','serviceDetails6')->name('serviceDetails6');
        });
});
