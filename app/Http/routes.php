<?php

// Rota para o Dashboard
Route::get('/', 'DashboardController@index');
// Rota para Leite
Route::get('/leite/coleta/{mes?}/{ano?}', 'LeiteController@coleta');
Route::get('/leite/relatorio', 'LeiteController@relatorio');
// Rota para Rebanho
Route::get('/rebanho', 'RebanhoController@index');
Route::get('/rebanho/vacas', 'RebanhoController@vacas');
Route::get('/rebanho/bois', 'RebanhoController@bois');
Route::get('/rebanho/terneiros', 'RebanhoController@terneiros');

Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/login', 'LoginController@login');
Route::group(['middleware' => ['web']], function () {
    //
});
