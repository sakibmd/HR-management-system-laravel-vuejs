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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

//admin

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard'); 
        Route::get('/all-employees', 'DashboardController@allEmployees');
        Route::get('/all-pending-employees', 'DashboardController@allPendingEmployees');
        Route::get('/all-rejected-employees', 'DashboardController@allRejectedEmployees');
        Route::get('/approve/{id}', 'DashboardController@approve');
        Route::get('/reject/{id}', 'DashboardController@reject');
        Route::get('/deleteRejectedEmployee/{id}', 'DashboardController@deleteRejectedEmployee');
        Route::get('/editemployees/{id}', 'DashboardController@editemployee');
        Route::get('/approved-employee-details-info/{id}', 'DashboardController@detailsApprovedEmployee');
        Route::post('/update-employee/{id}', 'DashboardController@updateemployee');

        Route::get('/our-team', 'DashboardController@ourTeam');
        Route::get('/top-five-employees', 'DashboardController@getTopFiveEmployees');

        
        
    });

//User

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/user-details', 'DashboardController@userDetails');
        Route::get('/editProfileInfo/{id}', 'DashboardController@editProfileInfo');
        Route::post('/updateProfile/{id}', 'DashboardController@updateProfile');
        
    });

