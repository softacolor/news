<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DistrictController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\SubDistrictController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\GalleryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


// Admin

Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

// Admin Category Route

Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::get('/add/category',[CategoryController::class,'add_category'])->name('add.category');
Route::post('/store/category',[CategoryController::class,'store_category'])->name('store.category');
Route::get('/edit/category/{id}',[CategoryController::class,'edit_category'])->name('edit.category');
Route::post('/update/category/{id}',[CategoryController::class,'update_category'])->name('update.category');
Route::get('/delete/category/{id}',[CategoryController::class,'delete_category'])->name('delete.category');


// Admin subcategory

Route::get('/subcategories',[SubcategoryController::class,'index'])->name('subcategories');
Route::get('/add/subcategory',[SubcategoryController::class,'add_subcategory'])->name('add.subcategory');
Route::post('/store/subcategory',[SubcategoryController::class,'store_subcategory'])->name('store.subcategory');
Route::get('/edit/subcategory/{id}',[SubcategoryController::class,'edit_subcategory'])->name('edit.subcategory');
Route::post('/update/subcategory/{id}',[SubcategoryController::class,'update_subcategory'])->name('update.subcategory');
Route::get('/delete/subcategory/{id}',[SubcategoryController::class,'delete_subcategory'])->name('delete.subcategory');




// Admin District Route

Route::get('/district',[DistrictController::class,'index'])->name('district');
Route::get('/add/district',[DistrictController::class,'add_district'])->name('add.district');
Route::post('/store/district',[DistrictController::class,'store_district'])->name('store.district');
Route::get('/edit/district/{id}',[DistrictController::class,'edit_district'])->name('edit.district');
Route::post('/update/district/{id}',[DistrictController::class,'update_district'])->name('update.district');
Route::get('/delete/district/{id}',[DistrictController::class,'delete_district'])->name('delete.district');


// Admin subdistrict

Route::get('/subdistrict',[SubDistrictController::class,'index'])->name('subdistrict');
Route::get('/add/subdistrict',[SubDistrictController::class,'add_subdistrict'])->name('add.subdistrict');
Route::post('/store/subdistrict',[SubDistrictController::class,'store_subdistrict'])->name('store.subdistrict');
Route::get('/edit/subdistrict/{id}',[SubDistrictController::class,'edit_subdistrict'])->name('edit.subdistrict');
Route::post('/update/subdistrict/{id}',[SubDistrictController::class,'update_subdistrict'])->name('update.subdistrict');
Route::get('/delete/subdistrict/{id}',[SubDistrictController::class,'delete_subdistrict'])->name('delete.subdistrict');

// Json Data for Category and District
Route::get('/get/subcategory/{category_id}', [PostController::class, 'GetSubCategory']);

Route::get('/get/subdistrict/{district_id}', [PostController::class, 'GetSubDistrict']);



// Admin Posts All Routes
Route::get('/allpost', [PostController::class, 'index'])->name('all.post');

Route::get('/createpost', [PostController::class, 'Create'])->name('create.post');

Route::post('/store/post', [PostController::class, 'StorePost'])->name('store.post');

Route::get('/edit/post/{id}', [PostController::class, 'EditPost'])->name('edit.post');

Route::post('/update/post/{id}', [PostController::class, 'UpdatePost'])->name('update.post');

Route::get('/delete/post/{id}', [PostController::class, 'DeletePost'])->name('delete.post');


// Social Setting

Route::get('/social/setting', [SettingController::class, 'index'])->name('social.setting');
Route::post('/social/update/{id}', [SettingController::class, 'social_update'])->name('update.social');

// SEO Setting

Route::get('/seo/setting', [SettingController::class, 'seo_setting'])->name('seo.setting');
Route::post('/seo/update/{id}', [SettingController::class, 'seo_update'])->name('update.seo');

// Prayer Setting

Route::get('/prayer/setting', [SettingController::class, 'prayer_setting'])->name('prayer.setting');
Route::post('/prayer/update/{id}', [SettingController::class, 'prayer_update'])->name('update.prayer');

// Live TV Setting

Route::get('/livetv/setting', [SettingController::class, 'livetv_setting'])->name('livetv.setting');
Route::post('/livetv/update/{id}', [SettingController::class, 'livetv_update'])->name('update.livetv');

Route::get('/livetv/active/{id}', [SettingController::class, 'livetv_active'])->name('active.livetv');
Route::get('/livetv/deactive/{id}', [SettingController::class, 'livetv_deactive'])->name('deactive.livetv');


// Notice Setting

Route::get('/notice/setting', [SettingController::class, 'notice_setting'])->name('notice.setting');
Route::post('/notice/update/{id}', [SettingController::class, 'notice_update'])->name('update.notice');

Route::get('/notice/active/{id}', [SettingController::class, 'notice_active'])->name('active.notice');
Route::get('/notice/deactive/{id}', [SettingController::class, 'notice_deactive'])->name('deactive.notice');


// Website Links Route 

Route::get('/website/setting', [SettingController::class, 'all_website'])->name('all.website');
Route::get('/add/website',[SettingController::class,'add_website'])->name('add.website');
Route::post('/store/website',[SettingController::class,'store_website'])->name('store.website');
Route::get('/edit/website/{id}',[SettingController::class,'edit_website'])->name('edit.website');
Route::post('/update/website/{id}',[SettingController::class,'update_website'])->name('update.website');
Route::get('/delete/website/{id}',[SettingController::class,'delete_website'])->name('delete.website');


// Photo Gallery Route

Route::get('/photo/gallery', [GalleryController::class, 'photo_gallery'])->name('photo.gallery');
Route::get('/add/photo', [GalleryController::class, 'add_photo'])->name('add.photo');
Route::post('/store/photo', [GalleryController::class, 'store_photo'])->name('store.photo');
Route::get('/edit/photo/{id}', [GalleryController::class, 'edit_photo'])->name('edit.photo');
Route::post('/update/photo/{id}', [GalleryController::class, 'update_photo'])->name('update.photo');
Route::get('/delete/photo/{id}', [GalleryController::class, 'delete_photo'])->name('delete.photo');


// Video Gallery Route

Route::get('/video/gallery', [GalleryController::class, 'video_gallery'])->name('video.gallery');
Route::get('/add/video', [GalleryController::class, 'add_video'])->name('add.video');
Route::post('/store/video', [GalleryController::class, 'store_video'])->name('store.video');
Route::get('/edit/video/{id}', [GalleryController::class, 'edit_video'])->name('edit.video');
Route::post('/update/video/{id}', [GalleryController::class,'update_video'])->name('update.video');
Route::get('/delete/video/{id}', [GalleryController::class, 'delete_video'])->name('delete.video');


