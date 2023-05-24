<?php
namespace App\Http\Controllers;


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

Route::get('/welcome', function () {
    return 'Chào mừng cấc bạn đến với PNV
    <br>Mình là Lê Trương Thành Luân 
    <br> Lớp PNV24A
    <br>Mình là một người thân thiện';
});

Route::get('/xinchao',[UserController::class , 'Xinchao' ]);

Route::get('/user',[UserController::class , 'GetIndex']);

//bài sum 
Route::get('/tinhtong',[UserController::class,'tinhtong']);


Route::post('/tinhtong',[UserController::class,'tinhtong']);

//bài areaOfShape
Route::get('/computeArea', [UserController::class, 'computeArea']);

// GET: được sử dụng để lấy thông tin từ sever theo URI đã cung cấp.
Route::post('/computeArea', [UserController::class, 'computeArea']);

// POST: gửi thông tin tới sever thông qua các biểu mẫu http (đăng kí chả hạn ...);
Route::get('/signup',[SignupController::class ,'index']);

Route::post('/signup',[SignupController::class ,'displayInfor']);


Route::get('add', [AddRoomController::class, 'index']);
Route::post('add', [AddRoomController::class, 'store'])->name('add.store');

Route::get('/luan',[PageController::class,'getIndex']);

Route::get('/luan1',[PageController::class,'getLoaiSP']);

Route::get('/luan2',[PageController::class,'getChitiet']);

Route::get('/luan4',[PageController::class,'marter']);


Route::get('/luan5',[PageController::class,'if']);

Route::get('/luan6',[PageController::class,'for']);

Route::get('/luan7',[PageController::class,'lienhe']);





















Route::get('/tinhtich/{a}/{b}', function ($a,$b) {
    echo $a*$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhtong/{a}/{b}', function ($a,$b) {
    echo $a+$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhhieu/{a}/{b}', function ($a,$b) {
    echo $a-$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhthuong/{a}/{b}', function ($a,$b) {
    echo $a/$b;exit;
    
})->whereNumber('a')->whereNumber('b');