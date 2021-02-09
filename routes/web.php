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

Auth::routes();
 
 
 


Route::post('/generic/search', 'HomeController@Gsearch')->name('generic.search');
Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index');


 
route::get('/mark/completed/task/{id}', 'TasksController@MarkCompleted')->name('task.mrkCompleted');
route::post('/add/new/task', 'TasksController@AddTask')->name('user.AddTask');
route::get('/add/new/task', 'TasksController@create')->name('newtask.create');


route::get('/register/new', 'UserController@new')->name('user.register.new');
route::post('/register', 'UserController@register')->name('user.register');
route::get('/user/profile/edit/{id}', 'UserController@edit')->name('user.edit.profile');
route::post('/user/profile/update/{id}', 'UserController@update')->name('user.update.profile');

route::get('/register/profile/{id?}/', 'UserController@completeProfile1')->name('user.complete_profile1');
route::post('/register/profile/step2/{id?}', 'UserController@completeProfile2')->name('user.complete_profile2');
route::get('/register/profile/step3/education/{id?}', 'UserController@CreateEducation')->name('education.create');
route::post('/register/profile/step3/education/{id?}', 'UserController@completeProfile3')->name('user.complete_profile3');
route::post('/register/profile/step4/experience/{id?}', 'UserController@completeProfile4')->name('user.complete_profile4');
route::get('/register/profile/step4/experience/{id?}', 'UserController@OpenExperience')->name('user.OpenExperience');
route::get('/register/profile/step5/documentsupload/{id?}', 'UserController@CreateDocuments')->name('documents.create');
route::post('/register/profile/step5/documentsupload/{id?}', 'UserController@StoreDocuments')->name('documents.store');



route::post('/register/profile/step6/{id?}', 'UserController@completeProfile6')->name('user.complete_profile6');
route::post('/register/profile/step7/{id?}', 'UserController@completeProfile7')->name('user.complete_profile7');
route::get('/register/profile/step8/{id?}', 'UserController@completeProfile8')->name('user.complete_profile8');

route::get('/hr/dashboard', 'UserController@dashboard')->name('hr.dashboard');
route::get('/hr/employees', 'UserController@employees')->name('hr.employees');
route::get('/hr/user/profile/{id}', 'UserController@profile')->name('user.profile');
route::get('/hr/user/sort/{a}', 'UserController@sort')->name('user.sort');

 
 Route::resource('/category', 'CategoryController');
 Route::resource('/position', 'PositionController');
 Route::resource('/department', 'DepartmentController');
 Route::resource('/region', 'RegionController');
 Route::resource('/province', 'ProvinceController');
 Route::resource('/donor', 'DonorController');
 Route::resource('/project', 'ProjectController');
 Route::resource('/currency', 'CurrencyController');
