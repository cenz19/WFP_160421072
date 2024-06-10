<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\HotelController;
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

Route::get('/', function () {
    return view('dashboard', ['name'=> 'vincent']);
});

// Route::view('/kategori', 'kategori.index');

Route::get('/kategori/{index}', function($index){
    return view('kategori.standarddouble', ['index' => [0,1,2,3]]);
})->name('getDetail');

//Route::resource('kategori', TypeController::class);

Route::resource('product', ProductController::class);
Route::resource('hotel', HotelController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('type', TypeController::class);
Route::resource('customer', CustomerController::class);

Route::get('report/availablehotelrooms', [HotelController::class, 'availablehotelroom']);
Route::get('report/hotel/avgPriceByHotelType', [HotelController::class, 'averagePriceByHotelType']);
Route::view('/dashboard','dashboard')->name('dashboard');

Route::view('/ajaxExample', 'hotel.ajax');
Route::post("/hotel/showInfo",[HotelController::class, 'showInfo'])->name("hotels.showInfo");
Route::post('/hotel/showProducts',[HotelController::class,'showProducts'])->name('hotel.showProducts');

Route::post('transaction/showDataAjax/', [TransactionController::class, 'showAjax'])->name('transaction.showAjax');


// Route::resource('hotel.view', HotelController::class);



// Route::get('kategori/{tipe}', function($tipe){
//     return view('kategori.index', ['tipe' => $tipe]);
// });
// Route::get('/160421072', function () {
//     return "Hello, ini adalah situs saya";
// });

// Route::view('/r_view', 'welcome');

// Route::get('/user/{name?}', function($name ='John'){
//     return $name;
// });

// Route::get('/user/{id}', function($id){
//     return 'User '.$id;
// })->name('routingUserId');


//latihan Routing

// //01 - 03
// Route::get('/kategori/{nama?}', function($nama = 'single'){
//     return 'Masuk dalam page kategori <br> Daftar Kamar Hotel Kategori '.$nama;
// });

// //04 - 05
// Route::get('/hotel/{nama}', function($nama){
//     return 'Masuk dalam page hotel <br> Deskripsi '.$nama;
// });

// //06-07
// Route::get('/promo/{nama}', function($nama){
//     return 'Masuk dalam page promo <br> Deskripsi '.$nama;
// });


// //

// Route::get('/greeting', function(){
//     return view('welcome', ['name' => 'Vincent']);
// });

