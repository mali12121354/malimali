<?php
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
*/

Route::get('/', function () {
    return view('anasayfa');
});
Route::get('/',[App\Http\Controllers\Mali::class,'index']);
Route::get('/uye/{ad}/{yas?}',function ($ad,$yas=22){
    return "merhaba.".$ad.'yaşınız:'.$yas;
})->where(['ad'=>"[A-Za-z]+",'yas'=>'[0-9]+']);
