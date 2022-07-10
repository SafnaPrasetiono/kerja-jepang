<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\bannerAdmin;
use App\Http\Controllers\admin\galeryAdmin;
use App\Http\Controllers\admin\karantinaAdmin;
use App\Http\Controllers\admin\working\lokerAdmin;
use App\Http\Controllers\admin\working\magangAdmin;
use App\Http\Controllers\admin\newsAdmin;
use App\Http\Controllers\admin\pagesAdmin;
use App\Http\Controllers\admin\profileAdmin;
use App\Http\Controllers\admin\proposalUsers;
use App\Http\Controllers\admin\qaAdmin;
use App\Http\Controllers\admin\usersAdmin;
use App\Http\Controllers\admin\working\proposalAdmin;
use App\Http\Controllers\auth\authAdmin;
use App\Http\Controllers\auth\authMedia;
use App\Http\Controllers\auth\authUser;
use App\Http\Controllers\comerController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\lokerController;
use App\Http\Controllers\magangController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\sitemapController;
use App\Http\Controllers\trainingController;
use App\Http\Controllers\user\lamaranUser;
use App\Http\Controllers\user\profileUser;
use App\Http\Controllers\user\settingUser;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/beranda', [indexController::class, 'index'])->name('index.beranda');
Route::get('/prosedur', [indexController::class, 'procedure'])->name('index.procedure');
Route::get('/galeri', [indexController::class, 'galery'])->name('index.galery');
Route::get('/qa', [indexController::class, 'qa'])->name('index.qa');
Route::get('/tentang-kami', [indexController::class, 'aboutme'])->name('index.aboutme');
// lamaran public users
Route::get('/beranda/user/public/{key}', [indexController::class, 'usersprofile'])->name('index.user.public');
// news Routing
Route::get('/beranda/berita', [newsController::class, 'index'])->name('index.news');
Route::get('/beranda/berita/{slug}+{id}', [newsController::class, 'detail'])->name('index.news.detail');
// training Routing
Route::get('/pelatihan', [trainingController::class, 'index'])->name('index.training');
Route::get('/pelatihan/detail/{slug}+{id}', [trainingController::class, 'detail'])->name('index.training.detail');
// loker Routing
Route::get('/beranda/loker', [lokerController::class, 'index'])->name('index.loker');
Route::get('/beranda/loker/{slug}', [lokerController::class, 'detail'])->name('loker.detail');
// magang routing
// loker Routing
Route::get('/beranda/magang', [magangController::class, 'index'])->name('index.magang');
Route::get('/beranda/magang/{slug}', [magangController::class, 'detail'])->name('magang.detail');
// new comer
Route::get('/beranda/pemula', [comerController::class, 'index'])->name('index.comer');
Route::get('/beranda/pemula/daftar', [comerController::class, 'daftar'])->name('index.comer.register');
Route::post('/beranda/pemula/daftar/post', [comerController::class, 'register'])->name('index.comer.register.post');


