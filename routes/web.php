<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

//Route::redirect('hi','hell0',307); // Route này sẽ tự động chuyển hướng từ route url hello sang url hi
//Route::permanentRedirect('hi','hello'); // Tự động chuyển route sang trạng thái 301(vĩnh viễn)
//Route::view('welcome','welcome',['name' => 'Lợi']);
//Route::get('user/{name?}',function ($name = null){
//    dd($name); // Tham số ? nếu k có giá trị truyền vào mặc định sẽ là null
//});
//Route::get('hi',function (){
//   return to_route('hello');
//});
//Route::controller(TestController::class)->group(function () {
//    Route::get('hi', 'hi');
//    Route::get('hello','hello');
//});
//Route::get('user/{user:name}', function (User $user) {
//    dd($user); //Tự động truy vấn vào cơ sở dữ liệu với trường name
//});
Route::get('user/{id}', function (User $id) {
    dd($id); //Tự động truy vấn vào cơ sở dữ liệu với trường name
})->missing(function () {
    return to_route('home'); // Bắt trường hợp không tìm thấy dữ liệu
});
Route::get('abc',function (){
//    dd(Route::current()->uri()); //lấy đường dẫn URI hiện tại
//    dd(Route::currentRouteName()); //Lấy tên của route
    dd(Route::currentRouteAction());
})->name('abcd');
Route::fallback(function (){
    dd('không tìm thấy trang'); // xử lý khi k tìm thấy trang hợp lệ
});

