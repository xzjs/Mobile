<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Ad;
use App\Mac;
use Illuminate\Http\Request;

Route::get('/', function () {
    $ads=Ad::get();
    $ads_array=array();
    foreach ($ads as $ad) {
        $ads_array[$ad['position']]=$ad['url'];
    }
    $mac=Mac::first()->value('mac');
    return view('welcome',[
        'ads'=>$ads_array,
        'mac'=>$mac
    ]);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
