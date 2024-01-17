<?php

use App\Http\Controllers\WebAdminController\CategorieController;
use App\Http\Controllers\WebAdminController\EvenementController;
use App\Http\Controllers\WebController\PageTicketController;
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

Route::get('/', [PageTicketController::class,'index'])->name('index');
Route::get('/all_events', [PageTicketController::class,'allevents'])->name('all_event');
Route::get('/event_detail/{id}/', [PageTicketController::class,'eventdetail'])->name('event_detail');

Route::prefix('admin')->group(function () {

Route::get('/', function ()  {
    return view('dashboard.layout');
})->name('admin.index');


    Route::resource("/categorie",CategorieController::class);
    Route::resource("/evenement",EvenementController::class);
    Route::get("/evenement/add_ticket/{id}",[EvenementController::class,'create_ticket'])->name('ticket.create');
    Route::post("/evenement/store_ticket",[EvenementController::class,'store_ticket'])->name('ticket.store');
});


