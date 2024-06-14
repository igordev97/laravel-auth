<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home.page');

Route::view('/admin/add-product','add-product',['title'=>'Add new product'])->middleware('auth')->name('product.add');


Route::post('/admin/add-product/create',[\App\Http\Controllers\ProductController::class,'createNewProduct'])->name('product.create');


Route::get('/product/{product}',[ProductController::class,'singleProduct'])->name('product.single');

Route::get('/admin/edit-products',[ProductController::class,'editProducts']);

Route::get('/admin/edit-product/edit/{product}',[ProductController::class,'editProduct'])->name('product.edit');

Route::get('/admin/edit-product/delete/{product}',[ProductController::class,'deleteProduct'])->name('product.delete');

//Route::post('/admin/edit-product/edit/save/{product}',[ProductController::class,'saveEdit'])->name('product.edit.save');
Route::post('/admin/edit-product/edit/{product}',[ProductController::class,'saveProductEdit'])->name('product.save');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
