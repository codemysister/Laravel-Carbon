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

Route::get('/getter-1', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 12, 30, 15);

    echo $carbon1;
    echo "<hr>"; // 2023-01-01 12:30:15
    echo $carbon1->toTimeString();
    echo "<hr>"; // 12:30:15
    echo $carbon1->toDateString();
    echo "<hr>"; // 2023-01-01
    echo $carbon1->format('d M Y');
    echo "<hr>"; // 01 Jan 2023
});

Route::get('/getter-2', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 12, 30, 15);

    echo $carbon1;
    echo "<hr>";
    echo $carbon1->isoFormat('D/M/YY HH:mm');
    echo "<hr>";
    echo $carbon1->isoFormat('dddd');
    echo "<hr>";
    echo $carbon1->isoFormat('dddd, D MMMM YYYY HH:mm');
    echo "<hr>";
    echo $carbon1->isoFormat('LLLL');
    echo "<hr>";
});

Route::get('/getter-3', function () {
    $carbon1 = Carbon::create(2023, 4, 25, 12, 30, 15);

    echo $carbon1->second;
    echo "<hr>"; // 15
    echo $carbon1->minute;
    echo "<hr>"; // 30
    echo $carbon1->hour;
    echo "<hr>"; // 12
    echo $carbon1->day;
    echo "<hr>"; // 25
    echo $carbon1->month;
    echo "<hr>"; // 4
    echo $carbon1->year;
    echo "<hr>"; // 2023
    echo $carbon1->quarter;
    echo "<hr>"; // 2
    echo $carbon1->dayName;
    echo "<hr>"; // Tuesday
    echo $carbon1->monthName;
    echo "<hr>"; // April

    $carbon2 = Carbon::create(1993, 4, 25, 12, 30, 15);
    echo $carbon2->age;
    echo "<hr>"; // 28
    echo $carbon2->timespan();
    echo "<hr>"; // 28 years, 9 months, 2 weeks, 6 days, 22 hours, 40 minutes, 32 seconds
});

Route::get('/getter-4', function () {
    $carbon1 = Carbon::now();
    $carbon2 = Carbon::create('-1 hour');
    $carbon3 = Carbon::create('+4 hour');
    $carbon4 = Carbon::create('-2 week');
    $carbon5 = Carbon::create(2022, 6, 1);
    $carbon6 = Carbon::create(2023, 1, 1, 12, 30, 15);
    $carbon7 = Carbon::create(1945, 8, 17);

    echo $carbon1; // 2022-02-15 11:12:37
    echo "<hr>";
    echo $carbon2->diffForHumans(); // 1 hour ago
    echo "<hr>";
    echo $carbon3->diffForHumans(); // 3 hours from now
    echo "<hr>";
    echo $carbon4->diffForHumans(); // 2 weeks ago
    echo "<hr>";
    echo $carbon5->diffForHumans(); // 3 months from now
    echo "<hr>";
    echo $carbon6->diffForHumans(); // 10 months from now
    echo "<hr>";
    echo $carbon7->diffForHumans(); // 76 years ago
    echo "<hr>";
});

Route::get('/setter-1', function () {
    $carbon1 = Carbon::now();
    echo $carbon1;
    echo "<hr>"; // 2022-02-15 11:13:46

    $carbon1->second = 15;
    $carbon1->minute = 30;
    $carbon1->hour = 12;
    $carbon1->day = 25;
    $carbon1->month = 4;
    $carbon1->year = 2023;

    echo $carbon1; // 2023-04-25 12:30:15
});

Route::get('/setter-2', function () {
    $carbon1 = Carbon::now();
    echo $carbon1;
    echo "<hr>"; // 2022-02-15 11:14:43

    $carbon1->setDay(25);
    $carbon1->setMonth(4);
    $carbon1->setYear(2023);
    echo $carbon1;
    echo "<hr>"; // 2023-04-25 11:14:43

    $carbon1->set('day', 17);
    $carbon1->set('month', 8);
    $carbon1->set('year', 1945);
    echo $carbon1;
    echo "<hr>"; // 1945-08-17 11:14:43

    $carbon1->setTime(10, 15, 50);
    $carbon1->setDate(2000, 10, 10);
    echo $carbon1;
    echo "<hr>"; // 2000-10-10 10:15:50

    $carbon1->setDateTime(2023, 4, 25, 12, 30, 15);
    echo $carbon1;
    echo "<hr>"; // 2023-04-25 12:30:15
});

