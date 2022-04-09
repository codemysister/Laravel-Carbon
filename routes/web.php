<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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

Route::get('/instantiation-1', function () {
    $carbon1 = new \Carbon\Carbon();
    dump($carbon1);

    echo $carbon1;
});

Route::get('/instantiation-2', function () {
    $carbon1 = new Carbon();
    dump($carbon1);

    echo $carbon1;
});

Route::get('/instantiation-3', function () {
    $carbon1 = new Carbon;
    $carbon2 = new Carbon();
    $carbon3 = Carbon::now();
    $carbon4 = Carbon::parse();
    $carbon5 = Carbon::create('now');

    echo $carbon1;
    echo "<hr>";  // 2022-02-15 10:29:32
    echo $carbon2;
    echo "<hr>";  // 2022-02-15 10:29:32
    echo $carbon3;
    echo "<hr>";  // 2022-02-15 10:29:32
    echo $carbon4;
    echo "<hr>";  // 2022-02-15 10:29:32
    echo $carbon5;
    echo "<hr>";  // 2022-02-15 10:29:32
});

Route::get('/instantiation-4', function () {
    $carbon1 = new Carbon('1 January 2023');
    $carbon2 = new Carbon('12:30:15');
    $carbon3 = new Carbon('01-01-2023 12:30:15');

    $carbon4 = Carbon::parse('1 January 2023 12:30:15');
    $carbon5 = Carbon::create('1 January 2023');
    $carbon6 = Carbon::create('1 January 2023 12:30:15');

    $carbon7 = Carbon::createFromDate(2023, 1, 1);
    $carbon8 = Carbon::createFromTime(12, 30, 15);
    $carbon9 = Carbon::createFromTimestamp(1669504215);

    $carbon10 = Carbon::create(2023, 1, 1, 12, 30, 15);
    $carbon11 = Carbon::create(2023, 1, 1);

    echo $carbon1;
    echo "<hr>"; // 2023-01-01 00:00:00
    echo $carbon2;
    echo "<hr>"; // 2022-04-09 12:30:15
    echo $carbon3;
    echo "<hr>"; // 2023-01-01 12:30:15
    echo $carbon4;
    echo "<hr>"; // 2023-01-01 12:30:15
    echo $carbon5;
    echo "<hr>"; // 2023-01-01 00:00:00
    echo $carbon6;
    echo "<hr>"; // 2023-01-01 12:30:15
    echo $carbon7;
    echo "<hr>"; // 2023-01-01 06:48:33
    echo $carbon8;
    echo "<hr>"; // 2022-04-09 12:30:15
    echo $carbon9;
    echo "<hr>"; // 2022-04-09 12:10:15
    echo $carbon10;
    echo "<hr>"; // 2023-01-01 12:30:15
    echo $carbon11;
    echo "<hr>"; // 2023-01-01 00:00:00
});

Route::get('/instantiation-5', function () {
    $carbon1 = Carbon::now();
    $carbon2 = Carbon::today();
    $carbon3 = Carbon::yesterday();
    $carbon4 = Carbon::tomorrow();

    $carbon5 = Carbon::create('now');
    $carbon6 = Carbon::create('today');
    $carbon7 = Carbon::create('yesterday');
    $carbon8 = Carbon::create('tomorrow');

    echo $carbon1;
    echo "<hr>"; // 
    echo $carbon2;
    echo "<hr>"; //
    echo $carbon3;
    echo "<hr>"; //
    echo $carbon4;
    echo "<hr>"; //
    echo $carbon5;
    echo "<hr>"; //
    echo $carbon6;
    echo "<hr>"; //
    echo $carbon7;
    echo "<hr>"; //
    echo $carbon8;
    echo "<hr>"; //
});

// selisih waktu saat ini
Route::get('/instantiation-6', function () {
    $carbon1 = Carbon::now();
    $carbon2 = Carbon::create('+1 hour');
    $carbon3 = Carbon::create('+4 day');
    $carbon4 = Carbon::create('-20 day');
    $carbon5 = Carbon::create('+4 month -1 hour');
    $carbon6 = Carbon::create('+5 day 6 month 1 year');

    echo $carbon1;
    echo "<hr>"; // 2022-04-09 07:04:44
    echo $carbon2;
    echo "<hr>"; // 2022-04-09 08:04:44
    echo $carbon3;
    echo "<hr>"; // 2022-04-13 07:04:44
    echo $carbon4;
    echo "<hr>"; // 2022-03-20 07:04:44
    echo $carbon5;
    echo "<hr>"; // 2022-08-09 06:04:44
    echo $carbon6;
    echo "<hr>"; // 2023-10-14 07:04:44

});
