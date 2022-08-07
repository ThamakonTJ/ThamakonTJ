<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Models\Content;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route as RoutingRoute;

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


Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'checkLogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::middleware(['auth.admin'])-> group (function(){
    Route::get('/', function(){
        return view('welcome');
    });
    Route::get('/content', [ContentController::class,'index']);
    Route::get('/content/create', [ContentController::class, 'create']);
    Route::get('/content/{id}/edit', [ContentController::class, 'edit']);


    ///ahp
    Route::get('/content/ahp', [ContentController::class, 'algorithm']);
    ///PR
    Route::get('/content/purchaing_requestion', [ContentController::class, 'pr']);
    ///QUO
    Route::get('/content/quotation', [ContentController::class, 'quo']);
    ///PO
    Route::get('/content/purchaing_order', [ContentController::class, 'po']);
    ///PI
    Route::get('/content/proforma_invoive', [ContentController::class, 'pi']);
    ///INV
    Route::get('/content/invoive', [ContentController::class, 'inv']);
    ///sup
    Route::get('/content/supplier', [ContentController::class, 'sup']);


    Route::post('/content', [ContentController::class,'store']);
    Route::put('/content/{id}', [ContentController::class,'update']);
    Route::delete('/content/{id}', [ContentController::class,'destroy']);
    
});

