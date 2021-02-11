<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home2', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/hotel/{id}/{slug}', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/test/{id}/{name}', [\App\Http\Controllers\HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
Route::get('/hoteldetail/{id}', [HomeController::class, 'hoteldetail'])->name('hoteldetail');
Route::post('/gethotel', [HomeController::class, 'gethotel'])->name('gethotel');
Route::get('/hotellist/{search}', [HomeController::class, 'hotellist'])->name('hotellist');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


        #Hotel
        Route::prefix('hotel')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\HotelController::class, 'index'])->name('admin_hotels');
            Route::get('/create', [\App\Http\Controllers\Admin\HotelController::class, 'create'])->name('admin_hotel_add');
            Route::post('/store', [\App\Http\Controllers\Admin\HotelController::class, 'store'])->name('admin_hotel_store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'edit'])->name('admin_hotel_edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'update'])->name('admin_hotel_update');
            Route::get('/delete/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'destroy'])->name('admin_hotel_delete');
            Route::get('/show', [\App\Http\Controllers\Admin\HotelController::class, 'show'])->name('admin_hotel_show');


        });
        Route::prefix('messages')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('/delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('/show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');


        });
        Route::prefix('image')->group(function () {

            Route::get('/create/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('/store/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('/delete/{id}/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

        });
        Route::prefix('room')->group(function () {

            Route::get('/create/{hotel_id}', [RoomController::class, 'create'])->name('admin_room_add');
            Route::post('/store/{hotel_id}', [RoomController::class, 'store'])->name('admin_room_store');
            Route::get('/delete/{id}/{hotel_id}', [RoomController::class, 'destroy'])->name('admin_room_delete');
            Route::get('/show', [RoomController::class, 'show'])->name('admin_room_show');

        });
        Route::prefix('review')->group(function () {

            Route::get('/', [ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('/show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');

        });

        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('/store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('/delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('/show', [FaqController::class, 'show'])->name('admin_faq_show');
        });
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');


});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');


    Route::prefix('hotel')->group(function () {
        Route::get('/', [HotelController::class, 'index'])->name('user_hotels');
        Route::get('/create', [HotelController::class, 'create'])->name('user_hotel_add');
        Route::post('/store', [HotelController::class, 'store'])->name('user_hotel_store');
        Route::get('/edit/{id}', [HotelController::class, 'edit'])->name('user_hotel_edit');
        Route::post('/update/{id}', [HotelController::class, 'update'])->name('user_hotel_update');
        Route::get('/delete/{id}', [HotelController::class, 'destroy'])->name('user_hotel_delete');
        Route::get('/show', [HotelController::class, 'show'])->name('user_hotel_show');

    });

    Route::prefix('image')->group(function () {

        Route::get('/create/{hotel_id}', [ImageController::class, 'create'])->name('user_image_add');
        Route::post('/store/{hotel_id}', [ImageController::class, 'store'])->name('user_image_store');
        Route::get('/delete/{id}/{hotel_id}', [ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('/show', [ImageController::class, 'show'])->name('user_image_show');

    });

    Route::prefix('room')->group(function () {
        Route::get('/', [RoomController::class, 'index'])->name('user_rooms');
        Route::get('/create', [RoomController::class, 'create'])->name('user_room_add');
        Route::post('/store', [RoomController::class, 'store'])->name('user_room_store');
        Route::get('/edit/{id}', [RoomController::class, 'edit'])->name('user_room_edit');
        Route::post('/update/{id}', [RoomController::class, 'update'])->name('user_room_update');
        Route::get('/delete/{id}', [RoomController::class, 'destroy'])->name('user_room_delete');
        Route::get('/show', [RoomController::class, 'show'])->name('user_room_show');

    });
    Route::prefix('reservation')->group(function () {
        Route::get('/', [ReservationController::class, 'index'])->name('user_reservations');
        Route::post('/create/{id}/{hotel_id}', [ReservationController::class, 'create'])->name('user_reservation_add');
        Route::post('/store', [ReservationController::class, 'store'])->name('user_reservation_store');
        Route::get('/edit/{id}', [ReservationController::class, 'edit'])->name('user_reservation_edit');
        Route::post('/update/{id}', [ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('/delete/{id}', [ReservationController::class, 'destroy'])->name('user_reservation_delete');
        Route::get('/show', [ReservationController::class, 'show'])->name('user_reservation_show');

    });
    Route::prefix('user')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
        Route::post('/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
        Route::post('/store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
        Route::get('/show{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
        Route::get('/userrole{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
        Route::post('/userrolestore{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
        Route::get('/userroledelete{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');



    });


});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
