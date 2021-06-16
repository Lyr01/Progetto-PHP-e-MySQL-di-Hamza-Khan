<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecycleController;
use App\Models\Recycle;
use App\Models\Day;

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
    return view('calendar',[
        'recycle' => Recycle::all(),
        'days' => Day::all()
    ]);
});


Route::get('/days/{recycle:day_id}/addrecycles', function () {
    return view('addrecycles');
});

Route::get('/days/{day_id}', [RecycleController::class, 'index']);
Route::get('/days/update/{id}', [RecycleController::class, 'update']);
Route::get('/days/destroy/{id}', [RecycleController::class, 'destroy']);
Route::post('/days/{recycle:day_id}/addrecycles',[RecycleController::class,'addData']);
Route::post('/update',[RecycleController::class,'updateData']);