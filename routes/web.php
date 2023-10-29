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
    // $setExp = $user->setPoints(90);
    // $getPoints = $user->getPoints();
    // $getLevel = $user->getLevel();
    // $getNextLevel = $user->nextLevelAt();
    // dump($getPoints);
    // dump($getLevel);
    // dump($getNextLevel);

    // $giveExp = $user->addPoints(10);
    // $getPoints = $user->getPoints();
    // $getLevel = $user->getLevel();
    // $getNextLevel = $user->nextLevelAt();

    // dump($getPoints);
    // dump($getLevel);
    // dump($getNextLevel);
    // $createAchievement = Achievement::create([
    //     'name' => 'CAP Niveau 20',
    //     'is_secret' => false,
    //     'description' => "Quand l'utilisateur atteint le niveau 20",
    //     'image' => 'https://img.icons8.com/?size=256&id=41615&format=png 1x, https://img.icons8.com/?size=512&id=41615&format=png 2x',
    // ]);
    // dump($createAchievement);

    $achievement = Achievement::find(1);
    $grantAchievement = $user->grantAchievement(
        achievement: $achievement,
        progress: 100
    );
    dump($grantAchievement);
});
