<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use LevelUp\Experience\Models\Level;
use LevelUp\Experience\Models\Achievement;
use LevelUp\Experience\Facades\LeaderBoard;

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
    $addLevel = Level::add(['level' => 1, 'next_level_experience' => null], ['level' => 2, 'next_level_experience' => 100], ['level' => 3, 'next_level_experience' => 250]);
    //return view('welcome');
});
