<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\TravellersController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\UserController;
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

Route::get('/admin', function () {
    return view('admin.A_dashboard');
});

//events create by admin

Route::get('/events',[EventsController::class,'widgets'])->name('admin.events');
Route::get('/events/Eventlist',[EventsController::class,'Eventlist'])->name('admin.events.eventlist');
Route::post('/events/EventStore',[EventsController::class,'EventStore']);

//agency add by admin

Route::get('/agencies',[AgenciesController::class,'widgets'])->name('admin.agencies');
Route::get('/agencies/Agencylist',[AgenciesController::class,'Agencylist'])->name('admin.agencies.agencylist');
Route::post('/agencies/AgencyStore',[AgenciesController::class,'AgencyStore']);

//traveller add by admin

Route::get('/travellers',[TravellersController::class,'widgets'])->name('admin.travellers');
Route::get('/travellers/Travellerlist',[TravellersController::class,'Travellerlist'])->name('admin.travellers.travellerlist');
Route::post('/travellers/TravellerStore',[TravellersController::class,'TravellerStore']);

//destination add by admin

Route::get('/destinations',[DestinationsController::class,'widgets'])->name('admin.destinations');
Route::get('/destinations/Destinationlist',[DestinationsController::class,'Destinationlist'])->name('admin.destinations.destinationlist');
Route::post('/destinations/DestinationStore',[DestinationsController::class,'DestinationStore']);


//create account
Route::get('/accounts/Travellerlist',[TravellersController::class,'Travellerlist'])->name('admin.accounts.travellerlist');

//view agencies

Route::get('/agencies/WagencyList',[AgenciesController::class,'WagencyList'])->name('admin.agencies.WagencyList');

//user login
Route::get('/',[HomeController::class,'home'])->name('website');
Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

//website index


Route::get('/', function () {
  return view(view: 'website.home');
});
