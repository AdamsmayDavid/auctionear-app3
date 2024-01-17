<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});
 




Auth::routes();

Route::get('test', [TestController::class, 'test']);
Route::get('private', [TestController::class, 'private']);


Route::view('bbb', 'checkingWebsocket');

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
    // for seller vehicle page creation
    Route::get('/auctionPage', [HomeController::class, 'auctionPage']);
     
     
     Route::get('/sellerSedan', function () {
    return view('sellerSedan');
    
     });Route::get('/sellerSuv', function () {
         return view('sellerSuv');
    });
     Route::get('/sellerVan', function () {
        return view('sellerVan');
     });

     Route::get('/createAuction', function () {
        return view('createAuction');
     });

     Route::get('/sellerView', function () {
        return view('sellerView');
     });

    // for seller vehicle page creation end

    Route::get('/biddersMotorcycle', function () {
        return view('biddersMotorcycle');
     });
     Route::get('/biddersSedan', function () {
        return view('biddersSedan');
     });
     Route::get('/biddersSuv', function () {
        return view('biddersSuv');
     });
     Route::get('/biddersVan', function () {
        return view('biddersVan');
     });

   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:seller'])->group(function () {
   
    Route::get('/seller/home', [HomeController::class, 'sellerHome'])->name('seller.home');
});