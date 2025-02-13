<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MultiimageController;
use App\Http\Controllers\OurclientController;
use App\Http\Controllers\OurteamController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SliderCntroller;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserLoginController;
use App\Http\Middleware\Lang;
use App\Http\Middleware\UserCheck;
use App\Models\Multiimage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', Lang::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('/index', [AdminController::class, 'index']);
        Route::get('/setting', [SettingController::class, 'index']);
        Route::post('/setting/update', [SettingController::class, 'update']);
    });
    // ................sliderbar route......................

    Route::prefix('admin/slider')->group(function () {
        Route::get('/index', [SliderCntroller::class, 'index']);
        Route::get('/', [SliderCntroller::class, 'adddata']);
        Route::get('/create', [SliderCntroller::class, 'create']);
        Route::post('/store', [SliderCntroller::class, 'store']);
        Route::get('/edit/{id}', [SliderCntroller::class, 'edit']);
        Route::post('/update', [SliderCntroller::class, 'update']);
        Route::get('/delete/{id}', [SliderCntroller::class, 'destory']);
    });

    // ......................skills Route......................

    Route::prefix('admin/skill')->group(function () {
        Route::get('/', [SkillController::class, 'showdata']);
        Route::get('/create', [SkillController::class, 'create']);
        Route::post('/store', [SkillController::class, 'store']);
        Route::get('/edit/{id}', [SkillController::class, 'edit']);
        Route::post('/update', [SkillController::class, 'update']);
        Route::get('/delete/{id}', [SkillController::class, 'destory']);
    });


    // ...............Product Route ...........

    Route::prefix('admin/product')->group(function () {
        Route::get('/', [ProductController::class, 'showdata']);
        Route::get('/create', [ProductController::class, 'create']);
        Route::post('/store', [ProductController::class, 'store']);
        Route::get('/edit/{id}', [ProductController::class, 'edit']);
        Route::post('/update', [ProductController::class, 'update']);
        Route::get('/delete/{id}', [ProductController::class, 'destory']);
        Route::get('/pdf/{id}', [PdfController::class, 'generatePDF']);
    });


    // ..................category Route.........................

    Route::prefix('admin/category')->group(function () {
        Route::get('/', [CategoryController::class, 'showdata']);
        Route::get('/create', [CategoryController::class, 'create']);
        Route::post('/store', [CategoryController::class, 'store']);
        Route::get('/edit/{id}', [CategoryController::class, 'edit']);
        Route::post('/update', [CategoryController::class, 'update']);
        Route::get('/delete/{id}', [CategoryController::class, 'destory']);
    });
    // ===============================tag route================================
    Route::prefix('admin/tag')->group(function () {
        Route::get('/', [TagController::class, 'showdata']);
        Route::get('/create', [TagController::class, 'create']);
        Route::post('/store', [TagController::class, 'store']);
        Route::get('/edit/{id}', [TagController::class, 'edit']);
        Route::post('/update', [TagController::class, 'update']);
        Route::get('/delete/{id}', [TagController::class, 'destory']);
    });


    // ===============================team route================================


    Route::prefix('admin/team')->group(function () {
        Route::get('/', [TeamController::class, 'showdata']);
        Route::get('/create', [TeamController::class, 'create']);
        Route::post('/store', [TeamController::class, 'store']);
        Route::get('/edit/{id}', [TeamController::class, 'edit']);
        Route::post('/update', [TeamController::class, 'update']);
        Route::get('/delete/{id}', [TeamController::class, 'destory']);
    });



    // ===============================client route================================


    Route::prefix('admin/testimonial')->group(function () {
        Route::get('/', [ClientController::class, 'index']);
        Route::get('/create', [ClientController::class, 'create']);
        Route::post('/store', [ClientController::class, 'store']);
        Route::get('/edit/{id}', [ClientController::class, 'edit']);
        Route::post('/update', [ClientController::class, 'update']);
        Route::get('/delete/{id}', [ClientController::class, 'destroy']);
    });
    Route::get('/lang/{lang}', LangController::class);


    //=====================================about route============================

    Route::prefix('admin/about')->group(function () {
        Route::get('/', [AboutController::class, 'index']);
        Route::post('/update', [AboutController::class, 'update']);
    });
    //===========================our team title route===============================


    Route::prefix('admin/ourteam')->group(function () {
        Route::get('/', [OurteamController::class, 'index']);
        Route::post('/update', [OurteamController::class, 'update']);
    });



    //===========================our client title route===============================


    Route::prefix('admin/ourclient')->group(function () {
        Route::get('/', [OurclientController::class, 'index']);
        Route::post('/update', [OurclientController::class, 'update']);
    });

    //===========================our follow title route===============================


    Route::prefix('admin/follow')->group(function () {
        Route::get('/', [FollowController::class, 'index']);
        Route::post('/update', [FollowController::class, 'update']);
    });

    //===========================our Multi Image route===============================


    Route::prefix('admin/multiimage')->group(function () {
        Route::get('/', [MultiimageController::class, 'index']);
        Route::get('/create', [MultiimageController::class, 'create']);
        Route::post('/store', [MultiimageController::class, 'store']);
        Route::get('/edit/{id}', [MultiimageController::class, 'edit']);
        Route::post('/update', [MultiimageController::class, 'update']);
        Route::get('/delete/{id}', [MultiimageController::class, 'destroy']);
    });
    //==================================add to cart ==================

});
Route::middleware(UserCheck::class)->group(function () {

    Route::post('addtocart', [CartController::class, 'index'])->name('addtocart');
    Route::get('addcart', [CartController::class, 'addcart']);


});

require __DIR__ . '/auth.php';

// require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('front/index');
// });
Route::get('/', [UserController::class, 'home']);
Route::get('/category/{id}', [UserController::class, 'category']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/shop', [UserController::class, 'shop']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/shopdetails/{id}', [UserController::class, 'shopdetails']);
Route::get('/shopcart', [UserController::class, 'shopcart']);
Route::get('/checkout', [UserController::class, 'checkout']);
Route::get('/wisslist', [UserController::class, 'wisslist']);
Route::get('/class', [UserController::class, 'class']);
Route::get('/blogdetails', [UserController::class, 'blogdetails']);
Route::get('/contact', [UserController::class, 'contact']);

//===================================custom login================================

Route::get('/customregister', [CustomController::class, 'index'])->name('customregister');
Route::post('/customstore', [CustomController::class, 'store']);
Route::get('/customlogin', [CustomController::class, 'customlogin'])->name('customlogin');
Route::post('/loginstore', [CustomController::class, 'loginstore']);
Route::get('/logout', [CustomController::class, 'logout']);


//==================mail===========================


Route::get('sendmail', [MailController::class, 'index']);

