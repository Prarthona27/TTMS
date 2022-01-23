<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\TravellersController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
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
//Admin
Route::group(['prefix'=>'admin'],function (){

    //admin login
    Route::get('/login',[AdminUserController::class,'login'])->name('admin.login');
    Route::post('/login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');
    

  Route::group(['middleware'=>['auth','admin']],function (){
      Route::get('/', function () {
        return view('admin.A_dashboard');
    })->name('home');
    Route::get('/admin', function () {
      return view('admin.A_dashboard');
    });

    Route::get('/logout',[AdminUserController::class,'Adminlogout'])->name('admin.logout');

    //events create by admin
    
    Route::get('event/approve/{event_id}',[EventsController::class,'eventApprove'])->name('admin.event.approve');
    //agency add by admin
    Route::get('/agencies',[AgenciesController::class,'widgets'])->name('admin.agencies');
    Route::get('/agencies/Agencylist',[AgenciesController::class,'Agencylist'])->name('admin.agencies.agencylist');
    Route::post('/agencies/AgencyStore',[AgenciesController::class,'AgencyStore'])->name('admin.agency.store');

    //traveller add by admin

    Route::get('/travellers',[TravellersController::class,'widgets'])->name('admin.travellers');
    Route::get('/travellers/Travellerlist',[TravellersController::class,'Travellerlist'])->name('admin.travellers.travellerlist');
    
    Route::get('traveller/approve/{traveller_id}',[TravellersController::class,'travellerApprove'])->name('admin.traveller.approve');
  
    //destination add by admin

    Route::get('/destinations',[DestinationsController::class,'widgets'])->name('admin.destinations');
    Route::get('/destinations/Destinationlist',[DestinationsController::class,'Destinationlist'])->name('admin.destinations.destinationlist');
    Route::post('/destinations/DestinationStore',[DestinationsController::class,'DestinationStore'])->name('destination.store');
    Route::get('destination/view/{destination_id}',[DestinationsController::class,'destinationView'])->name('admin.destination.view');
    Route::get('destination/edit/{destination_id}',[DestinationsController::class,'destinationEdit'])->name('admin.destination.edit');
    Route::put('destination/update/{destination_id}',[DestinationsController::class,'destinationUpdate'])->name('admin.destination.update');
    Route::get('destination/delete/{destination_id}',[DestinationsController::class,'destinationDelete'])->name('admin.destination.delete');


    //traveller list
    Route::get('/accounts/Travellerlist',[TravellersController::class,'Travellerlist'])->name('admin.accounts.travellerlist');

    //view agencies

    Route::get('/agencies/WagencyList',[AgenciesController::class,'WagencyList'])->name('admin.agencies.WagencyList');

  });
});



  //website
  Route::get('/events/Eventlist',[EventsController::class,'Eventlist'])->name('agency.events.eventlist');
Route::get('/',[HomeController::class,'home'])->name('website');
Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
Route::get('event/details/{event_id}',[EventsController::class,'W_eventView'])->name('website.event.view');
Route::get('destination/details/{destination_id}',[DestinationsController::class,'W_destinationView'])->name('website.destination.view');

Route::get('/book/tour/{package_id}',[EventsController::class,'bookTour'])->name('book.tour');
Route::post('/travellers/TravellerStore',[TravellersController::class,'TravellerStore'])->name('store.traveller');
//website index



//agency
Route::group(['prefix'=>'agency'],function (){
  Route::group(['middleware'=>['auth','agency']],function (){
    Route::get('/events',[EventsController::class,'widgets'])->name('agency.events');
    
    Route::post('/events/EventStore',[EventsController::class,'EventStore'])->name('agency.store');
    Route::get('event/view/{event_id}',[EventsController::class,'eventView'])->name('agency.event.view');
    Route::get('event/edit/{event_id}',[EventsController::class,'eventEdit'])->name('agency.event.edit');
    Route::put('event/update/{event_id}',[EventsController::class,'eventUpdate'])->name('agency.event.update');
    Route::get('event/delete/{event_id}',[EventsController::class,'eventDelete'])->name('agency.event.delete');
  });
});