Route::get('/setter-3', function () {
    $carbon1 = Carbon::now();
    echo $carbon1;
    echo "<hr>"; // 2022-02-15 11:16:00

    $carbon1->year(2023)->month(8)->day(17)->hour(10)->minute(50)->second(10);
    echo $carbon1;
    echo "<hr>"; // 2023-08-17 10:50:10
});

Route::get('/add-sub', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 12, 30, 15);
    echo $carbon1;
    echo "<hr>"; // 2023-01-01 12:30:15

    $carbon1->addDay();
    echo $carbon1;
    echo "<hr>"; // 2023-01-02 12:30:15

    $carbon1->addDay(40);
    echo $carbon1;
    echo "<hr>"; // 2023-02-11 12:30:15

    $carbon1->addMonth(6);
    echo $carbon1;
    echo "<hr>"; // 2023-08-11 12:30:15

    $carbon1->subMonth(4);
    echo $carbon1;
    echo "<hr>"; // 2023-04-11 12:30:15

    $carbon1->subYear(2);
    echo $carbon1;
    echo "<hr>"; // 2021-04-11 12:30:15

    $carbon2 = Carbon::create(2023, 1, 1, 12, 30, 15);
    echo $carbon2;
    echo "<hr>"; // 2023-01-01 12:30:15

    $carbon2->addWeekday(3);
    echo $carbon2;
    echo "<hr>"; // 2023-01-04 12:30:15

    $carbon2->addHour(3)->addMinute(15)->addSecond(13);
    echo $carbon2;
    echo "<hr>"; // 2023-01-04 15:45:28
});

Route::get('/comparison-1', function () {
    $carbon1 = Carbon::create(2023, 1, 1);
    $carbon2 = Carbon::create(2022, 1, 1);

    dump($carbon1 == $carbon2); // false
    dump($carbon1 != $carbon2); // true
    dump($carbon1 > $carbon2); // true
    dump($carbon1 < $carbon2); // false
    dump($carbon1 >= $carbon2); // true
    dump($carbon1 <= $carbon2); // false

    dump($carbon1->greaterThan($carbon2)); // true
    dump($carbon1->gt($carbon2)); // true

    dump($carbon1->lessThan($carbon2)); // false
    dump($carbon1->lt($carbon2)); // false
});

Route::get('/comparison-2', function () {
    $carbon1 = Carbon::create(2023, 1, 1);
    $carbon2 = Carbon::create(2022, 1, 1);
    $carbon3 = Carbon::create(2021, 1, 1);

    dump($carbon1->between($carbon2, $carbon3)); // false
    dump($carbon2->between($carbon1, $carbon3)); // true

    dump(Carbon::create(2023, 1, 1)->between($carbon1, $carbon2)); // true
    dump(Carbon::create(2023, 1, 1)->between($carbon1, $carbon2, false));
    // false

});

Route::get('/comparison-3', function () {
    $carbon1 = Carbon::create(2023, 1, 1);

    dump($carbon1->isWeekday()); // false
    dump($carbon1->isWeekend()); // true
    dump($carbon1->isMonday()); // false
    dump($carbon1->isTuesday()); // false
    dump($carbon1->isWednesday()); // false
    dump($carbon1->isThursday()); // false
    dump($carbon1->isFriday()); // false
    dump($carbon1->isSaturday()); // false
    dump($carbon1->isSunday()); // true

});

Route::get('/comparison-4', function () {
    $carbon1 = Carbon::create('+ 1 day');

    echo $carbon1; // 2023-04-10 11:24:45
    dump($carbon1->isTomorrow()); // true
    dump($carbon1->isNextDay()); // true
    dump($carbon1->isFuture()); // true
    dump($carbon1->isPast()); // false
    dump($carbon1->isLeapYear()); // false
    dump($carbon1->isNextYear()); // false
});

