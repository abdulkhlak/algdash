<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
default route
--------------
=> Route::get('/admin', 'HomeController@index')->name('home');
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', 'Frontend\BuyerController@index')->name('index');
Route::get('/home-page-3', 'Frontend\BuyerController@thankyou')->name('thank_you_page');
Route::post('/store','Frontend\BuyerController@store')->name('buyer_store');
// DATA VIEW
Route::get('/data','Frontend\BuyerController@data')->name('data_view');
//DATA DETAILS
Route::get('/details/{id}','Frontend\BuyerController@details')->name('details');
//DATA DELETE
Route::post('/deleteall','Frontend\BuyerController@deleteall')->name('deleteall');










/*
|--------------------------------------------------------------------------
| BACKEND ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/dashboard','Backend\BackendController@index')->name('dashboard')->middleware('auth');


// PROPERTY ROUTE

Route::group(['prefix' => 'property-types',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\propertyController@view')->name('property_view');
	Route::get('/add','Backend\propertyController@add')->name('property_add');
	Route::post('/store','Backend\propertyController@store')->name('property_store');
	Route::get('/edit/{id}','Backend\propertyController@edit')->name('property_edit');
	Route::post('/update/{id}','Backend\propertyController@update')->name('property_update');
	Route::get('/delete/{id}','Backend\propertyController@delete')->name('property_delete');

});

// BEDROOMS ROUTE

Route::group(['prefix' => 'bedrooms',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\bedroomsController@view')->name('bedroom_view');
	Route::get('/add','Backend\bedroomsController@add')->name('bedroom_add');
	Route::post('/store','Backend\bedroomsController@store')->name('bedroom_store');
	Route::get('/edit/{id}','Backend\bedroomsController@edit')->name('bedroom_edit');
	Route::post('/update/{id}','Backend\bedroomsController@update')->name('bedroom_update');
	Route::get('/delete/{id}','Backend\bedroomsController@delete')->name('bedroom_delete');

});

// BATHROOM ROUTE

Route::group(['prefix' => 'bathroom',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\bathroomController@view')->name('bathroom_view');
	Route::get('/add','Backend\bathroomController@add')->name('bathroom_add');
	Route::post('/store','Backend\bathroomController@store')->name('bathroom_store');
	Route::get('/edit/{id}','Backend\bathroomController@edit')->name('bathroom_edit');
	Route::post('/update/{id}','Backend\bathroomController@update')->name('bathroom_update');
	Route::get('/delete/{id}','Backend\bathroomController@delete')->name('bathroom_delete');

});

// PRICE RANGE ROUTE

Route::group(['prefix' => 'price',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\PriceController@view')->name('price_view');
	Route::get('/add','Backend\PriceController@add')->name('price_add');
	Route::post('/store','Backend\PriceController@store')->name('price_store');
	Route::get('/edit/{id}','Backend\PriceController@edit')->name('price_edit');
	Route::post('/update/{id}','Backend\PriceController@update')->name('price_update');
	Route::get('/delete/{id}','Backend\PriceController@delete')->name('price_delete');

});
