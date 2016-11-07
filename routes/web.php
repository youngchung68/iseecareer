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
Route::get('/', function () {return view('welcome');});
Route::get('/employers', function () {return view('employers');});
Route::get('/jobs', function () {return view('jobs');});



Auth::routes();
//Route::get('admin', function(){
//    echo 'You have access ';
//})->middleware('admin');
//'prefix'=>'admin',,'as' => 'admin.'

Route::group(['middleware'=>'admin','as' => 'admin.'], function(){

//    Route::get('/home', 'HomeController@index');
    Route::get('/admin',function(){return view('admin.index');});
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');

});












//Route::get('/', function () {
//    return view('login');
//});
//Route::get('/login','Adminauth\AuthController@showLoginForm');
//Route::post('login', 'Adminauth\AuthController@login');
//
//
//Route::group(['middleware'=>['admin']], function(){
//    Route::get('/dashboard','Admin\AdminController@dashboard');
//    Route::get('/logout','Adminauth\AuthController@logout');
//});

//
//Route::get('/create', function(){
//    App\User::create([
//        'name'=>'young',
//        'username'=>'chung',
//        'email'=>'youngchung68@gmail.com',
//        'password' => bcrypt('1234567'),
//
//    ]);
//});


//Route::get('/dashboard',function(){
//    return view('admin.layout');
//});


//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
//
//Route::get('/login/magic','Auth\MagicLoginController@show');
//Route::post('/login/magic','Auth\MagicLoginController@sendToken');



