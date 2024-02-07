<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/characters/{id}', [CharacterController::class, 'read'])
    ->name('main.character');
Route::get('/', [CharacterController::class, 'list'])
    ->name('main.home');
Route::get('/houses', [HouseController::class, 'list'])
    ->name('main.houses');
Route::get('/houses/{id}', [HouseController::class, 'read'])
->name('house');
