<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
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

/* people routes */
Route::prefix('people')->group(function () {
   /*  display first 10 people */
    Route::get('/', [PeopleController::class, 'ShowPeople'])->name('people.show');
     /*  display  people details */
    Route::get('/details/{id}', [PeopleController::class, 'ShowPeopleDetail'])->name('people.showDetails');
});

