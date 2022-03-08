<?php

use Illuminate\Support\Facades\Route;
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

use Laravel\Lumen\Routing\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/** @var Router $router */
Route::get('/[{id:[a-z0-9_-]+}]', ['as' => 'home', 'uses' => 'HomeController@index']);
