<?php

Route::group(['middleware' => ['web']], function () {
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::auth();
Route::get('/home', 'HomeController@index');
// Rota para o Dashboard
Route::get('/', 'DashboardController@index');
// Rota para Leite
Route::get('/leite/coleta/{mes?}/{ano?}', 'LeiteController@coleta');
Route::get('/leite', 'LeiteController@coleta');
Route::get('/leite/relatorio', 'LeiteController@relatorio');
Route::post('/leite/adiciona', 'LeiteController@adiciona');
// Rota para Rebanho
Route::get('/rebanho', 'RebanhoController@index');
Route::get('/rebanho/vacas', 'RebanhoController@vacas');
Route::get('/rebanho/bois', 'RebanhoController@bois');
Route::get('/rebanho/terneiros', 'RebanhoController@terneiros');
// Rota para Financeiro
Route::get('/financeiro', 'FinanceiroController@index');
});