Route::get('/diff', function () {
    $carbon1 = Carbon::create(2023, 1, 1);
    $carbon2 = Carbon::create(1945, 8, 17);

    echo $carbon1->diffInYears($carbon2);
    echo "<hr>"; // 77
    echo $carbon1->diffInMonths($carbon2);
    echo "<hr>"; // 928
    echo $carbon1->diffInDays($carbon2);
    echo "<hr>"; // 28261
});

// Difference for Humans
Route::get('/diff-for-human', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 21, 30, 0);

    echo $carbon1->diffForHumans($carbon1);
    echo "<hr>";
    echo $carbon1->diffForHumans(Carbon::create(2022, 1, 10));
    echo "<hr>";

    echo $carbon1->diffForHumans(Carbon::create(2021, 2, 10));
    echo "<hr>";
    echo $carbon1->diffForHumans(Carbon::today());
    echo "<hr>";
});


Route::get('/modifier', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 10, 10, 10);
    echo $carbon1->endOfDay();
    echo "<hr>"; // 2023-01-01 23:59:59
    echo $carbon1;
    echo "<hr>"; // 2023-01-01 23:59:59

    echo Carbon::create(2023, 1, 1)->startOfDay();
    echo "<hr>";
    // 2023-01-01 00:00:00

    echo Carbon::create(2023, 1, 1)->startOfWeek();
    echo "<hr>";
    // 2022-12-26 00:00:00

    echo Carbon::create(2023, 1, 1)->endOfWeek();
    echo "<hr>";
    // 2023-01-01 23:59:59

    echo Carbon::create(2023, 1, 1)->nextWeekday();
    echo "<hr>";
    // 2023-01-02 00:00:00

    echo Carbon::create(2023, 1, 1)->endOfMonth();
    echo "<hr>";
    // 2023-01-31 23:59:59

    echo Carbon::create(2023, 1, 1)->endOfYear();
    echo "<hr>";
    // 2023-12-31 23:59:59

    echo Carbon::create(2023, 1, 1)->endOfDecade();
    echo "<hr>";
    // 2029-12-31 23:59:59
});


Route::get('/copy-1', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 10, 10, 10);
    $carbon2 = $carbon1->endOfYear();
    echo $carbon1 . "<hr>"; // 2023-12-31 23:59:59
    echo $carbon2 . "<hr>"; // 2023-12-31 23:59:59
});

Route::get('/copy-2', function () {
    $carbon1 = Carbon::create(2023, 1, 1, 10, 10, 10);
    $carbon2 = $carbon1->copy()->endOfYear();
    echo $carbon1 . "<hr>"; // 2023-01-01 10:10:10
    echo $carbon2 . "<hr>"; // 2023-12-31 23:59:59
});

Route::get('/copy-3', function () {
    $carbon1 = \Carbon\CarbonImmutable::create(2023, 1, 1, 10, 10, 10);
    $carbon2 = $carbon1->endOfYear();
    echo $carbon1 . "<hr>"; // 2023-01-01 10:10:10
    echo $carbon2 . "<hr>"; // 2023-12-31 23:59:59
});

Route::get('/timezone-1', function () {
    $carbon1 = Carbon::create('now');
    echo $carbon1;
    echo "<hr>"; // 2022-02-15 14:44:09

    $carbon2 = Carbon::create('now', 'UTC');
    echo $carbon2;
    echo "<hr>"; // 2022-02-15 14:44:09

    $carbon3 = Carbon::create('now', 'Europe/London');
    echo $carbon3;
    echo "<hr>"; // 2022-02-15 14:44:09

    $carbon4 = Carbon::create('now', 'Asia/Jakarta');
    echo $carbon4;
    echo "<hr>"; // 2022-02-15 21:44:09

    $carbon5 = Carbon::create('now', 'Asia/Makassar');
    echo $carbon5;
    echo "<hr>"; // 2022-02-15 22:44:09

    $carbon6 = Carbon::create('now', 'Asia/Jayapura');
    echo $carbon6;
    echo "<hr>"; // 2022-02-15 23:44:09
});

