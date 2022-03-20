<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

                    /*EVENT CONTROLLER*/
Route::get('/', [EventController::class,'index']);
Route::get('/events/create', [EventController::class,'create'])->middleware('auth');//Solicitar que usuário faça login
Route::get('/events/{id}', [EventController::class,'show']);
Route::get('/events/contato',[EventController::class,'contato']);
Route::post('/events',[EventController::class,'store']);


Route::get('/contato',function (){
    return view('contato');
});

Route::get('/produtos',function (){
    return view('produto');
});

Route::get('/produto/{id}',function ($id){
    return view('produto',['id' => $id]);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
