<?php

use Illuminate\Support\Facades\Route;

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
    $array=[
        "text"=>"Ciao sono Peppe",
        "color"=>"rosso"
    ];
    return view("home",[
        "data"=>$array
    ]);
});

Route::get("/about-us", function () {
    return "<h1>Pagina chi siamo</h1>";
})->name("about_us");