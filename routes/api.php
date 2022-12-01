<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElsoKontrollerem;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hello', function () {
    return "Helló világ";
});

Route::get('helloTomb', function () {
    return [1,2,3,4,5,6,7];
});

Route::get('helloOsztaly', function () {
    $obj = new stdClass();
    $obj->foo = 42;
    return $obj;
});

Route::get('HelloKontrollerrel', [ElsoKontrollerem::class, 'EgyszeruEredmeny']);

Route::post('PostKontrollerrel', [ElsoKontrollerem::class, 'EgyszeruEredmeny']);

Route::post('PostParameteres/{id}', [ElsoKontrollerem::class, 'ParameteresFuggveny']);

Route::post('PostParameteres2/{id}', [ElsoKontrollerem::class, 'FuggvenyKeres']);

Route::post('PostParameteres3/{id}', [ElsoKontrollerem::class, 'FuggvenyKeres2']);

Route::get('GetResponseOsztallyal', [ElsoKontrollerem::class, 'FuggvenyResponse']);
