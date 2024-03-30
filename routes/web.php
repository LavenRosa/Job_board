<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\JobpostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JobFunctionController;
use App\Http\Controllers\JobLocationController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('Index');

Route::get('/search', [SearchController::class, 'search'])->name('Search');
// Route::get('/list', [TestingController::class, 'list'])->name('testing1.list');
// Route::get('/createPage', [TestingController:: class, 'createPage'])->name('testing1.createPage');
// Route::post('/create', [TestingController::class, 'create'])->name('testing1.create');

// //edit
// Route::get('/edit/{id}', [TestingController::class, 'edit'])->name('testing1.edit');
// //update
// Route::post('/update/{id}', [TestingController::class, 'update'])->name('testing1.update');
// //delete
// Route::get('/delete/{id}', [TestingController::class, 'delete'])->name('testing1.delete');
//home section
Route::get('/', [HomeController::class, 'home'])->name('Index');
// Route::get('/nav', [HomeController::class, 'nav'])->name('Nav');

//Route::get('jobdetails', [HomeController::class, 'jobdetail'])->name('JobDetail');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adminlogin', [LoginController::class, 'showadminlogin'])->name('ShowAdminLogin');
Route::post('/adminlogin', [LoginController::class, 'adminlogin'])->name('AdminLogin');
Route::post('/adminlogout', [LoginController::class, 'adminlogout'])->name('AdminLogout');

//Job seeker
Route::get('user/register', [SeekerController::class, 'showuserregister'])->name('ShowUserRegister');
Route::post('user/register', [SeekerController::class, 'userregister'])->name('UserRegister');
Route::get('user/login', [SeekerController::class, 'showuserlogin'])->name('ShowUserLogin');
Route::post('user/login', [SeekerController::class, 'userlogin'])->name('UserLogin');
Route::post('user/logout', [SeekerController::class, 'userlogout'])->name('UserLogout');

Route::prefix('job')->group(function(){
    Route::get('create', [JobpostController::class, 'createpage'])->name('JobCreatePage');
    Route::post('create', [JobpostController::class, 'store'])->name('JobCreate');
    Route::get('edit/{id}', [JobpostController::class, 'edit'])->name('JobEdit');
    Route::post('update/{id}', [JobpostController::class, 'update'])->name('JobUpdate');
    Route::get('delete/{id}', [JobpostController::class, 'delete'])->name('JobDelete');
    Route::get('list', [JobpostController::class, 'list'])->name('JobList');
});

Route::prefix('jobfunction')->group(function(){
    Route::get('createpage', [JobFunctionController::class, 'createpage'])->name('JFCreatePage');
    Route::post('create', [JobFunctionController::class, 'store'])->name('JFCreate');
    Route::get('edit/{id}', [JobFunctionController::class, 'edit'])->name('JFEdit');
    Route::post('update/{id}', [JobFunctionController::class, 'update'])->name('JFUpdate');
    Route::get('delete/{id}', [JobFunctionController::class, 'delete'])->name('JFDelete');
    Route::get('list', [JobFunctionController::class, 'list'])->name('JFList');
});

Route::prefix('joblocation')->group(function(){
    Route::get('createpage', [JobLocationController::class, 'createpage'])->name('JLCreatePage');
    Route::post('create', [JobLocationController::class, 'store'])->name('JLCreate');
    Route::get('edit/{id}', [JobLocationController::class, 'edit'])->name('JLEdit');
    Route::post('update/{id}', [JobLocationController::class, 'update'])->name('JLUpdate');
    Route::get('delete/{id}', [JobLocationController::class, 'delete'])->name('JLDelete');
    Route::get('list', [JobLocationController::class, 'list'])->name('JLList');
});

Route::prefix('applyjob')->group(function(){
    Route::get('applycreate', [ApplyJobController::class, 'createpage'])->name('ApplyCreatePage');
    Route::post('create', [ApplyJobController::class, 'store'])->name('ApplyCreate');
    Route::get('list', [ApplyJobController::class, 'list'])->name('ApplyJobList');

});

Route::prefix('profile')->group(function(){
    Route::get('show', [ProfileController::class, 'show'])->name('ProfileShow');
    Route::get('edit/{id}', [ProfileController::class, 'edit'])->name('ProfileEdit');
    Route::post('update/{id}', [ProfileController::class, 'update'])->name('ProfileUpdate');
});


Route::get('jobdetail/{jobId}', [ApplyJobController::class, 'jobdetailpage'])->name('JobDetail');
