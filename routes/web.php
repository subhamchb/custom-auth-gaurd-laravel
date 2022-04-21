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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:web'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/member/dashboard', function () {
    return view('member.dashboard');
})->middleware(['auth:member'])->name('member.dashboard');

require __DIR__.'/member.php';

Route::get('/date', function() {
    // public static function overrideHeldReleaseDate(): Carbon
    // {
    //     // Carbon::setTestNow(Carbon::createFromDate(2022, 04, 30));
        
    //     // today 16 - 31 // same month 15
    //     $today = now()->day;
    //     if((16 <= $today) && ($today <= 31)){
    //         return now()->day(15);
    //     }
        
    //     // today 1-15 // last month 31
    //     if((1 <= $today) && ($today <= 15)){
    //         return new Carbon('last day of last month');
    //     }
    // }
});