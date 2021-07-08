<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsletterController;

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
    return view('index');
});

Route::get('/shop/', [ShopController::class, 'showProducts']);

Route::get('/features/', [FeaturesController::class, 'showShopingCart']);

Route::get('/blog/', [BlogController::class, 'showBlog']);

Route::get('/about/', [AboutController::class, 'showAbout']);

Route::post('/newsletter/', [NewsletterController::class, 'addNewsletter']);


