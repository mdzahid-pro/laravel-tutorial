<?php

use Illuminate\Support\Facades\Route;

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

Route::get("request", [\App\Http\Controllers\RequestController::class, "index"]);
Route::post("handle-request", [\App\Http\Controllers\RequestController::class, "handle"])->name("handle-request");














Route::view("name", "name", ["check" => true, "name" => "Md Zahidul Islam"])->name("name");

Route::post("test-post-one-changed", function (\Illuminate\Http\Request $request){

    // todo:: only , except

    dd($request->except("_token","name"));
    dd($request->only("fname", "lname"));


    dd($request->input('fname'), $request->input('test', 'Code Reader'), $request->input("lname"), $request->query("name"), $request->query("fname", "code reader"));





})->name("test-post");


//dd(\Illuminate\Support\Str::uuid()->toString());

//Route::get("middle", [Controller::class, "index"]);
//Route::get("about", [Controller::class, "about"]);

//Route::group(["middleware" => "ipcheck"], function (){

//    Route::get("middle-one", function (){
//        return "Returning From Middle";
//    });
//
//    Route::get("middle-two", function (){
//        return "Returning From Middle";
//    });
//});




//Route::get("test/{name?}/{age?}", function (\Illuminate\Http\Request $request, $name = null, $age){
//    return $name . " - age: " . $age . "name: " . $request->name;
//})->where(["name" => '[A-Za-z]+']);
//
//Route::get("alpha/{alpha}", function ($alpha){
//    return "Return from alpha -> " . $alpha;
//})->whereAlpha('alpha');
//
//Route::get("alphaNumeric/{alpha}", function ($alpha){
//    return "Return from alpha -> " . $alpha;
//})->whereAlphaNumeric('alpha');
//
//Route::get("uuid/{uuid}", function ($uuid){
//    return "Return from uuid -> " . $uuid;
//})->whereUuid('uuid');
//
//Route::get("whereIn/{type}", function ($type){
//    return "Return from whereIn and request type is: ". $type;
//})->whereIn("type",["user","admin", "vendor"]);

//Route::get("name", function (){
//    return view("name");
//});


//Route::get("to", function (){
//    dd(route('redirect-to'));
//
//    return "Data from route two";
//})->name("redirect-to");
//
//Route::permanentRedirect("from", "to");
//
//Route::get('/', function () {
//    return view('welcome');
//})->name("home");

// get , post, put, patch, match, delete
