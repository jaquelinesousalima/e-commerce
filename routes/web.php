<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\PostCommentController;

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

Route::get('/shop', [ShopController::class, 'showProducts']);

Route::get('/blog', [BlogController::class, 'showBlog']);

Route::get('/about', [AboutController::class, 'showAbout']);

Route::post('/newsletter', [NewsletterController::class, 'addNewsletter']);

Route::get('/contact', [ContactController::class, 'showContact']);

Route::post('/contact-message', [ContactMessageController::class, 'addContactMessage']);

Route::get('/shopping', [ShoppingController::class, 'showCart']);

Route::get('/blog-detail/{id}', [BlogController::class, 'showBlogDetail']);

Route::post('/post-comment', [PostCommentController::class, 'addComment']);