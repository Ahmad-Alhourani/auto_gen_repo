<?php
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('gem', 'API\GemAPIController');



Route::resource('level', 'API\LevelAPIController');



Route::resource('player', 'API\PlayerAPIController');



Route::resource('gem_sighting', 'API\GemSightingAPIController');



Route::resource('level_gem', 'API\LevelGemAPIController');



Route::resource('box', 'API\BoxAPIController');



Route::resource('box_gem', 'API\BoxGemAPIController');



Route::resource('box_sighting', 'API\BoxSightingAPIController');



Route::resource('item', 'API\ItemAPIController');



Route::resource('box_item', 'API\BoxItemAPIController');


//*****Do Not Delete Me
