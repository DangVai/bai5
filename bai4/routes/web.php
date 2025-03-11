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

use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('home');
});
//tên đương dẫn,     tên controller,        tên function
Route::get('index', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('/data', [DataController::class, 'getIndex'])->name('data');

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

Route::get('/database', function () {
    if (!Schema::hasTable('usersss')) {
        Schema::create('usersss', function (Blueprint $table) {
            $table->id(); // Tạo khóa chính
            $table->string('name');
            $table->integer('priceproduct'); // Đã sửa từ 'interger' thành 'integer'
            $table->string('imgproduct');
            $table->rememberToken();
            $table->timestamps();
        });

        return 'Table usersss created successfully!';
    } else {
        return 'Table usersss already exists.';
    }
});

Route::get('/databasess', function () {
    if (!Schema::hasTable('user')) {
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Tạo khóa chính
            $table->string('name');
            $table->integer('priceproduct'); // Đã sửa từ 'interger' thành 'integer'
            $table->string('imgproduct');
            $table->rememberToken();
            $table->timestamps();
        });

        return 'Table usersss created successfully!';
    } else {
        return 'Table usersss already exists.';
    }
});