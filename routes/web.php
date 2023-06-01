<?php

use Illuminate\Support\Facades\Route;


//Admin Panel aşağıda başlayır

Route::group(['prefix'=> '/admin', 'as'=>'admin.'],function (){
    Route::group(['middleware'=>'isLogin'],function (){
        Route::get('/',[\App\Http\Controllers\Adminka\AuthController::class,'index'])->name('login');
        Route::post('/',[\App\Http\Controllers\Adminka\AuthController::class,'login'])->name('login.submit');
    });


    Route::group(['middleware'=>'notLogin'],function (){
        Route::view('/dashboard','dashboard.index')->name('index');
        Route::get('/logout', [\App\Http\Controllers\Adminka\AuthController::class,'logout'])->name('logout');
        Route::get('/settings',[\App\Http\Controllers\Adminka\SettingsController::class,'index'])->name('settings');
        Route::post('/settings/update',[\App\Http\Controllers\Adminka\SettingsController::class,'update'])->name('settings.update');
        Route::get('/about',[\App\Http\Controllers\Adminka\AboutController::class,'index'])->name('about');
        Route::post('/about/update',[\App\Http\Controllers\Adminka\AboutController::class,'update'])->name('about.update');
        Route::resource('slider',\App\Http\Controllers\Adminka\SliderController::class);
        Route::resource('/service',\App\Http\Controllers\Adminka\ServiceController::class);
        Route::resource('/blog',\App\Http\Controllers\Adminka\BlogController::class);

    });

});

Route::prefix('{lang?}')->middleware('lang')->group(function () {
    Route::get('', [\App\Http\Controllers\Frontkam\HomeController::class, 'index'])->name('index');
    Route::get('/about',[\App\Http\Controllers\Frontkam\AboutController::class,'about'])->name('about');
    Route::get('/contact',[\App\Http\Controllers\Frontkam\ContactController::class,'contact'])->name('contact');
    Route::get('/xidmetler',[\App\Http\Controllers\Frontkam\ServiceController::class,'service'])->name('service');
    Route::get('/xidmetler/{slug}',[\App\Http\Controllers\Frontkam\ServiceController::class,'detail'])->name('service-detail');
    Route::get('/blog',[\App\Http\Controllers\Frontkam\BlogController::class,'blog'])->name('blog');
    Route::get('/blog/{slug}',[\App\Http\Controllers\Frontkam\BlogController::class,'detail'])->name('blog-detail');
});