Route::get('/timezone-2', function () {
    $carbon1 = Carbon::now('Asia/Jakarta');
    echo $carbon1;
    echo "<hr>"; // 2022-02-15 21:45:17

    $carbon2 = Carbon::yesterday('Asia/Jakarta');
    echo $carbon2;
    echo "<hr>"; // 2022-02-14 00:00:00

    $carbon3 = Carbon::tomorrow('Asia/Jakarta');
    echo $carbon3;
    echo "<hr>"; // 2022-02-16 00:00:00

    $carbon4 = Carbon::createFromDate(2021, 1, 1, 'Asia/Jakarta');
    echo $carbon4;
    echo "<hr>"; // 2021-01-01 21:45:17
});


Route::get('/locale-1', function () {
    Carbon::setLocale('id');
    $carbon1 = Carbon::create(2023, 1, 1, 12, 30, 15);

    echo $carbon1;
    echo "<hr>";
    echo $carbon1->isoFormat('M/D/YY HH:mm');
    echo "<hr>";
    echo $carbon1->isoFormat('dddd');
    echo "<hr>";
    echo $carbon1->isoFormat('dddd, D MMMM YYYY HH:mm');
    echo "<hr>";
    echo $carbon1->isoFormat('LLLL');
    echo "<hr>";
});

Route::get('/locale-2', function () {
    Carbon::setLocale('id');

    $carbon1 = Carbon::now();
    echo $carbon1->isoFormat('dddd, D MMMM YYYY HH:mm');

    echo "<hr>";

    $carbon2 = Carbon::now('Asia/Jakarta');
    echo $carbon2->isoFormat('dddd, D MMMM YYYY HH:mm');
});

Route::get('/locale-3', function () {

    $carbon1 = Carbon::create(2023, 1, 1, 12, 30, 15)->locale('id');

    echo $carbon1;
    echo "<hr>"; // 2023-01-01 12:30:15
    echo $carbon1->diffForHumans();
    echo "<hr>"; // 10 bulan dari sekarang
    echo $carbon1->dayName;
    echo "<hr>"; // Minggu
    echo $carbon1->monthName;
    echo "<hr>"; // Januari

    $carbon2 = Carbon::tomorrow('Asia/Jakarta')->locale('id');

    echo $carbon2;
    echo "<hr>"; // 2022-02-16 00:00:00
    echo $carbon2->diffForHumans();
    echo "<hr>"; // 2 jam dari sekarang
    echo $carbon2->format('l, d F Y');
    echo "<hr>";
    // Wednesday, 16 February 2022
});


Route::get('/tampil-mahasiswa', function () {
    $mahasiswa = App\Models\Mahasiswa::find(1);
    echo "$mahasiswa->id | $mahasiswa->nim | $mahasiswa->nama | " .
        "$mahasiswa->tanggal_lahir | $mahasiswa->ipk |" .
        "$mahasiswa->created_at | $mahasiswa->update_at";
});

Route::get('/cek-created-at', function () {
    $mahasiswa = App\Models\Mahasiswa::find(1);
    dump($mahasiswa->created_at);
    echo $mahasiswa->created_at->isoFormat('dddd, D MMMM YYYY HH:mm');
});

Route::get('/cek-tanggal-lahir', function () {
    $mahasiswa = App\Models\Mahasiswa::find(1);
    dump($mahasiswa->tanggal_lahir);
    dump(Carbon::create($mahasiswa->tanggal_lahir));
    echo Carbon::create($mahasiswa->tanggal_lahir)->age;
});

Route::get('/cek-tanggal-lahir-carbon', function () {
    $mahasiswa = App\Models\Mahasiswa::find(1);
    dump($mahasiswa->tanggal_lahir);
    echo "$mahasiswa->nama berusia {$mahasiswa->tanggal_lahir->age} tahun";
});
