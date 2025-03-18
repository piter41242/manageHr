<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\rolController;
use App\Http\Controllers\Api\epsController;
use App\Http\Controllers\Api\nacionalidadController;
use App\Http\Controllers\Api\generoController;
use App\Http\Controllers\Api\estadoCivilController;
use App\Http\Controllers\Api\tipoHorasController;
use App\Http\Controllers\Api\tipoDocumentoController;



Route::get('/rols', [rolController::class, 'index']);
Route::post('/rols',[rolController::class, 'store']);
Route::put('/rols/{id}',[rolController::class, 'update']);
Route::get('/rols/{id}',[rolController::class, 'show']);
Route::patch('/rols/{id}',[rolController::class, 'updatePartial']);
Route::delete('/rols/{id}',[rolController::class,'destroy'] );

Route::get('/epss', [epsController::class, 'index']);
Route::post('/epss',[epsController::class, 'store']);
Route::put('/epss/{id}',[epsController::class, 'update']);
Route::get('/epss/{id}',[epsController::class, 'show']);
Route::patch('/epss/{id}',[epsController::class, 'updatePartial']);
Route::delete('/epss/{id}',[epsController::class,'destroy'] );

Route::get('/nacionalidad', [nacionalidadController::class, 'index']);
Route::post('/nacionalidad',[nacionalidadController::class, 'store']);
Route::put('/nacionalidad/{id}',[nacionalidadController::class, 'update']);
Route::get('/nacionalidad/{id}',[nacionalidadController::class, 'show']);
Route::patch('/nacionalidad/{id}',[nacionalidadController::class, 'updatePartial']);
Route::delete('/nacionalidad/{id}',[nacionalidadController::class,'destroy'] );

Route::get('/genero', [generoController::class, 'index']);
Route::post('/genero',[generoController::class, 'store']);
Route::put('/genero/{id}',[generoController::class, 'update']);
Route::get('/genero/{id}',[generoController::class, 'show']);
Route::patch('/genero/{id}',[generoController::class, 'updatePartial']);
Route::delete('/genero/{id}',[generoController::class,'destroy'] );


Route::get('/estadocivil', [estadoCivilController::class, 'index']);
Route::post('/estadocivil',[estadoCivilController::class, 'store']);
Route::put('/estadocivil/{id}',[estadoCivilController::class, 'update']);
Route::get('/estadocivil/{id}',[estadoCivilController::class, 'show']);
Route::patch('/estadocivil/{id}',[estadoCivilController::class, 'updatePartial']);
Route::delete('/estadocivil/{id}',[estadoCivilController::class,'destroy'] );


Route::get('/tipohoras', [tipoHorasController::class, 'index']);
Route::post('/tipohoras',[tipoHorasController::class, 'store']);
Route::put('/tipohoras/{id}',[tipoHorasController::class, 'update']);
Route::get('/tipohoras/{id}',[tipoHorasController::class, 'show']);
Route::patch('/tipohoras/{id}',[tipoHorasController::class, 'updatePartial']);
Route::delete('/tipohoras/{id}',[tipoHorasController::class,'destroy'] );

Route::get('/tipodocumento', [tipoDocumentoController::class, 'index']);
Route::post('/tipodocumento',[tipoDocumentoController::class, 'store']);
Route::put('/tipodocumento/{id}',[tipoDocumentoController::class, 'update']);
Route::get('/tipodocumento/{id}',[tipoDocumentoController::class, 'show']);
Route::patch('/tipodocumento/{id}',[tipoDocumentoController::class, 'updatePartial']);
Route::delete('/tipodocumento/{id}',[tipoDocumentoController::class,'destroy'] );