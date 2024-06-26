<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\httpSMScontroller;
use App\Http\Controllers\WebSocketController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\twilioCOntroller;
use App\Http\Controllers\Auth\VerificationController;

use Illuminate\Http\Request;

// Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
//     ->name('verification.verify');

Route::get('/', function () {
   //App\Jobs\SlowJob::dispatch();
   
    return view('welcome');
});




//start here
Route::middleware('web')->group(function () {
   Auth::routes(['verify' => true]);
});

// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');



// Route::group(['middleware' => ['throttle:6,1']], function () {
//     Route::get('/email/verify/resend', [VerificationController::class, 'resend'])->name('verification.resend');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes([
   'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
//end here 

//Vonage
// Route::get('/send_sms', [smscontroller::class, 'send_sms']);

//httpSMS
// Route::get('/sendhttp', [httpSMScontroller::class, 'sendhttp']);

//Twilio
// Route::get('/sms', function () {
//    return view('sms');
// });

// Route::post('/sms', [twilioCOntroller::class, 'sendSMS']);


Route::get('/waitingUser', function () {
   return view('waitingUser');
});


Route::get('/chatSystem', function () {
   return view('chatSystem');
});


Route::get('/chats', [HomeController::class, 'chats']);

 


//Tesing routes
Route::get('test', [TestController::class, 'test']);
Route::get('private', [TestController::class, 'private']);
Route::view('bbb', 'checkingWebsocket');

Route::post('/send_bid', [WebSocketController::class, 'send_bid']);
Route::post('/send_message', [WebSocketController::class, 'send_message']);
Route::get('/userFeedback', [HomeController::class, 'userFeedback']);


//Bidder Routes List
// Bidder Routes List
// Route::middleware(['auth', 'user-access:user', 'verified'])->group(function () {
//    Route::get('/home', [HomeController::class, 'index'])->name('home');
//    Route::get('/userFeedback', [HomeController::class, 'userFeedback']);
// });

// Route::middleware(['auth', 'user-access:user'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
//     Route::get('/userFeedback' ,[HomeController::class , 'userFeedback']);
    
// });

//Seller Routes List
Route::middleware(['auth', 'user-access:seller'])->group(function () {

    Route::get('/seller_home', [HomeController::class, 'index'])->name('seller.home');
    Route::get('/createAuction', [HomeController::class, 'createAuction']);
    Route::post('/newAuction' ,[AuctionController::class , 'newAuction'])->name('newAuction');
    Route::get('/manual_close' ,[AuctionController::class , 'manual_close']);
   });

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('/activateUsers', [HomeController::class, 'activateUsers'])->name('activateUsers');
   Route::get('/banUser' ,[HomeController::class , 'banUser']);
   Route::get('/activate' ,[HomeController::class , 'activate']);
   Route::get('/rejectUser' ,[HomeController::class , 'rejectUser']);
});


Route::get('/biddingPage', [AuctionController::class, 'biddingPage']);
Route::get('/auctionPage', [HomeController::class, 'auctionPage']);


// Route::get('/en', [HomeController::class, 'encrypt']);
// Route::get('/de', [HomeController::class, 'decrypt']);

// Route::middleware(['auth', 'user-access:seller', 'user-access:user'])->group(function () {
   
//    Route::get('/seller/home', [HomeController::class, 'index'])->name('seller.home');
//    Route::post('/newAuction' ,[AuctionController::class , 'newAuction'])->name('newAuction');
   
//    Route::get('/biddingPage', [AuctionController::class, 'biddingPage']);
//    Route::get('/auctionPage', [HomeController::class, 'auctionPage']);
//    Route::get('/createAuction', [HomeController::class, 'createAuction']);
   
// });

// Route::group(['middleware' => 'user-access:seller', 'user-access:user'], function() {
//    Route::get('/biddingPage', [AuctionController::class, 'biddingPage']);
// });


 // for seller vehicle page creation






/*
   
     
    Route::get('/sellerSedan', function () {
    return view('sellerSedan');
    
     });Route::get('/sellerSuv', function () {
         return view('sellerSuv');
    });
     Route::get('/sellerVan', function () {
        return view('sellerVan');
     });

    

     Route::get('/sellerView', function () {
        return view('sellerView');
     });
     */

/*
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
*/

   //    // for seller
   //    Route::get('/sellerBiddingPage', function () {
   //    return view('sellerBiddingPage');
   // });
   
   
      
   
   
   //     //For admin
   //    Route::get('/activateUsers', function () {
   //    return view('activateUsers');
   //  });

   

   