<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitytController;
use App\Http\Controllers\CatogresController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubCitysController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\AgeCheck;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



    Route::delete('/{id}',[LocationController::class,'destroy'])->name('Location.destroy');

Route::resource('Location', LocationController::class);





Route::get('/', function () {
    return view('index');
});



// 
// */

Route::fallback(function(){

       return view('auth.login');
    
    });

Route::prefix('Location')->group(function(){

    Route::get('/',[LocationController::class,'index'])->name('Location.index');
    Route::get('/{id}',[LocationController::class ,'show'])->name('Location.show');
    Route::get('create',[LocationController::class,'create'])->name('Location.create');
    Route::post('/',[LocationController::class,'stor'])->name('Location.stor');
    Route::get('/{id}/edit',[LocationController::class,'edit'])->name('Location.edit');
    Route::put('/{id}',[LocationController::class,'update'])->name('Location.update');
    Route::delete('/delete/{id}',[LocationController::class,'destroy'])->name('Location.delete');

});



// Route::prefix('dashboard')->group(function(){

//     Route::get('/admin',[CatogresController::class,'index'])->name('admin.index');
//     Route::get('/admin/{id}',[CatogresController::class ,'show'])->name('admin.show');
//     Route::get('/admin/create',[CatogresController::class,'create'])->name('admin.create');
//     Route::post('/admin/',[CatogresController::class,'stor'])->name('admin.stor');
//     Route::get('/admin/admin/{id}/edit',[CatogresController::class,'edit'])->name('admin.edit');
//     Route::put('/admin/{id}',[CatogresController::class,'update'])->name('admin.update');
//     Route::get('/admin/delete/{id}',[CatogresController::class,'destroy'])->name('admin.delete');

// });


Route::resource('/info', FrontController::class);


// Route::prefix('dashboard')->group(function(){

//     // Route::resource('/admin', CatogresController::class);
//     Route::get('changeStatus/{id}',[CatogresController::class,'change'])->name('changeStatus');


// });
Route::get('/delete/{id}',[CatogresController::class,'destroy'])->name('admin.delete');


Route::put('stauts', function () {


    
    
});

Route::prefix('dashboard')->group(function(){

    Route::resource('/admin/city', CitytController::class);
    // Route::get('changeStatus/{id}',[CatogresController::class,'change'])->name('changeStatus');


});

// Route::get('check-age', function () {
//     echo'check check check';
// })->withoutMiddleware('age');

// Route::get('check-age', function () {
//     echo'check check check';
// })->middleware('age');

// Route::prefix('cmc')->middleware('age')->group(function(){
//     Route::get('check-age', function () {
//         echo'check check check';
//     });

//     Route::get('check-ageage', function () {
//         echo'check  check';
//     })->withoutMiddleware('age');
    
    
// });


// Route::get('check-age', function () {
//     echo'check  check';
// })->Middleware('age');
// Route::get('check-age', function () {
//     echo'check  check';
// })->Middleware(AgeCheck::class);
    
Route::get('check-age', function () {
    echo'check  check';
})->Middleware('age:name');
   
Route::resource('/test', SubCitysController::class);
//  Route::view('login','cms.login')->name('login');    
// Route::get('login',[AuthController::class,'showLogin'])->name('login');
// Route::post('login',[AuthController::class,'login']);

Route::prefix('dashboard')->middleware('auth')->group(function(){
    
     Route::resource('/admin', CatogresController::class);
    Route::get('AllCatogres',[CatogresController::class,'indexShow'])->name('AllCatogres');

    
    Route::get('editUser/{id}',[AuthController::class,'editUser'])->name('editUser');
    Route::put('updateUser/{id}',[AuthController::class,'updateUser'])->name('updateUser');
    Route::get('CreateUser',[AuthController::class,'createUser'])->name('CreateUser');
    Route::post('StoreUser',[AuthController::class,'storeUser'])->name('storeUser');
    
    Route::get('Users',[AuthController::class,'index'])->name('AllUsers');
    Route::get('controllUser/{id}',[AuthController::class,'controllEdit'])->name('controllEdit');
    Route::put('controllUser/{id}',[AuthController::class,'controllUpdate'])->name('controllUpdate');
    Route::delete('/delete/{id}',[AuthController::class,'destroy'])->name('usersDelete');

    Route::get('changeStatus/{id}',[CatogresController::class,'change'])->name('changeStatus');

    // ->middleware('auth:admins')
});




// Route::prefix('dashboard')->middleware('auth')->group(function(){
//     Route::resource('/admin', AdminController::class);

    // ->middleware('auth:admins')
// });
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
