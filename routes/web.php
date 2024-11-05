<?php

use App\Http\Controllers\{BlogController, CategoryController, FrontendController, HomeController, ManagementController, ProfileController};

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[FrontendController::class , 'index']);


Auth::routes();

// home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// management

Route::prefix(env('HOST_NAME'))->middleware(['rolecheck'])->group(function(){

    Route::get('/management', [ManagementController::class, 'index'])->name('management.index');
    Route::post('/management/user/register', [ManagementController::class, 'store_register'])->name('management.store');
    Route::post('/management/user/manager/down/{id}', [ManagementController::class, 'manager_down'])->name('management.down');

    // role
    Route::get('/management/role', [ManagementController::class, 'role_index'])->name('management.role.index');
    Route::post('/management/role/assign', [ManagementController::class, 'role_assign'])->name('management.role.assign');
    Route::post('/management/role/undo/blogger/{id}', [ManagementController::class, 'blogger_grade_down'])->name('management.role.blogger.down');
    Route::post('/management/role/undo/user/{id}', [ManagementController::class, 'user_grade_down'])->name('management.role.user.down');



});




// profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/username/update', [ProfileController::class, 'name_update'])->name('profile.username');
Route::post('/profile/email/update', [ProfileController::class, 'email_update'])->name('profile.email');
Route::post('/profile/password/update', [ProfileController::class, 'password_update'])->name('profile.password');
Route::post('/profile/image/update', [ProfileController::class, 'image_update'])->name('profile.image');


// category
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{slug}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{slug}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/destroy/{slug}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::post('/category/status/{id}',[CategoryController::class,'status'])->name('category.status');




// blog

// Route::get('/blog',[BlogController::class,'index'])->name('blog.index');

Route::resource('/bolg',BlogController::class);
