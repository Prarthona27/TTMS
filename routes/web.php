<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
Use Illuminate\Routing\Route as RoutingRoute; 
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

Route::get('/', function () {
    return view('admin.A_dashboard');
});

Route::get('/events',[EventsController::class,'widgets'])->name('admin.events');
Route::get('/events/Eventlist',[EventsController::class,'Eventlist'])->name('admin.events.eventlist');
Route::post('/events/EventStore',[EventsController::class,'EventStore']);