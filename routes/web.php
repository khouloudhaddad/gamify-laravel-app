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
    //$addLevel = Level::add(['level' => 1, 'next_level_experience' => null], ['level' => 2, 'next_level_experience' => 100], ['level' => 3, 'next_level_experience' => 250]);
    //return view('welcome');
    $user = User::find(1);
    $setExp = $user->setPoints(90);
    $getPoints = $user->getPoints();
    $getLevel = $user->getLevel();
    $getNextLevel = $user->nextLevelAt();
    dump($getPoints);
    dump($getLevel);
    dump($getNextLevel);

    $giveExp = $user->addPoints(10);
    $getPoints = $user->getPoints();
    $getLevel = $user->getLevel();
    $getNextLevel = $user->nextLevelAt();

    dump($getPoints);
    dump($getLevel);
    dump($getNextLevel);
});
