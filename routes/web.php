<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;

use App\http\Livewire\Utilisateurs;

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


//generer l'ensemble de routes permettent d'acceder au page de connexion , recupere mot de passe etc..

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//le groupe des routes relatives aux administrateurs
Route::group([
    "middleware"=>["auth","auth.admin"],
    "as"=>"admin."
],function(){
    Route::group(["prefix"=>"habilitations",
                  "as"=>"habilitations."

    ],function(){
        Route::get("/utilisateurs",Utilisateurs::class)->name("users.index");
        //admin.habilitations.users.index
        //Route::get("/urolesetpermissions",[UserController::class,"index"])->name("users.index");

    });

});
