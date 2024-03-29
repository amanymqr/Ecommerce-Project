
<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




    Route::prefix(LaravelLocalization::setLocale())->group(function(){
        Route::prefix('admin')->name('admin.')->middleware('auth','check_user')->group(function(){
            Route::get('/', [AdminController::class ,'index'])->name('index');

            Route::get('categories/trash', [CategoryController::class , 'trash'])->name('categories.trash');

            Route::get('categories/{id}/restore', [CategoryController::class , 'restore'])->name('categories.restore');

            Route::delete('categories/{id}/forcedelete', [CategoryController::class , 'forcedelete'])->name('categories.forcedelete');
            Route::resource('categories', CategoryController::class);

            //products routs
            Route::get('products/trash', [ProductController::class , 'trash'])->name('products.trash');

            Route::get('products/{id}/restore', [ProductController::class , 'restore'])->name('products.restore');
            Route::delete('products/{id}/forcedelete', [ProductController::class , 'forcedelete'])->name('products.forcedelete');


            Route::resource('products', ProductController::class);
            //user
            Route::get('users', [UserController::class , 'index'])->name('users.index');
            Route::delete('users/{id}', [UserController::class , 'destroy'])->name('users.destroy');

            });


            #website Routs
            Auth::routes();

            // Route  ::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

            Route::view('not-allowed', 'not_allowed');

            // Website Routes
            Route::get('/',[MainController::class , 'index'])->name('website.index');
            Route::get('/shop',[MainController::class , 'shop'])->name('website.shop');
            Route::get('/category/{id}',[MainController::class , 'category'])->name('website.category');
            Route::get('/product/{id}', [MainController::class, 'product'])->name('website.product');
            Route::get('/search',[MainController::class , 'search'])->name('website.search');

    });





