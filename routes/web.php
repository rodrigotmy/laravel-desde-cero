<?php

// DB::listen(function($query) {
// 	var_dump($query->sql);
// });

use Illuminate\Support\Facades\Route;

Route::view('/', 'home') -> name('home');

Route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
// Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::resource('musica', 'MusicController')
	->parameters(['musica' => 'music'])
	->names('musics');

// Route::get('/musica', 'MusicController@index')->name('musics.index');
// Route::get('/musica/crear', 'MusicController@create')->name('musics.create');
// Route::get('/musica/{music}/editar', 'MusicController@edit')->name('musics.edit');
// Route::patch('/musica/{music}', 'MusicController@update')->name('musics.update');
// Route::post('/musica', 'MusicController@store')->name('musics.store');
// Route::get('/musica/{music}', 'MusicController@show')->name('musics.show');
// Route::delete('/musica/{music}', 'MusicController@destroy')->name('musics.destroy');

Route::get('categorias/{category}', 'CategoryController@show')->name('categories.show');

Route::get('/contacto', 'ContactController@index') -> name('contact.index');
Route::post('/contacto', 'MessageController@store') -> name('message.store');


Route::get('/acerca', 'NotificationController@index') -> name('about.index');
Route::get('/acerca/crear', 'NotificationController@create') -> name('notification.create');
Route::post('/acerca', 'NotificationController@store') -> name('notification.store');
Route::get('/about/{notification}', 'NotificationController@show') -> name('notification.show');
// Auth::routes(['register' => false]);

Auth::routes();