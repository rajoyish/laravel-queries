<?php

use Illuminate\Support\Facades\DB;
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
    $id = DB::table('rooms')->insertGetId([
        'room_number' => 3,
        'room_size' => 1,
        'price' => 500,
        'description' => 'new descriptions 3'
    ]);

    dump($id);
});