// router for users
Route::get('/login', [authUser::class, 'login'])->name('login');
Route::post('/login/post', [authUser::class, 'loginPost'])->name('login.post');
Route::get('/register', [authUser::class, 'register'])->name('register');
Route::post('/register/post', [authUser::class, 'registerPost'])->name('register.post');
Route::get('/register/validasi/key={key}', [authUser::class, 'registerActived'])->name('register.validation');
Route::get('/password/reset/', [authUser::class, 'password'])->name('password.set');
Route::post('/password/reset/akun/', [authUser::class, 'passwordPost'])->name('password.post');
Route::get('/password/reset/akun/{key}', [authUser::class, 'passwordReset'])->name('password.post.reset');
Route::post('/password/reset/action/', [authUser::class, 'passwordResetAction'])->name('password.post.reset.action');
// auth user login with Google API
Route::get('/login/auth/google/', [authMedia::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/auth/google/callback', [authMedia::class, 'handleGoogleCallback']);
// Routing user middleware
Route::group(['prefix' => 'user',  'middleware' => 'auth:user'], function () {
    // profile routeing
    Route::get('/profile', [profileUser::class, 'profile'])->name('user.profile');
    Route::get('/lamaran', [lamaranUser::class, 'lamaran'])->name('user.lamaran');
    Route::get('/lamaran/detail/{id}', [lamaranUser::class, 'detail'])->name('user.lamaran.detail');
    Route::get('/setting', [settingUser::class, 'setting'])->name('user.setting');
    Route::get('/logout', [profileUser::class, 'logout'])->name('user.logout');
});



// router for admins
Route::get('/admin/login', [authAdmin::class, 'login'])->name('admin.login');
Route::post('/admin/login/store', [authAdmin::class, 'loginPost'])->name('admin.login.store');
Route::get('/admin/register', [authAdmin::class, 'register'])->name('admin.register');
Route::post('/admin/register/store', [authAdmin::class, 'registerPost'])->name('admin.register.store');
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin.index');
    // profile routeing
    Route::get('/profile', [profileAdmin::class, 'index'])->name('admin.profile');

    // loker pages
    Route::get('/loker', [lokerAdmin::class, 'index'])->name('admin.loker');
    Route::get('/loker/create', [lokerAdmin::class, 'create'])->name('admin.loker.create');
    Route::post('/loker/create/store', [lokerAdmin::class, 'store'])->name('admin.loker.store');
    Route::get('/loker/detail/{id}', [lokerAdmin::class, 'show'])->name('admin.loker.detail');
    Route::get('/loker/edit/{id}', [lokerAdmin::class, 'edit'])->name('admin.loker.edit');
    Route::put('/loker/update/{id}', [lokerAdmin::class, 'update'])->name('admin.loker.update');
    Route::get('/loker/upload/editore', [lokerAdmin::class, 'editore'])->name('admin.loker.upload.editore');
    Route::get('/loker/pelamar/{id}', [proposalAdmin::class, 'index'])->name('admin.loker.pelamar.detail');
    Route::post('/loker/pelamar/action', [proposalAdmin::class, 'post'])->name('admin.loker.pelamar.action');
    // routing untuk magang
    Route::get('/magang', [magangAdmin::class, 'index'])->name('admin.magang');
    Route::get('/magang/create', [magangAdmin::class, 'create'])->name('admin.magang.create');
    Route::post('/magang/create/store', [magangAdmin::class, 'store'])->name('admin.magang.store');
    Route::get('/magang/detail/{id}', [magangAdmin::class, 'show'])->name('admin.magang.detail');
    Route::get('/magang/edit/{id}', [magangAdmin::class, 'edit'])->name('admin.magang.edit');
    Route::put('/magang/update/{id}', [magangAdmin::class, 'update'])->name('admin.magang.update');
    Route::get('/magang/upload/editore', [magangAdmin::class, 'editore'])->name('admin.magang.upload.editore');
    Route::get('/magang/pelamar/{id}', [proposalAdmin::class, 'index'])->name('admin.magang.pelamar.detail');
    Route::post('/magang/pelamar/action/{id}', [proposalAdmin::class, 'post'])->name('admin.magang.pelamar.action');

    // Routing news
    Route::get('/news', [newsAdmin::class, 'index'])->name('admin.news');
    Route::get('/news/create', [newsAdmin::class, 'create'])->name('admin.news.create');
    Route::post('/news/create/store', [newsAdmin::class, 'store'])->name('admin.news.create.store');
    Route::get('/news/edit/{id}', [newsAdmin::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/update/{id}', [newsAdmin::class, 'update'])->name('admin.news.update');
    Route::get('/news/upload/editore', [newsAdmin::class, 'editor'])->name('admin.news.upload.editor');
    // karantina
    Route::get('/karantina', [karantinaAdmin::class, 'index'])->name('admin.karantina');
    Route::get('/karantina/detail/{id}', [karantinaAdmin::class, 'detail'])->name('admin.karantina.detail');
    Route::get('/karantina/detail/pdf/{id}', [karantinaAdmin::class, 'createPDF'])->name('admin.karantina.pdf');
    // lamaran user
    Route::get('/loker/pelamar', [proposalUsers::class, 'index'])->name('admin.loker.pelamar');
    // Route::get('/loker/pelamar/{id}', [proposalUsers::class, 'detail'])->name('admin.loker.pelamar.detail');

    // Routing pages galery
    Route::get('/galery', [galeryAdmin::class, 'index'])->name('admin.gallery');
    // banners routing admin
    Route::get('/banners', [bannerAdmin::class, 'index'])->name('admin.banners');
    Route::get('/banners/create', [bannerAdmin::class, 'create'])->name('admin.banners.create');

    // pages question and answer
    Route::get('/qa', [qaAdmin::class, 'index'])->name('admin.qa');
    Route::get('/qa/create', [qaAdmin::class, 'create'])->name('admin.qa.create');
    Route::post('/qa/store', [qaAdmin::class, 'store'])->name('admin.qa.store');
    Route::get('/qa/edit/{id}', [qaAdmin::class, 'edit'])->name('admin.qa.edit');
    Route::put('/qa/update/{id}', [qaAdmin::class, 'update'])->name('admin.qa.update');

    Route::get('/user/data', [usersAdmin::class, 'index'])->name('admin.users.data');

    Route::get('/logout', [authAdmin::class, 'logout'])->name('admin.logout');


    // // training routing pages
    // Route::get('/training', [trainingAdmin::class, 'index'])->name('admin.training');
    // Route::get('/training/create', [trainingAdmin::class, 'create'])->name('admin.training.create');
    // Route::post('/training/store', [trainingAdmin::class, 'store'])->name('admin.training.store');
    // Route::get('/training/edit/{id}', [trainingAdmin::class, 'edit'])->name('admin.training.edit');
    // Route::put('/training/update/{id}', [trainingAdmin::class, 'update'])->name('admin.training.update');
    // Route::get('/training/upload/editore', [trainingAdmin::class, 'editor'])->name('admin.training.upload.editor');
});


Route::get('/sitemap.xml', [sitemapController::class, 'index'])->name('sitemap');
